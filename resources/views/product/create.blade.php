@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
<form action="{{ route('create.product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-4">
      <label for="product_name" class="form-label">Product name</label>
      <input type="product_name" name="product_name" class="form-control" id="product_name" >
      {{--  @error('product_name')
      <div class="valid-feedback" style="display: block;">
          {{ $message }}
      </div>
      @enderror  --}}
    </div>
    <div class="mb-3 mt-4" >
      <label for="category" class="form-label">Category</label>
      <input type="category" class="form-control" name="category" id="category">
      {{--  @error('category')
      <div class="valid-feedback" style="display: block;">
          {{ $message }}
      </div>
       @enderror  --}}
    </div>
    <div class="mb-3 mt-4">
        <label for="category" class="form-label">Status</label>
    <select  name="status" id="">
        <option value="">Select</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
        </select>
      </div>

    <button type="submit" class="btn btn-primary btn-sm" >Submit</button>

    <a type="submit" class="btn btn-primary btn-sm" href="{{ route('home') }}" style="float:right">Back</a>
  </form>
</div>
@endsection
