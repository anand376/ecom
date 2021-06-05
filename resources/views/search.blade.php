@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-3">
        <a href="#">filter</a>

    </div>
    <div class="col-sm-4">
        <div class="tranding-wrapper">
            <h1>Results</h1>
            <div class="carousel-liner">
              @foreach ($products as $item)
              <div class="search-item">
                <a href="detail/{{$item['id']}}">
                <img class="tranding-img" src=" {{$item['gallery']}} " alt="">
                <div class="">
                  <h4> {{$item['name']}} </h4>
                  <h5> {{$item['description']}} </h5>
                </div>
              </a>

              </div>
                
              @endforeach
            </div>
          </div>

    </div>
</div>
@endsection