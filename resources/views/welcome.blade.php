<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
              #imgCont{
                border-radius: 50px;
                overflow: hidden;
                height:77vh;
                overflow: hidden;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-image: url("https://raw.githubusercontent.com/edwinngila/htdocs/main/schoolManegments/IMG/istockphoto-1368068269-1024x1024-transformed.jpeg");
            }
        </style>
    </head>
    <body class="antialiased">
            <div class="container-fluid">
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <nav style="background-color: #212529;" class="navbar">
                               <a href="#">
                                 <img style="width: 120px; height: 120px;" src="https://raw.githubusercontent.com/edwinngila/htdocs/main/schoolManegments/IMG/student1.png" alt="logo">
                               </a>
                               <div>
                                @if (Route::has('login'))
                                  @auth
                                  <a href="{{ url('/home') }}" class="nav-link"><button class="btn btn-success">Home</button></a>
                                  @else
                                  <a href="{{ route('login') }}"><button class="btn btn-success">Log in</button></a>
                                  @endauth
                                  @if (Route::has('register'))
                                  <a href="{{ route('register') }}"><button class="btn btn-success">Register</button></a>
                                  @endif
                                @endif
                               </div>
                            </nav>
                        </div>
                        <div style="background-color: #212529;" class="row d-flex align-items-between justify-content-between">
                            <div style="min-height: 79.1vh;color:white;" class="col-12 col-sm-7 col-md-6 col-lg-6 d-flex justify-content-center flex-column">
                                <h1 class="lineUp mt-5">Streamline Your School's Success with Our Innovative Management System</h1>
                                <p class="mt-2">The best way of managing school operations. Maximize Efficiency, Minimize Hassles – Our School Management System Delivers. Get to register with us today in order to efficiently run your school</p>
                                <a href="{{ route('register') }}"><button class="btn btn-success btn-lg col-6 col-sm-9 col-md-6 col-lg-6 mt-5">Get started today</button></a>
                            </div>
                            <div style="color:white;" id="imgCont" class="col-12 col-sm-4 col-md-5 col-lg-5">
                                
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </body>
</html>
