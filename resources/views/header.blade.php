
    <?php
    
        use App\Http\Controllers\ProductController;
        $cartCount = 0;
        if(Session::has('user')) {
            
            $cartCount = ProductController::cartItemCount();
        }
        // $cartCount = ProductController::cartItemCount();
    
    ?>
    
    
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/">BuyBest</a>



    {{-- responsive --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">




            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/cartlist"><i class="fas fa-shopping-cart"></i>({{ $cartCount }})</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>


                <li class="nav-item dropdown">

                        @if(Session::has('user'))
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Session::get('user')->name }}</a>




                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="/logout">Logout</a>
                                <div class="dropdown-divider"></div>

                            </div>

                            @else
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/login">Login</a>
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="/register">Register</a>
                                    <div class="dropdown-divider"></div>

                                </div>
                        @endif
                </li>


            </ul>



            <form class="form-inline my-2 my-lg-0" action="/search" method="POST">
                @csrf

                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


            </form>



        </div>

    </nav>
