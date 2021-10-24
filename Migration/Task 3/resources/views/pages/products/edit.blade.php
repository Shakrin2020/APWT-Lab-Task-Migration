@extends('layouts.app')
@section('content')
<form action="{{route('products.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">

        <div class="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="p_id" value="{{$product->p_id}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="p_name" value="{{$product->p_name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Code</span>
            <input type="text" name="p_code" value="{{$product->p_code}}" class="form-control">
        </div>
        
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="p_desc" value="{{$product->p_desc}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Catagory</span>
            <input type="text" name="p_catagory" value="{{$product->p_catagory}}" class="form-control">
        </div>

        <!-- <div class="col-md-4 form-group">
            <span>Catagory</span>
            <input type="echo Form::select('Book', array('Novel' => 'Novel', 'Fiction' => 'Fiction', 'Adventure' => 'Adventure' ));" name="catagory" value="{{old('catagory')}}" class="form-control">
        </div> -->

        <div class="col-md-4 form-group">
            <span>Price</span>
            <input type="text" name="p_price" value="{{$product->p_price}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="text" name="p_quantity" value="{{$product->p_quantity}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Stock Date</span>
            <input type="date" name="p_stock_date" value="{{$product->p_catagory}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Rating</span>
            <input type="text" name="p_rating" value="{{$product->p_rating}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Purchased</span>
            <input type="text" name="p_purchased" value="{{$product->p_purchased}}" class="form-control">
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection