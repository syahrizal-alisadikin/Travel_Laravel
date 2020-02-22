@extends('layouts.checkout')
@section('title', 'Checkout')

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
                            <a href="{{ url('/')}}">Paket Travel</a>
                            </li>
                            <li class="breadcrumb-item">
                            <a href="{{ url('detail', $item->travel_package->slug) }}">Details</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('create'))
                                <div class="alert alert-primary">
                                    {{ session('create') }}
            
                                </div>
                            @endif
                        <h1>Who is Going?</h1>
                        <p> {{ $item->travel_package->title}},  {{ $item->travel_package->location}} </p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td scope="col">Picture</td>
                                        <td scope="col">Name</td>
                                        <td scope="col">Nationality</td>
                                        <td scope="col">Visa</td>
                                        <td scope="col">Passport</td>
                                        <td scope="col"></td>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                @forelse ($item->transaction_detail as $detail)
                                    <tr>
                                        <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" class="rounded-circle" height="60">
                                            </td>
                                        <td class="align-middle">{{ $detail->username }}</td>
                                        <td class="align-middle">{{ $detail->nationality}}</td>
                                            <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A'}}</td>
                                        <td class="align-middle">{{ \Carbon\carbon::createFromDate($detail->doe_passport) >
                                            \Carbon\carbon::now() ? 'Active' : 'Inactive'}}</td>
                                            <td class="align-middle"><a href="{{ route('checkout-remove',$detail->id)}}" class="btn btn-danger"  onclick="return confirm('Yakin Data Mau Dihapus??');">Hapus</a></td>
                                    </tr> 
                                  @empty
                                  <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                 </tr>
                                  @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Members</h2>
                        <form action="{{ route('checkout-create', $item->id) }}" method="post"  class="form-inline">
                            @csrf
                                <label for="username" class="sr-only">Nama</label>
                                    <input
                                    type="text" 
                                    class="form-control mb-2 mr-sm-2" 
                                    id="username" 
                                    name="username"
                                    placeholder="Username"
                                    required>

                                    <label for="nationality" class="sr-only">Nationality</label>
                                    <input
                                        type="text"
                                        name="nationality"
                                        class="form-control mb-2 mr-sm-2"
                                        style="width: 50px;"
                                        id="nationality"
                                        placeholder="Nationality"
                                    />

                                <label for="is_visa" class="sr-only">Preference</label>
                                <select 
                                    class="custom-select mb-2 mr-sm-2" 
                                    id="is_visa" 
                                    name="is_visa"
                                    required>

                                    <option value="">Visa</option>
                                    <option value="1">30 Days</option>
                                    <option value="0">N/A</option>
                                </select>

                                <label for="doe_passport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-md-2">
                                    <input 
                                    type="text" 
                                    class="form-control datepicker" 
                                    placeholder="Doe Passport"
                                    id="doe_passport" name="doe_passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>
                            <h3 class="mt-3 mb-0">Note</h3>
                            <p class="disclaimer mb-0">You are only able to invite member that has registered in
                                Nomads.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td class="text-right" width="50%">{{ $item->transaction_detail->count() }} Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td class="text-right" width="50%">${{ $item->additional_visa }},00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td class="text-right" width="50%">$ {{ $item->travel_package->price }},00 / Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td class="text-right" width="50%">$ {{ $item->transaction_total }},00</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td class="text-right text-total" width="50%">
                                    <span class="text-blue">${{ $item->transaction_total }},</span>
                                    <span class="text-orange">{{ mt_rand(0,99) }}</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instructions</h2>
                        <p class="payment-instructions">
                            Please complete your payment before to continue the wonderful
                            trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                            <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="descriptions">
                                    <h3>PT Travel Jaya</h3>
                                    <p>089649532860 <br> Bank Central Asia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item">
                            <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="descriptions">
                                    <h3>PT Travel Jaya</h3>
                                    <p>089649532860 <br> Bank Rakyat Indonesia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success', $item->id)  }}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" alt="" />'
            }
        });
    });
</script>
@endpush
