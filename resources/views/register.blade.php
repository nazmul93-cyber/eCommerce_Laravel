@extends('master')

@section('content')

    <div class="container cont-height">

        <div class="row justify-content-sm-center">

            <div class="col-sm-6 my-5">

                <form action="/register" method="POST">
                    @csrf

                    <div class="form-group">
                
                        <label for="username">User Name</label>
              
                        <input type="text" name="name" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">

                        
                    </div>
                  
                    <div class="form-group">
                
                      <label for="exampleInputEmail1">Email address</label>
                
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                
                    </div>
                
                    <div class="form-group">
                
                      <label for="exampleInputPassword1">Password</label>
                
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                
                    </div>
                
                    {{-- <div class="form-check">
                
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                
                    </div> --}}
                
                    <button type="submit" class="btn btn-primary">Register</button>
                
                </form>

            </div>

        </div>

    </div>

@endsection