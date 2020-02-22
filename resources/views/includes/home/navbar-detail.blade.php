 <!-- Navbar -->
 <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ url('frontend/images/logo_nomads.png') }}" alt="logo_nomads">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2"><a href="{{ url('/') }}" class="nav-link page-scroll active">Home</a></li>
                <li class="nav-item mx-md-2"><a href="{{ url('/') }}" class="nav-link page-scroll">Paket Travel</a></li>
                @guest
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop"
                            data-toggle="dropdown">Service</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/') }}" class="btn btn-sm-success dropdown-item page-scroll">KONTAK</a>
                          
                        </div>
                    </li>
                <li class="nav-item mx-md-2"><a href="{{ url('/') }}" class="nav-link page-scroll">Testimonial</a></li>
                @endguest
                @auth
                <li class="nav-item ml-5 mx-md-2"><a href="#" class="nav-link"> {{ Auth::user()->name }}</a></li>
                @endauth

            </ul>
           @guest
                <!-- Mobile Button -->
            <form action="" class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0 " type="submit"
                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Masuk
                </button>
            </form>
            <!-- Web Button -->
            <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn  btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit"
                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Masuk
                </button>
            </form>
           @endguest

           @auth
               <!-- Mobile Button -->
        <form action="{{ url('logout') }}" method="POST" class="form-inline d-sm-block d-md-none">
                @csrf
                <button class="btn btn-login my-2 my-sm-0">
                    Keluar
                </button>
            </form>
            <!-- Web Button -->
            <form action="{{ url('logout') }}" method="POST" class="form-inline my-2 my-lg-0 d-none d-md-block">
               @csrf
                <button class="btn  btn-login btn-navbar-right my-2 my-sm-0 px-4">
                    Keluar
                </button>
            </form>
           @endauth
        </div>
    </nav>
</div>