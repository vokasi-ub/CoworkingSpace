@extends('layouts.front.masterReg')
@section('content')
<section id="home" class="main-banner parallaxie" style="background: url('{{ asset('assetsFrontend/uploads/main.jpg')}}')">
    <div class="heading">
        <h1>Make An Event<span> . </span></h1>
        <h3 class="cd-headline clip is-full-width">
            <span class="cd-words-wrapper">
            <b class="is-visible">Community For</b>
            <b>Web Design</b>
            <b>Creative Design</b>
            <b>Startup And Business</b>
            <b>Growing Up With Us</b>                
            </span>
            <div class="btn-ber">
                <a class="get_btn hvr-bounce-to-top nav-link js-scroll-trigger" href="http://localhost:8000/home#venue">Available Place</a>
                <a class="learn_btn hvr-bounce-to-top nav-link js-scroll-trigger" href="http://localhost:8000/home#make">Make Avent</a>
            </div>
        </h3>
    </div>
</section>
<div id="venue" class="section lb">
    <div class="container">
        <div class="section-title text-center" style="background: url('{{ asset('assetsFrontend/uploads/hero-bg.png')}}')">
            <h3>Coworking Place</h3>
            <hr class="garisT">
            <br>
            <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
        </div>
        <!-- end title -->
        <div class="row">
            @foreach($venue as $row)
            <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="post-box">
                    <div class="post-thumb">
                        <img src="images/{{ $row->image }}" class="img-fluid" alt="post-img" />
                    </div>
                    <div class="post-info">
                        <center>
                        <h3 style="font-size:26px;color:#2098D1;">{{$row->nama_tempat}}</h3>
                        <hr>
                        <center>
                        <h3 style="font-size:18px;color:#2098D1;">IDR {{$row->harga}}</h3>
                        <p style="font-size:12px">{!! $row->deskripsi !!}</p>
                        <hr>
                        <a href="{{ route('home.show',$row->id_venue)}}">
                        <button class="btn btn-info" type="submit"><i class="fa fa-first-order"></i> Booking Now</button>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</div>
<div id="upload" class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="right-box-pro wow fadeIn">
                    <img src="{{ asset('assetsFrontend/uploads/banner4.jpg')}}" alt="" class="img-fluid img-rounded">
                </div>
                <!-- end media -->
            </div>
            <div class="col-md-6">
                <div class="message-box">
                    <div style="margin-left:12%">
                        <h2>Data Transaksi Anda</h2>
                        <hr class="garis">
                        <br><br>
                        @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}  
                        </div>
                        <br />
                        @endif
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="font-size:14px;">Bukti Pembayaran : </label>
                            <div class="col-sm-11">
                                <a href="/open"><button class="btn btn-info" type="button"><i class="fa fa-money"></i> Transaksi Anda</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end messagebox -->
        </div>
        <!-- end col -->
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end section -->
<div id="make" class="section wb">
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
                    </div>
                    <br />
                    @endif
                    <form action="{{ route('home.event') }}" method="post" enctype="multipart/form-data">
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
                                    <option value="{{$row->id_venue}}">{{$row->get_venue->nama_tempat}}</option>
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
                                <input placeholder="Waktu Event" name="waktu_event" class="form-control" type="text" onfocus="(this.type='date')" required="required">                             
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Deskripsi:</label>
                            <div class="col-sm-11">
                                <textarea  id="summernote" rows="5" name="deskripsi_event" class="form-control" placeholder="Deskripsi"></textarea>
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
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="right-box-pro wow fadeIn">
                    <img src="{{ asset('assetsFrontend/uploads/gallery_img-05.jpg')}}" alt="" class="img-fluid img-rounded">
                </div>
                <!-- end media -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->      
<div class="container">
    <div class="section-title text-center">
        <h3>Contact</h3>
        <hr class="garisT">
        <br>
        <div class="row">
            <div class="col-md-1">
                <p></p>
            </div>
            <div class="col-md-3">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{ asset('assetsFrontend/images/logo.png')}}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">OnNext Media</h3>
                        <span class="post">Find Us On</span>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-skype"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <p></p>
            </div>
            <div class="col-md-6">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=vokasi%20ub&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                    <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                </div>
            </div>
        </div>
    </div>
    <!-- end title -->
</div>
<!-- end container -->
</div><!-- end section -->
@endsection