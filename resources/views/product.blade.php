@extends('master')

@section('content')

{{-- <h1>Login Page</h1>
<button class="btn btn-primary">click on me</button> checking css --}}

    <div class="cont-height custom-bgc">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators custom-indicator-color">

              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              
            </ol>



            <div class="carousel-inner">

                @foreach($passKey as $product)
                    <div class="carousel-item {{$product->id==1?'active':''}}">
                        <a href="/details/{{ $product->id }}">
                          <img src="{{ $product->gallery }}" class="d-block m-auto slider-img" alt="...">
                        </a>
                        

                        <div class="card">
                          <div class="card-body" style="background:#5f9ea05e;">
                            <h3 style="text-align: center" >{{ $product->name }}</h3>
                            <p style="text-align: center" >{{ $product->description }}</p>
                          </div>
                        </div>
                       
                    </div>
                @endforeach

              {{-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div> --}}

            </div>



            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon custom-icon-color" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon custom-icon-color" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

        </div>

        <div class="trending-wrapper trending-bgc">
            <h3 class="mx-4 my-2">Trending Products</h3>
            @foreach($passKey as $product)
              <div class="trending-items">
                <a href="/details/{{ $product->id }}">
                  <img src="{{ $product->gallery }}" class="d-block m-auto slider-img" alt="...">
                </a>
                
                <h3 class="ml-4" >{{ $product->name }}</h3>
              </div>
               
        @endforeach
        </div>

    </div>

@endsection