<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use DB;
use \Auth;
use Illuminate\Database\Eloquent\Model;
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
    public function index(Request $request)
    {
        $transaksi = Transaksi::with(['get_users','get_venue'])->when($request->keyword, function ($query) use ($request) {
        $query->where('kode_transaksi', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.transaksi.dataTransaksi',compact('transaksi'));
        
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
