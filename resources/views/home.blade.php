@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
      <div class="px-6 w-full flex flex-wrap items-center justify-between">
        <div class="flex items-center">
          <button
            class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
            type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5" role="img"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
              </path>
            </svg>
          </button>
        </div>
        <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
          <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Prestations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Réalisations</a>
            </li>
            <li class="nav-item mb-2 lg:mb-0">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  
    <!-- Background image -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
      background-position: 50%;
      background-image: url({{url('img/home-background.jpg')}});
      height: 350px;
    ">
      <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
        >
        <div class="flex justify-center items-center h-full">
          <div class="text-center text-red px-6 md:px-12">
            <h1 class="text-5xl text-white font-bold mt-0 mb-6">Heading</h1>
            <h3 class="text-3xl text-red-50 font-bold mb-8">Subeading</h3>
            <button type="button"
              class="inline-block text-red-50 px-6 py-2.5 border-2 border-white text-red-50 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              Get started
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
@endsection