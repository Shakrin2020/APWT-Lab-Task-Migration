@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Stock Date</th>
            <th>Rating</th>
            <th>Purchased</th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->p_id}}</td> 
                <td>{{$product->p_name}}</td>
                <td>{{$product->p_code}}</td>
                <td>{{$product->p_desc}}</td> 
                <td>{{$product->p_category}}</td>
                <td>{{$product->p_price}}</td>
                <td>{{$product->p_quantity}}</td> 
                <td>{{$product->p_stock_date}}</td>
                <td>{{$product->p_rating}}</td>
                <td>{{$product->p_purchased}}</td>

                <td><a href="/product/edit/{{$product->p_id}}/{{$product->p_name}}" class="btn btn-info">Edit</a></td>
                <td><a href="/product/delete/{{$product->p_id}}/{{$product->p_name}}" class="btn btn-primary">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

