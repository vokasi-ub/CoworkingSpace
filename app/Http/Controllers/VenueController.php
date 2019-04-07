<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
use DB;
use \Auth;
use Illuminate\Support\Facades\Session;



class VenueController extends Controller
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
    public function index(\Illuminate\Http\Request $request)
    {
        $venue = Venue::when($request->keyword, function ($query) use ($request) {
        $query->where('nama_venue', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.venue.dataVenue',compact('venue'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venue.createVenue');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tempat'   =>'required',
            'harga'         =>'required',
            'deskripsi'     =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);
        
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        
          $venue = new Venue([
          'nama_tempat'   => $request->get('nama_tempat'),
          'harga'         => $request->get('harga'),
          'deskripsi'     => $request->get('deskripsi'),
          'image'         => $imageName
          ]);
          $venue->save();
          return redirect('/venue')->with('success','Berhasil Menambah Data');
        

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
        $venue = Venue::find($id);
        return view('admin.venue.editVenue',compact('venue'));
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
                'nama_tempat'   =>'required',
                'harga'         =>'required',
                'deskripsi'     =>'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ]);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

          $venue = Venue::find($id);
          $venue->nama_tempat   = $request->get('nama_tempat');
          $venue->harga         = $request->get('harga');
          $venue->deskripsi     = $request->get('deskripsi');
          $venue->image         = $imageName;
          $venue->save();
          return redirect('/venue')->with('success', 'Data venue Berhasil Terupdate');
    }
	
    /** 
     * Remove the specified resou   rce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venue = Venue::find($id);
        $venue->delete();
        return redirect('/venue')->with('success', 'Data venue Berhasil Dihapus');
    }
}
