<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1">
        <meta name="csrf-token"            content="{{ csrf_token() }}">

        <title>Stripe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('Assets/Plugins/Normalize/style.css')     }}" rel="stylesheet">
        <link href="{{ asset('Assets/Plugins/Bootstrap/bootstrap.css') }}" rel="stylesheet">
        <!-- SCRIPT -->
        <script src="{{ asset('Assets/Plugins/Jquery/Jquery.js') }}"></script>
        {{-- <script src="{{ asset('Assets/Plugins/Jquery/Jquery.js') }}"></script> --}}
        <script src="https://js.stripe.com/v3/"></script>
    </head>
    <body style="padding: 3%">

        @if( Session::get('paymentSuccess') != null)
            <div class="alert alert-success mt-3 text-center" role="alert">
                {{Session::get('paymentSuccess')}}
            </div>
        @endisset

        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="{{ asset('Assets/Img/1.jpg') }}" class="card-img-top" alt="..." width="100%" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">$300.00 MXN</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary" style="width: 100%" onclick="stripCheckin(1)"> Comprar </button>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <img src="{{ asset('Assets/Img/2.jpg') }}" class="card-img-top" alt="..." width="100%" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">$400.00 MXN</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary" style="width: 100%" onclick="stripCheckin(2)"> Comprar </button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ asset('Assets/Img/3.jpg') }}" class="card-img-top" alt="..." width="100%" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">$200.00 MXN</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary" style="width: 100%" onclick="stripCheckin(3)"> Comprar </button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ asset('Assets/Img/4.jpg') }}" class="card-img-top" alt="..." width="100%" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">$630.00 MXN</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary" style="width: 100%" onclick="stripCheckin(4)"> Comprar </button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ asset('Assets/Img/5.jpg') }}" class="card-img-top" alt="..." width="100%" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">$899.99 MXN</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary" style="width: 100%" onclick="stripCheckin(5)"> Comprar </button>
                    </div>
                </div>
            </div>
            
        </div>

        <script src="{{ asset('Assets/Views/Payments/index.js') }}"></script>
    </body>
</html>
