@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
    <a href="{{ route('gallery.create')}}" class="btn btn-sm btn-success shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gallery</a>
    </div>

            @if (session('create'))
                    <div class="alert alert-primary">
                        {{ session('create') }}
            
                    </div>
            @endif
   <div class="row">
       <div class="card-body">
           <div class="table-responsive">
               <table class="table table-bordered">
                   <thead class="thead-light">
                       <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Travel</th>
                           <th scope="col">Gambar</th>
                           <th scope="col"> Aksi</th>
                        
                       </tr>
                   </thead>
                   <tbody>
                       @forelse ($items as $item)
                        <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->travel_package->title }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->image) }}" alt="" width="150px" class="img-thumbnail" >
                                </td>  
                            
                                
                                <td>
                                    <a href="{{ route('gallery.edit' , $item->id) }}" class="btn btn-info">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('gallery.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Data Mau Dihapus??');"> <i class="fa  fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                           
                       @empty
                    <tr>
                       <td colspan="7" class="text-center">Data Kosong</td>
                    </tr>
                       @endforelse
                   </tbody>

                   
               </table>
           </div>
       </div>
   </div>
  </div>
    
@endsection