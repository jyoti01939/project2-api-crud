@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('edit'))
    <div class="alert alert-success">
        {{ session('edit') }}
    </div>
    @endif
<form action="{{ route('edit.product',$productObj->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{--  <input type="hidden" name="id" value="{{$productObj->product_id}}">  --}}
    <div class="mb-3 mt-4">
      <label for="product_name" class="form-label">Product name</label>
      <input type="product_name" name="product_name" class="form-control" id="product_name" value="{{ $productObj->product_name }}">
      {{--  @error('product_name')
      <div class="valid-feedback" style="display: block;">
          {{ $message }}
      </div>
      @enderror  --}}
    </div>
    <div class="mb-3 mt-4" >
      <label for="category" class="form-label">Category</label>
      <input type="category" class="form-control" name="category" id="category" value="{{ $productObj->category }}">
      {{--  @error('category')
      <div class="valid-feedback" style="display: block;">
          {{ $message }}
      </div>
       @enderror  --}}
    </div>
    <div class="mb-3 mt-4">
        <label for="category" class="form-label">Status</label>
    <select  name="status" id="">
        <option >Select</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
        </select>
      </div>

    <button type="submit" class="btn btn-primary btn-sm">Submit</button>

    <a type="submit" class="btn btn-primary btn-sm" href="{{ route('home') }}" style="float:right">Back</a>
  </form>
</div>
@endsection
