<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Kweezine | Admin') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <div id="app">
            <div class="left-side-menu">
                <div class="logo-box">
                    <a class="logo logo-light text-center" href="{{ url('/admin') }}">
                        <span class="logo-lg">
                            LE LOGO
                            {{-- <img src="{{ asset('img/logo_kweezine.svg') }}" alt="logo" height="22"> --}}
                        </span>
                    </a>
                </div>
                <div class="h-100 menuitem-active">
                    <div id="sidebar-menu">
                        <ul id="side-menu">
                            <li class="{{ (Route::current()->getName() == 'admin.home') ? 'menuitem-active' : null }}">
                                <a href="{{ url('/admin') }}">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ (Route::current()->getName() == 'admin.prestations') ? 'menuitem-active' : null }}">
                                <a href="{{ route('admin.prestations.index') }}">
                                    <i class="fa fa-calendar"></i>
                                    <span>Prestations</span>
                                </a>
                            </li>
                            <li class="{{ (Route::current()->getName() == 'admin.realisations') ? 'menuitem-active' : null }}">
                                <a href="{{ route('admin.realisations.index') }}">
                                    <i class="fa fa-user"></i>
                                    <span>Réalisations</span>
                                </a>
                            </li>
                            <li class="{{ (Route::current()->getName() == 'admin.images') ? 'menuitem-active' : null }}">
                                <a href="{{ route('admin.images.index') }}">
                                    <i class="fa fa-calendar"></i>
                                    <span>Images</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-page">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul id="errorList">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="navbar-custom">
                    <div class="container-fluid d-flex justify-content-between align-items-center">
                        <!-- Search bar -->
                        <form class="d-flex col-6 align-items-center" method="GET" action="{{ route('admin.researchData') }}">
                            @csrf
                            <input type="text" class="form-control col-8" placeholder="Recherche" name="data">
                            <select class="form-select col form-control" name="dataType">
                                <option name="dataType" value="email">Email</option>
                                <option name="dataType" value="payment_user">ID Mangopay</option>
                                <option name="dataType" value="lastname">Nom</option>
                                <option name="dataType" value="transactionId">ID Transaction</option>
                                <option name="dataType" value="reservationId">ID Reservation</option>
                            </select>
                            <button type="submit" class="btn btn-outline-danger">OK</button>
                        </form>
                        <!-- endSearch bar -->
                        <div class="d-flex col-3 justify-content-around align-items-center">
                            <!-- Logout -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                            <!-- endLogout -->
                            <div>{{ Auth::user()->name }}</div>
                            image user
                            {{-- <img src="{{\App\Lib\Cloudinary\CloudinaryClient::genURL(Auth::user()->image_profile_url, ['width' => 40, 'ratio' => 1])}}" class="rounded-circle avatar-sm" alt="image_event" /> --}}
                        </div>
                    </div>
                </div>
                <main>
                    <div class="content" style="height: 100%">
                        <div class="container-fluid" style="height: 100%">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>
