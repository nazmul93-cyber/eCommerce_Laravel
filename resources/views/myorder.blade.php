@extends('master')

@section('content')


    <div class="container cont-height order-bgc">

    
        <div class="order-wrapper">


            <h5 class="my-5">{{ count($passKey)}} products are pending to be delivered

                {{-- <a style="text-decoration:none;color:#666;" href="#" class="mx-4 my-2">Filter</a> --}}
                {{-- <a href="/ordernow" class="ml-4 my-4 btn btn-success">Order Now</a> --}}

            </h5>
       
           
            @foreach($passKey as $product)

                <div class="cart-items row">

                    <div class="col-md-6 mb-4">
                        {{-- <a href="/details/{{ $product->id }}"> --}}
                        <img src="{{ $product->gallery }}" class="d-block cart-img" alt="...">
                        {{-- </a> --}}
                    </div>
                    <div class="col-md-6">
                        <h4 class="ml-4" >{{ $product->name }}</h4>
                        {{-- <h6 class="ml-4" >Status : {{ $product->price }}</h6> --}}
                        <h6 class="ml-4" >Delivery status : {{ $product->status }}</h6>
                        <h6 class="ml-4" >Payment status : {{ $product->payment_status }}</h6>
                        <h6 class="ml-4" >Payment method : {{ $product->payment_method }}</h6>
                        <h6 class="mb-2 ml-4" >Address : {{ $product->address }}</h6>
                    </div>
                    {{-- <div class="col-md-3"> --}}
                            {{-- <button class="mb-4 ml-4 btn btn-success" name="" >Buy Now</button> --}}
                    {{-- </div> --}}
                    {{-- <div class="col-md-3"> --}}
                        {{-- <a href="/removecart/{{{ $product->cart_id }}}">
                            <button class="ml-4 btn btn-warning" name="rmvcart" >Remove from Cart</button>
                        </a> --}}

                    {{-- </div> --}}

                </div>

                <div class="dropdown-divider mb-4"></div>


             
               
             @endforeach
      
        </div>

    </div>

@endsection