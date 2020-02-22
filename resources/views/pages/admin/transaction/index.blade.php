@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transactions</h1>
    </div>

    @if (session('create'))
            <div class="alert alert-primary">
            {{ session('create') }}
      
</div>
@endif
   <div class="row">
       <div class="card-body">
           <div class="table-responsive">
               <table class="table table-striped">
                   <thead class="thead-dark">
                       <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Travel</th>
                           <th scope="col">User</th>
                           <th scope="col">Visa</th>
                           <th scope="col">Total</th>
                           <th scope="col">Status</th>
                           <th scope="col">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @forelse ($items as $item)
                       <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->travel_package->title }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>${{ $item->additional_visa }}</td>
                        <td>${{ $item->transaction_total }}</td>
                        <td>{{ $item->transaction_status }}</td>
                        <td>
                            <a href="{{ route('transaction.show' , $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('transaction.edit' , $item->id) }}" class="btn btn-info">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')

                            <button type="submit" class="btn btn-danger"  onclick="return confirm('Yakin Data Mau Dihapus??');"> <i class="fa  fa-trash"></i></button>
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