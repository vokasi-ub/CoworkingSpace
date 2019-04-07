@extends('layouts.front.masterFront')
@section('content')
<section id="home" class="main-banner parallaxie" style="background: url('{{ asset('assetsFrontend/uploads/main.jpg')}}')">
		<div class="heading">
			<h1>Welcome to OnNext<span> . </span></h1>			
			<h3 class="cd-headline clip is-full-width">
				<span class="cd-words-wrapper">
					<b class="is-visible">Community For</b>
					<b>Web Design</b>
					<b>Creative Design</b>
					<b>Startup And Business</b>
					<b>Growing Up With Us</b>
				</span>
				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="/register">Get started</a>
					<a class="learn_btn hvr-bounce-to-top nav-link js-scroll-trigger" href="http://localhost:8000/front#about">Learn More</a>
				</div>
			</h3>
		</div>
	</section>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>Welcome to OnNext</h2><hr class="garis"><br><br>
                        <p>Dengan Coworking space, diharapkan antar individu dapat saling bertukar ide, pikiran, maupun solusi dalam rangka mengembangkan dan memajukan bisnis masing-masing. Menurut Faye Alund selaku Presiden Asosiasi Coworking Space Indonesia, yang diperlukan dalam menjalankan bisnis adalah jaringan atau relasi yang jelas menunjang kelangsungan bisnis seseorang.</p>
                        <a href="http://localhost:8000/front#advantages" class="sim-btn hvr-bounce-to-top nav-link js-scroll-trigger" style="background-color:#007bff;"><span>Advantages</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{ asset('assetsFrontend/uploads/about_04.jpg')}}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="advantages" class="section lb bg" style="background: url('{{ asset('assetsFrontend/uploads/hero-bg.jpg')}}')">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="color:#fff">Our Advantages</h3><hr class="garisT"><br>
                <p style="color:#fff">Beberapa keuntungan yang akan didapat dengan cowoking space</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Development</h2>
                        <p>Pengembangan produk dari suatu pengetahuan yang sudah ada.contohnya Melalui penelitian-penelitian ini tercipta teknologi baru</p>
					</div>
                </div><!-- end col -->
   
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>Support</h2>
						<p>Anda akan mendaptkan support dan dari berbagai pihak baik dalam kerjasama maupun pengembangan.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>New Idea</h2>
						<p>Be your own, If you want to start your own entrepreneur, these 101 fresh moneymaking startup business ideas with low investment to start </p>
					</div>
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="event" class="section lb" style="background: url('{{ asset('assetsFrontend/uploads/hero-bg.png')}}')">
		<div class="container">
			<div class="section-title text-center">
                <h3>Upcoming Event</h3><hr class="garisT">
            </div><!-- end title -->
			
			<div class="gallery-menu row" style="margin-top:-25px;">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-center">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Design And Photography</button>
						<button data-filter=".gal_c">Startup And Business</button>
					</div>
				</div>
			</div><br>		

			<div class="gallery-list row">
				@foreach($web as $row)
				<div class="col-md-4 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img src="images/{{ $row->image_event }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<center><br><br><br><br>
							<a href="images/{{ $row->image_event }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-search-plus"> Zoom In</i></a>
							<a href="images/{{ $row->image_event }}" data-rel="prettyPhoto[gal]" class="hoverbutton button-group global-radius"><i class="fa fa-pencil"> Detail Event</i></a>
							</center>
						</div>
					</div>
				</div>
                @endforeach

				@foreach($design as $row)
                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img src="images/{{ $row->image_event }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<center><br><br><br><br>
							<a href="images/{{ $row->image_event }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-search-plus"> Zoom In</i></a>
							<a href="images/{{ $row->image_event }}" data-rel="prettyPhoto[gal]" class="hoverbutton button-group global-radius"><i class="fa fa-pencil"> Detail Event</i></a>
							</center>
						</div>
					</div>
				</div>	
				@endforeach

                @foreach($startup as $row)
                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
					<div class="gallery-single fix">
						<img src="images/{{ $row->image_event }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<center><br><br><br><br>
							<a href="images/{{ $row->image_event }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-search-plus"> Zoom In</i></a>
							<a href="images/{{ $row->image_event }}" data-rel="prettyPhoto[gal]" class="hoverbutton button-group global-radius"><i class="fa fa-pencil"> Detail Event</i></a>
							</center>
						</div>
					</div>
				</div>	
				@endforeach
				
			
			</div>
			</div>
		</div>
	</div>
	
	
	<div id="venue" class="section lb" style="background: url('{{ asset('assetsFrontend/uploads/bg3.png')}}')">
    <div class="container">
        <div class="section-title text-center">
            <h3>Available Coworking Place</h3>
            <hr class="garisT">
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


    <div id="contact" class="section db" style="background: url('{{ asset('assetsFrontend/uploads/bg3.png')}}')">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3><hr class="garisT">
                <br>
                <div class="row">
                    <div class="col-md-1"><p></p></div>
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
                    </div><div class="col-md-1"><p></p></div>
                    <div class="col-md-6">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=vokasi%20ub&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    </div>

                </div>
            </div><!-- end title -->

       
        </div><!-- end container -->
    </div><!-- end section -->
@endsection