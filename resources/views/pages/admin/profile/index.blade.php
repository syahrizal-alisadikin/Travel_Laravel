@extends('layouts.profile')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md">
            <div class="card card-profile">
                <h1 class="h3 mb-3 text-gray-800 p-4 font-weight-bold text-center">MY PROFILE</h1>
                    <div class="row ml-3">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ url('frontend/images/izal.jpg') }}" class="card-img-top">
                                <a href="" class="btn btn-success mt-3" >Edit Foto</a>
                                <div class="card-body">
                                <p class="card-text text-center"><small class="text-muted">Member Since {{ Auth::user()->created_at  }}</small></p>
                                
                                </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card data-profile">
                                <form class="p-3">
                                    <div class="form-group row">
                                    <label for="nama" class="col-sm-4 col-form-label col-form-label-sm">Nama</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" id="nama" value="{{ Auth::user()->name  }}">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control form-control-sm" id="email" value="{{ Auth::user()->email  }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Password" class="col-sm-4 col-form-label col-form-label-sm">Password Lama</label>
                                        <div class="col-md-6">
                                        <input type="password" class="form-control form-control-sm" id="passwordlama" name="paswwordlama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Password" class="col-sm-4 col-form-label col-form-label-sm">Password Baru</label>
                                        <div class="col-md-6">
                                        <input type="password" class="form-control form-control-sm" id="passwordbaru">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" > Simpan</button>
                                </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div> 
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection

