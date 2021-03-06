<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
    .table-bottom {
        height: 40px;
        padding: 10px 0;
        border-top: 1px solid grey;
        border-bottom: 1px solid grey;
    }

    .bottom-nav {
        margin-top: 20px;

    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/products/create">Create Product</a></li>
                                  <li><a href="/products">List</a></li>
                              </ul>
                          </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/categories/create">Create Category</a></li>
                                  <li><a href="/categories">List</a></li>
                              </ul>
                          </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brand
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/brands/create">Create Brand</a></li>
                                  <li><a href="/brands">List</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Article
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/articles/create">Create Article</a></li>
                                  <li><a href="/articles">List</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Magazine
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/magazines/create">Create Magazine</a></li>
                                  <li><a href="/magazines">List</a></li>
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
