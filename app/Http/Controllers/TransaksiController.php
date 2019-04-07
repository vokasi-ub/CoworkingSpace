<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use DB;
use \Auth;
use Illuminate\Support\Facades\Session;



class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $transaksi = DB::table('transaksi')
            ->join('venue', 'transaksi.id_venue', '=', 'venue.id_venue')
            ->join('users', 'transaksi.id', '=', 'users.id')
            ->get();
        return view('admin.transaksi.dataTransaksi',compact('transaksi'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('admin.transaksi.editTransaksi',compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'status_booking'      =>'required',

            ]);
            
          $transaksi = Transaksi::find($id);
          $transaksi->status_booking   = $request->get('status_booking');
          $transaksi->save();
          return redirect('/transaksi')->with('success', 'Data transaksi Berhasil Terupdate');
    }
	
    /** 
     * Remove the specified resou   rce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi')->with('success', 'Data transaksi Berhasil Dihapus');
    }
}
