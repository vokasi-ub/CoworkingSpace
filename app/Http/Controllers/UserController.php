<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use \Auth;
use Illuminate\Support\Facades\Session;



class UserController extends Controller
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
        $user = User::when($request->keyword, function ($query) use ($request) {
        $query->where('nama', 'like', "%{$request->keyword}%");
        })->where('status','User')->get();
        return view('admin.user.dataUser',compact('user'));
        
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
        $user = User::find($id);
        return view('admin.user.editUser',compact('user'));
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
                'nama'      =>'required',
                'username'  =>'required',
                'email'     =>'required',

            ]);
            
          $user = User::find($id);
          $user->nama   = $request->get('nama');
          $user->username    = $request->get('username');
          $user->email       = $request->get('email');
          $user->no_telp     = $request->get('no_telp');
          $user->save();
          return redirect('/user')->with('success', 'Data user Berhasil Terupdate');
    }
	
    /** 
     * Remove the specified resou   rce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('success', 'Data user Berhasil Dihapus');
    }
}
