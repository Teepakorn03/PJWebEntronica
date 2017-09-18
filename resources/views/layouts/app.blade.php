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
                      <li>
                        <a href="home">Add Home</a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             Add Activity   <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="Activity">Add Album 1</a>
                            </li>
                            <li>
                              <a href="Album1">Add Album 2</a>
                            </li>
                            <li>
                              <a href="Album2">Add Album 3</a>
                            </li>
                            <li>
                              <a href="Album3">Add Album 4</a>
                            </li>
                            <li>
                              <a href="Album4">Add Album 5</a>
                            </li>
                            <li>
                              <a href="Album5">Add Album 6</a>
                            </li>
                            <li>
                              <a href="Album6">Add Album 7</a>
                            </li>
                            <li>
                              <a href="Album7">Add Album 8</a>
                            </li>
                            <li>
                              <a href="Album8">Add Album 9</a>
                            </li>

                          </ul>
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
                          <a href="jobapp">Add job</a>
                      </li>
                      <li>
                          <a href="Footers">Add Footers</a>
                      </li>
                      <li>
                          <a href="/">Show</a>
                      </li>
                      <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>


                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="home">Add Home</a>
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
                                  <a href="jobapp">Add job</a>
                              </li>
                              <li>
                                  <a href="Footers">Add Footers</a>
                              </li>
                              <li>
                                  <a href="/">Show</a>
                              </li>
                              <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                              </li>

                            </ul>
                        </li>
                    @endif
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
