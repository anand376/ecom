@extends('master')
@section('content')
<div class="custom-product">
    
    <div class="col-sm-10">
        <div class="tranding-wrapper">
            <h2>Orders List</h2>
            <br> <br>
            <div class="carousel-liner">
            @foreach ($orders as $item)
              <div class="row search-item cart-list-devider">
               
               <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="tranding-img" src=" {{$item->gallery}} " alt="">
                   
                </a>

               </div>
               <div class="col-sm-3">
               
                    <div class="">
                      <h4> {{$item->name}} </h4>
                      <h5> Delivery Status : {{$item->status}} </h5>
                      <h5> Payment Status : {{$item->payment_status}} </h5>
                      <h5> Delivery method : {{$item->payment_method}} </h5>
                      <h5> Delivery Address : {{$item->address}} </h5>
                    </div>
                  </a>

               </div>
               <div class="col-sm-3">
               {{-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Form Cart</a> --}}

               </div>

              </div>
                
            @endforeach
            </div>
          </div>

    </div>
</div>
@endsection