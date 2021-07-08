@extends('master')

@section('content')


    <div class="cont-height search-bgc">

    
        <div class="search-wrapper">


            <h5 class="mx-4 my-2">{{ count($passKey)}} products matched your search  
                <a style="text-decoration:none;color:#666;" href="#" class="mx-4 my-2">Filter</a>
            </h5>
       
           
            @foreach($passKey as $product)

              <div class="search-items">

                <a href="/details/{{ $product->id }}">
                  <img src="{{ $product->gallery }}" class="d-block m-auto slider-img" alt="...">
                </a>
                
                <h4 class="ml-4" >{{ $product->name }}</h4>
                <h6 class="ml-4" >Price : {{ $product->price }}</h6>
                <h6 class="ml-4" >Details : {{ $product->description }}</h6>
                <h6 class="ml-4" >Category : {{ $product->category }}</h6>

              </div>
               
             @endforeach
      
        </div>

    </div>

@endsection