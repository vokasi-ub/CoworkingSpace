<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use DB;
use \Auth;
use Illuminate\Support\Facades\Session;



class EventController extends Controller
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
    public function index(Request $request){
           
        $event = Event::with(['get_users','get_venue'])->when($request->keyword, function ($query) use ($request) {
        $query->where('nama_event', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.event.dataEvent',compact('event'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.editEvent',compact('event'));
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
                'nama_event'        =>'required',
                'deskripsi_event'   =>'required',
                'pemateri'          =>'required'

            ]);
            $imageName = time().'.'.$request->image_event->getClientOriginalExtension();
            $request->image_event->move(public_path('images'), $imageName);
                
            $event = Event::find($id);
            if(empty($request->image_event)){
                $event = Event::find($id);
                $event->nama_event  = $request->get('nama_event');
                $event->deskripsi_event = $request->get('deskripsi_event');
                $event->pemateri    = $request->get('pemateri');
                $event->save();
                return redirect('/event')->with('success', 'Data event Berhasil Terupdate');
            }else {
                
                $event = Event::find($id);
                $event->nama_event  = $request->get('nama_event');
                $event->deskripsi_event = $request->get('deskripsi_event');
                $event->pemateri    = $request->get('pemateri');
                $event->image_event = $imageName;
                $event->save();
                return redirect('/event')->with('success', 'Data event Berhasil Terupdate');
            }    
         
    }
	
    /** 
     * Remove the specified resou   rce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/event')->with('success', 'Data event Berhasil Dihapus');
    }
}
