@extends('master')

@section('content')

    <div class="container cont-height">


        <div class="row">
                <div class="col-sm-6">
                    <img class="details-img" src="{{ $passKey->gallery }}" alt="">
                </div>
                
                <div class="col-sm-6">
                    <a href="/"><i class="fas fa-chevron-circle-left mt-2" style="font-size: 20px;"></i></a>
                    <h2>{{ $passKey->name }}</h2>
                        Price - <h3>{{ $passKey->price }}</h3>
                        Details - <h4>{{ $passKey->description }}</h4>
                        Category - <h4>{{ $passKey->category }}</h4>
                        <br /><br />
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $passKey->id  }}">
                            <button class="btn btn-primary">Add to Cart</button>


                        </form>
                        <br /><br />
                        <button class="btn btn-success">Buy Now</button>
                        <br /><br />
                </div>
               


        </div>










    </div>

@endsection