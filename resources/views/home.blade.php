@extends('layouts.app')

@section('title', 'Accueil')

@section('header')
    @include('layouts.partials._header_copy')
@endsection

@section('content')
    <!-- INTRO -->
    <div class="row position-relative p-0 m-0 align-items-center">
        <!-- COVER IMAGE -->
        <div class="col m-0 p-0 overflow-hidden">
            <img id="cover" src="/img/home-background(1).jpg" alt="">
        </div>

        <!-- TEXT -->
        <div class="col-xl-5 col-md-8 col-12 position-absolute ps-5" id="presentation">
            <h1 class="pb-4 text-white fs-1">Menuiserie sur La Réole</h1>
            <p class="text-justify text-white description">
                Notre équipe d'experts sur Mérignac (proche Bordeaux), s'occupe de vos projets de construction et de rénovation d'habitat et vous propose des produits de qualité à tarif direct usine. Menuiseries intérieures et extérieures, notre société propose des portes, fenêtres, portails, volets...
            </p>
            <button class="btn mx-auto mt-4">Découvrez mes réalisations sur la région</button>
        </div>
    </div>
   
    <!-- PRESTATIONS -->
    <div class="container pt-4 prestations" id="prestations">
        <h2 class="fs-1">Prestations</h2>
        <div class="card-group">
            <div class="card">
                <img src="{{ asset('/img/chaise.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button class="btn">Demander un devis</button>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('/img/boutique-bois.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button class="btn">Demander un devis</button>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('/img/plancher.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button class="btn">Demander un devis</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center m-auto p-5">
        <img src="{{ asset('/img/outils.svg') }}" width="500" alt="Dessin de deux marteaux qui se croisent" class="img-fluid">
    </div>

    <!-- REALISATIONS -->
    <div class="container pt-4 pb-5 realisations" id="realisations">
        <h2 class="fs-1 text-sm-center text-lg-start text-">Réalisations</h2>

        <div class="d-flex justify-content-between flex-wrap">
            <div class="card m-auto mb-4" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card m-auto mb-4" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card m-auto mb-4" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card m-auto mb-4" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center m-auto p-5">
        <img src="{{ asset('/img/raclette.svg') }}" width="500" alt="Dessin d'un outils de menuisier" class="img-fluid">
    </div>

    <!-- CONTACT -->
    <div id="contact" class="container pb-5">
        <h2 class="fs-1 text-center">Demande de devis</h2>
        <div class="px-5 w-50 border border-dotted m-auto">
            <form action="#" method="post" class="p-5 d-flex flex-column">
                <div class="d-flex gap-4">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="exampleCheck1">Message</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.partials._footer')
@endsection

