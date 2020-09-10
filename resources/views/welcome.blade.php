<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>samplified.test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 72px;
                border-radius: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="bg-dark">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="h6 text-primary" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="h6 text-primary" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content bg-secondary rounded px-4">
                <div id="dark-overlay"></div>
                <div class="container my-5 h-75">
                    <div class="jumbotron bg-dark text-center">
                      <h1 class="display-4 text-primary" style="font-family: 'Michroma', sans-serif;">SAMPLIFIED</h1>
                      <hr>  
                      <h1 class="text-light">Welcome To My Website!</h1>
                      <div class="d-flex">
                        <p class="lead d-inline text-success font-weight-bold">Re</p>
                        <p class="lead d-inline font-weight-bold">Learn coding an easier and quicker way, with simple sample codes!</p>
                      </div>
                      <hr>
                      <a class="btn btn-primary btn-lg mr-5" href="{{ route('login') }}" role="button">Login</a>
                      <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Register</a>
                    </div>
                  </div>
            </div>
        </div>
    </body>
</html>
