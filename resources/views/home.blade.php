@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<header>
    <!-- desktop Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- /end desktop Navbar -->

    <!-- mobile navbar -->
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Menuiserie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#prestations">Prestations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#realisation">Réalisations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- /end mobile Navbar-->

  

    
</header>

@endsection