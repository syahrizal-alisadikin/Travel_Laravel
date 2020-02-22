@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Transaction  </h1>
    
    </div>

   @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
   @endif

   <div class="card shadow row ">
       <div class="card-body col-md-8">
            <form action="{{ route('transaction.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="transaction_status">Status</label>
                    <select name="transaction_status" class="form-control" required>
                        <option value="{{$item->transaction_status}}"> jangan diubah  ({{$item->transaction_status}})</option>
                        <option value="IN_CHART">In_chart</option>
                        <option value="PENDING">Pending</option>
                        <option value="SUCCESS">Success</option>
                        <option value="CANCEL">Cancel</option>
                        <option value="FAILED">Failed</option>
                    </select>
                </div>
                
              <button type="submit" class="btn btn-success  btn-block"> Update </button>
    
            </form>
       </div>
   </div>
   
</div>
    
@endsection