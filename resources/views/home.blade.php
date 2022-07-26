@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <a href="{{ route('create.product') }}" class="btn btn-success btn-sm" style="float:right">Add Product</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S no.</th>
            <th scope="col">Product name</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
           <tr>
            <td>{{$product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{$product->category }}</td>
            @if($product->status == 1 )
              <td>{{ "Active" }}</td>
            @else
              <td>{{ "Inactive" }}</td>
            @endif
            <td>
                <a href="{{ route('edit.product', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('delete.product',$product->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
           </tr>
           @endforeach
        </tbody>
      </table>
</div>
@endsection
