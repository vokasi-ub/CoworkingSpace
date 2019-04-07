 <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="{{ asset('assetsFrontend/images/logo.png')}}" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="http://localhost:8000/home#home">Home</a>
            </li>
      
		      	<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/home#venue">Venue</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/open">Data Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/home#make">Make Event</a>
            </li>
   
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost:8000/home#contact"> Contact us</a>
            </li>
             <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Welcome {{ Auth::user()->username }},<i class="fa fa-sign-out"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </div>
      </div>