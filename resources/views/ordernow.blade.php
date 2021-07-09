@extends('master')

@section('content')


    <div class="container cont-height cart-bgc">

        <table class="table table-striped my-5">
            {{-- <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead> --}}
            <tbody>
              <tr>
                {{-- <th scope="row">1</th> --}}
                <td>Amount</td>
                <td>{{ $passKey }} BDT</td>
                {{-- <td>@mdo</td> --}}
              </tr>
              <tr>
                {{-- <th scope="row">2</th> --}}
                <td>tax</td>
                <td>0 BDT</td>
                {{-- <td>@fat</td> --}}
              </tr>
              <tr>
                {{-- <th scope="row">3</th> --}}
                <td>Delivery</td>
                <td>50 BDT</td>
                {{-- <td>@twitter</td> --}}
              </tr>

              <tr>
                {{-- <th scope="row">1</th> --}}
                <td>Total amount</td>
                <td>{{ $passKey }} BDT</td>
                {{-- <td>@mdo</td> --}}
              </tr>
            </tbody>
          </table>


          <div class="mt-5">
            <h5 class="mt-5" style="font-weight: bold; color:#666;">Please fill up to complete your order :</h5>



            <form action="/orderplace" method="POST">
                @csrf



                <div class="form-group">
    
                  {{-- <label for="exampleInputEmail1">Mailing address</label> --}}
    
                  <textarea name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter your address"></textarea>
    
                  <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
    
                </div>
    
                <div class="form-group">
                  <label for="exampleInputPassword1">Payment Methods</label>
                  <p> <input type="radio" value="cash" name="payment" id=""><span>   Online Payment</span></p>
                  <p> <input type="radio" value="cash" name="payment" id=""><span>   EMI Payment</span></p>
                  <p> <input type="radio" value="cash" name="payment" id=""><span>   Payment On Delivery</span></p>
                </div>
    
                {{-- <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-success my-4">Order Now</button>
            </form>
    
        </div>


    </div>

@endsection