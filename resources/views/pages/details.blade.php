@extends('layouts.app-home')
@section('title', 'Details Travel')

@section('content')
<main class="details">
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{$item->title}}</h1>
                        <p>{{$item->location}}</p>

                        @if($item->galleries->count())
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img 
                                        src="{{ Storage::url($item->galleries->first()->image)}}"
                                        class="xzoom" 
                                        id="xzoom-default" 
                                        xoriginal="{{ Storage::url($item->galleries->first()->image)}}"
                                    />
                                </div>
                                    <div class="xzoom-thumbs" style="margin-left:35%;">
                                        @foreach($item->galleries as $gallery)
                                        <a href="{{ Storage::url($gallery->image) }}">
                                            <img
                                                src="{{ Storage::url($gallery->image) }}"
                                                class="xzoom-gallery"
                                                width="128"
                                                xpreview="{{ Storage::url($gallery->image) }}"
                                            />
                                        </a>
                                        @endforeach
                                    
                                    </div>
                            </div>      
                         
                        @endif
                        <h2>Tentang Wisata</h2>
                        {!! $item->about !!}
                        <div class="features row">
                            <div class="col-md-4">
                            <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="feature-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                <p>{{ $item->featured_event }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                            <img src="{{ url('frontend/images/ic_bahasa.png') }}" alt="" class="feature-image">
                                <div class="description ">
                                    <h3>Language</h3>
                                <p>{{ $item->language }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                            <img src="{{ url('frontend/images/ic_foods.png') }}" alt="" class="feature-image">
                                <div class="description ">
                                    <h3>Foods</h3>
                                <p>{{ $item->foods }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Member are Going</h2>
                        <div class="member my-2">
                        <img src="{{ url('frontend/images/izal.jpg') }}" alt="" class="member-image rounded-circle mr-2">
                        <img src="{{ url('frontend/images/rd.jpg') }}" alt="" class="member-image rounded-circle mr-2">
                        <img src="{{ url('frontend/images/raden.JPEG') }}" alt="" class="member-image rounded-circle mr-2">
                        <img src="{{ url('frontend/images/avatar-1.png') }}" alt="" class="member-image rounded-circle mr-2">
                        <img src="{{ url('frontend/images/avatar-2.png') }}" alt="" class="member-image rounded-circle mr-2">
                            <hr>
                            <h2>Trip Informations</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date of Defarture</th>
                                <td class="text-right" width="50%">{{ \carbon\carbon::create($item->departure_date)->format('F n,Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                <td class="text-right" width="50%">{{ $item->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                <td class="text-right" width="50%">{{ $item->type}}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td class="text-right" width="50%">${{ $item->price }},00 / Person</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="join-container">
                        @auth
                        <form action="{{ url('checkout_process', $item->id)}}" method="post">
                            @csrf
                            <button class="btn btn-block btn-join-now mt-3 py-2" type="submit" >JOIN NOW</button>
                        </form>
                        
                        @endauth
                        @guest
                        <a href="{{ Route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">Login or Register to Join</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> 
@endsection

@push('prepend-style')
<link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>  
@endpush