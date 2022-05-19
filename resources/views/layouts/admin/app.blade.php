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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <div id="app" class="container-fluid">
            <div class="row">

                <!-- SIDEBAR NAVIGATION-->
                {{-- <div class="d-flex flex-column flex-shrink-0 p-3 bg-light  col-md-3" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                                <a href="{{ route('admin.home') }}" class="nav-link {{ (Route::current()->getName() === 'admin.home' ? 'active' : null) }}" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.prestations.index') }}" class="nav-link link-dark {{ (Route::current()->getName() === 'admin.prestations.index' ? 'active' : null) }}">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                Prestations
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.realisations.index') }}" class="nav-link link-dark {{ (Route::current()->getName() === 'admin.realisations.index' ? 'active' : null) }}">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                Realisations
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.images.index') }}" class="nav-link link-dark {{ (Route::current()->getName() === 'admin.images.index' ? 'active' : null) }}">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                Images
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                Aller sur le site
                            </a>
                        </li>
                    </ul>
                </div> --}}

                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    Prestations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                    Realisations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Images
                                </a>
                            </li>
                        </ul>
                    </div>
                  </nav>
                <!-- END SIDEBAR NAVIGATION-->

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>
