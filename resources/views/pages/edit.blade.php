@extends('pages.layout')
@include('welcome')
@section('content')
 
<div class = "col-md-5" style = "margin:10px 350px 0px 350px; padding-top:60px;" >
<div class="card md-5">
  <div class="card-header">Update Product</div>
  <div class="card-body">
      
      <form action="{{ url('data/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <!-- <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Product ID</label></br> -->
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"></br>
        <label>Price($)</label></br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" value="{{$product->category}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$product->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
   
  </div>
</div>
</div>

 
@stop