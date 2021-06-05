@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}} " alt="">

        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h1>Name: {{$product['name']}} </h1>
            <h2>Price: {{$product['price']}} </h2>
            <h3>Category: {{$product['category']}} </h3>
            <h1> Description: {{$product['description']}} </h1>
            <br><br>
            <form action="/addtocart" method="post">
                @csrf
                <input type="hidden" name="product_id" value=" {{$product['id']}} " id="">
                <button class="btn btn-success">Add to cart</button>
            </form>
            <br><br>
            <a href="\buynow" >Buy now</a>
            <br><br>

        </div>
    </div>
   
</div>
@endsection