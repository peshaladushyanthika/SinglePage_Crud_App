@extends('pages.layout')
@include('welcome')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9" style="padding-top: 50px;width: 100%;">
                <div class="card">
                    <div class="card-header">Read Products</div>
                    <div class="card-body">
                        <a href="{{ url('/data/create') }}" class="btn btn-primary" style="float:right;" title="Create products">
                            <span class="bi bi-plus"></span> Create Product
                        </a>
                        <!-- <button type="button" class="btn btn-primary" style="float:right;"><span class="bi bi-plus"></span> Create Product</button> -->
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Name</th>
                                        <th>Price($)</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <!-- <td>{{ $loop->iteration }}</td> -->
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category }}</td>
 
                                        <td>
                                            <a href="{{ url('/data/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="bi bi-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/data/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"></span><i class="bi bi-pencil-square" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/data' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-x" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection