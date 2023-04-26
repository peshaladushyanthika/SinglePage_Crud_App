@extends('pages.layout')
@include('welcome')
@section('content')
 
 
<div class="card">
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">Price($) : {{ $products->price }}</p>
        <p class="card-text">Category : {{ $products->category }}</p>
  </div>
       
    </hr>
  
  </div>
</div>