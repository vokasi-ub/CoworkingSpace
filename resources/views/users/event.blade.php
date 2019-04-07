@extends('layouts.front.masterReg')
@section('content')
<div class="main-banner" style="background-image: url('{{ asset('assetsFrontend/uploads/page-header-bg.jpg')}}');height:280px">
    <center>
        <div class="jarak"></div>
        <h4 class="judul" style="margin-top:10%">Detail Booking</h4>
        </b><br>
        <hr class="garisT">
    </center>
</div>  
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h2>Make An Event</h2>
                    <hr class="garis">
                    <br><br>
                       @if(session()->get('success'))
                      <div class="alert alert-success">
                        {{ session()->get('success') }}  
                      </div><br />
                    @endif
                    <form action="{{ route('event.store') }}z" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                    <div class="col-md-10">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif     
                    <div class="form-group">
                            <label class="control-label col-sm-4" style="font-size:14px;">Nama Event:</label>
                            <div class="col-sm-11">
                                <input type="hidden" name="id" value="{{ Auth::user()->id}}">
                                <input type="text" name="nama_event" class="form-control" placeholder="Enter nama event">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5">Venue:</label>
                            <div class="col-sm-11"> 
                                <select class="form-control" name="id_venue">
                                    <option value="">Pilih Venue</option>
                                    @foreach($selVenue as $row)

                                    <option value="{{$row->id_venue}}">{{$row->nama_tempat}}</option>
                                    @endforeach

                                </select>  
                           </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5">Jenis Event:</label>
                            <div class="col-sm-11"> 
                                <select class="form-control" name="jenis">
                                    <option value="web development">Web Development</option>
                                    <option value="design">Design And Photography</option>
                                    <option value="startup">Startup And Business</option>
                                </select>  
                           </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Pemateri:</label>
                            <div class="col-sm-11">
                                <input type="text" name="pemateri" class="form-control" placeholder="Enter nama event">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5">Waktu Event:</label>
                            <div class="col-sm-11">
                                <input placeholder="Waktu Event" name="waktu_event" class="form-control" type="text" onfocus="(this.type='date')" required="required">                             </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Deskripsi:</label>
                            <div class="col-sm-11">
                                <textarea name="deskripsi_event" class="form-control" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Image:</label>
                            <div class="col-sm-11">
                                <input type="file" name="image_event" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end messagebox -->
@endsection