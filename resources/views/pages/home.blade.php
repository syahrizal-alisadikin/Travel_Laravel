@extends('layouts.app')

@section('title')

Paket Travel
    
@endsection

@section('content')
       <!-- Header -->
       
       <header class="text-center">
        <div id="typed-strings">
            <h1>Nama : Syahrizal As</h1>
            <h3>Npm : 109170940001</h3>
            <h3>Jurusan : Sistem Informasi</h3>
        </div>
        <span id="typed"></span>

        <h1> Mari Kita Jalan-jalan
            <br>
            As Easy One Click
        </h1>

        <p class="mt-3"> You Will See Beautiful
            <br>
            Moment You Never See Before
        </p>

        <a href="#travelcontent" class="btn btn-get-started px-4">Get Started</a>

    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Member</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-travel" id="travel">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-travel-heading">
                        <h2>Wisata Travel</h2>
                        <p>Something that you never try
                            <br>
                            before in this word
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-travel-content" id="travelcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                     @foreach ($items as $item)
                       <div class="col-sm-6 col-md-4 col-lg-3">
                         <div 
                           class="card-travel text-center d-flex flex-column" 
                           style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''  }}');"
                           >
                            <div class="travel-country">{{ $item->location }}</div>
                               <div class="travel-location">{{ $item->title }}</div>
                                  <div class="travel-button mt-auto">
                                       <a href="{{ url('detail',$item->slug)}}" class="btn btn-travel-detail px-4" >
                                       View
                                      </a>
                             </div>
                          </div>
                        </div>
                      @endforeach
                 </div>
             </div>
        </section>
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>companies are trusted us <br> more than just a trip</p>
                    </div>
                    <div class="col-md-8">
                        <img src="frontend/images/partner.png" alt="image partner" class="image-partners">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-heading" id="testimonialheading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>They are you loving Us</h2>
                        <p>Momen where giving them <br> the best experience</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="section-testimonial-content" id="testimonialcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/izal.jpg" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4"> Syahrizal As</h3>
                                <p class="testimonial">
                                    "ini adalah contoh ini adalah contoh"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/raden.JPEG" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Joni Firmansyah</h3>
                                <p class="testimonial">
                                    "ini adlah contoh ini adlah contoh ini adlah contoh ini adlah contoh ini adlah contoh"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to NUSA PENINDA
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/rd.jpg " alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Fairus Wildan</h3>
                                <p class="testimonial">
                                    "I Loved it when the waves was shaking harder - I was scared too"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to BROMO MALANG
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection