@extends('layouts.app')
@section('content')
    <form action="{{route('products.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Code</span>
            <input type="text" name="code" value="{{old('code')}}" class="form-control">
        </div>
        
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="desc" value="{{old('desc')}}" class="form-control">
        </div>

       <div class="col-md-4 form-group">
            <span>Catagory</span>
            <input type="text" name="category" value="{{old('category')}}" class="form-control">
        </div>

         <!-- <div class="col-md-4 form-group">
            <span>Catagory</span>
            <input type="Form::select('Book', array('Novel' => 'Novel', 'Fiction' => 'Fiction', 'Adventure' => 'Adventure' ));" name="catagory" value="{{old('catagory')}}" class="form-control">
        </div> -->

        <div class="col-md-4 form-group">
            <span>Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Stock Date</span>
            <input type="date" name="stock_date" value="{{old('stock_date')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Rating</span>
            <input type="text" name="rating" value="{{old('rating')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Purchased</span>
            <input type="text" name="purchased" value="{{old('purchased')}}" class="form-control">
        </div>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection

