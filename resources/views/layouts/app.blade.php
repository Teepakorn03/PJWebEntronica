<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->


    <title>{{ config('app.name', 'ENTRONICA') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                menu <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="Home">Add Home</a>
                              </li>
                              <li>
                                  <a href="Activity">Add Activity</a>
                              </li>
                              <li>
                                <a href="about">Add About</a>
                              </li>
                              <li>
                                  <a href="partner">Add Partner</a>
                              </li>
                              <li>
                                  <a href="product">Add Product</a>
                              </li>
                              <li>
                                  <a href="jobapps">Add job</a>
                              </li>
                              <li>
                                  <a href="Footers">Add Footers</a>
                              </li>
                              <li>
                                  <a href="show">Show</a>
                              </li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
