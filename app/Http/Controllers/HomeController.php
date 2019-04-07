<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use App\Venue;
use App\Event;
use App\Transaksi;
use DB;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
        public function index()
        {
		   
                $venue = Venue::all();
                $transaksi = Transaksi::where('status_booking','belum terverifikasi')->get();
                $selVenue = DB::table('transaksi')
                    ->join('venue', 'transaksi.id_venue', '=', 'venue.id_venue')
                    ->where('status_booking','booking')
                    ->where('id',auth()->user()->id )
                    ->get();
				return view('users.homepage',compact('venue','selVenue','transaksi'));
                
        }

        //data transaksi
        public function open()
        {
                $transaksi = DB::table('transaksi')
                    ->join('venue', 'transaksi.id_venue', '=', 'venue.id_venue')
                    ->where('id',auth()->user()->id )
                    ->get();
				return view('users.dataTransaksiUser',compact('transaksi'));
                
        }

        //tampil data venue id
        public function show($id)
        {
            $venue = Venue::find($id);
            return view('users.transaksi',compact('venue'));
            
        }
        
        //insert event
        public function event(Request $request)
        {
             $request->validate([
            'nama_event'        =>'required',
            'jenis'             =>'required',
            'deskripsi_event'   =>'required',
            'image_event' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);
        
        $imageName = time().'.'.$request->image_event->getClientOriginalExtension();
        $request->image_event->move(public_path('images'), $imageName);
        
          $event = new Event([
          'id'   => $request->get('id'),
          'id_venue'      => $request->get('id_venue'),
          'nama_event'    => $request->get('nama_event'),
          'jenis'         => $request->get('jenis'),
          'deskripsi_event'=> $request->get('deskripsi_event'),
          'waktu_event'   => $request->get('waktu_event'),
          'pemateri'      => $request->get('pemateri'),
          'image_event'   => $imageName
          ]);
          $event->save();
          return redirect('http://localhost:8000/home#make')->with('success','Berhasil Membuat Event');
        }

        //insert transaksi
        public function store(Request $request)
        {
            
        $request->validate([
            'tgl_sewa'      =>'required',
            'tgl_selesai'   =>'required'
 
        ]);
        
        $kode = 'NT_'.date('his');
 
          $transaksi = new Transaksi([
          'kode_transaksi'=> $kode,
          'id'         => $request->get('id'),
          'id_venue'   => $request->get('id_venue'),
          'tgl_sewa'   => $request->get('tgl_sewa'),
          'tgl_selesai'=> $request->get('tgl_selesai'),
          'total_pembayaran' => $request->get('total_pembayaran'),
          'status_booking'   => $request->get('status_booking')
          ]);
          $transaksi->save();
          return redirect('http://localhost:8000/home#upload')->with('success','Upload Bukti Pembayaran Anda');
        }

        public function edit($id)
        {
            $transaksi = Transaksi::find($id);
            return view('users.upload',compact('transaksi'));
        }

        //upload bukti
        public function update(Request $request, $id)
        {
            $request->validate([
                'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);
            $imageName = time().'.'.$request->bukti_pembayaran->getClientOriginalExtension();
            $request->bukti_pembayaran->move(public_path('images'), $imageName);

          $transaksi = Transaksi::find($id);
          $transaksi->bukti_pembayaran = $imageName;
          $transaksi->save();
          return redirect('/open')->with('success', 'Berhasil terupload, menunggu verifikasi admin');
        }

        public function destroy($id)
        {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/open')->with('success', 'Data transaksi Berhasil Dihapus');
        }
	
}
