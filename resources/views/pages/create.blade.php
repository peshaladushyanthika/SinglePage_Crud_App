@extends('pages.layout')
@include('welcome')
@section('content')
 
<div style = "margin:10px 350px 0px 350px; padding-top:40px;">
  <div class="card md-5">
  <div class="card-header">Create New Product</div>
  <div class="card-body">
      
      <form action="{{ url('data') }}" method="post">
        {!! csrf_field() !!}
        <label>Product ID</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Price($)</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>
   
  </div>
</div>
</div>
 
@stop