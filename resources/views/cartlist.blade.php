@extends('master')

@section('content')


    <div class="cont-height cart-bgc">

    
        <div class="cart-wrapper">


            <h5 class="mx-4 my-2">{{ count($passKey)}} products in your cart 

                <a style="text-decoration:none;color:#666;" href="#" class="mx-4 my-2">Filter</a>
            </h5>
       
           
            @foreach($passKey as $product)

                <div class="cart-items row">

                    <div class="col-md-3 mb-4">
                        {{-- <a href="/details/{{ $product->id }}"> --}}
                        <img src="{{ $product->gallery }}" class="d-block cart-img" alt="...">
                        {{-- </a> --}}
                    </div>
                    <div class="col-md-3">
                        <h4 class="ml-4" >{{ $product->name }}</h4>
                        <h6 class="ml-4" >Price : {{ $product->price }}</h6>
                        <h6 class="ml-4" >Details : {{ $product->description }}</h6>
                        <h6 class="mb-2 ml-4" >Category : {{ $product->category }}</h6>
                    </div>
                    <div class="col-md-3">
                            <button class="mb-4 ml-4 btn btn-success" name="" >Buy Now</button>
                    </div>
                    <div class="col-md-3">
                        <a href="/removecart/{{{ $product->cart_id }}}">
                            <button class="ml-4 btn btn-warning" name="rmvcart" >Remove from Cart</button>
                        </a>

                    </div>

                </div>

                <div class="dropdown-divider mb-4"></div>


             
               
             @endforeach
      
        </div>

    </div>

@endsection