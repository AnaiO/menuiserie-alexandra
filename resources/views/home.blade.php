@extends('layouts.app')

@section('title', 'Accueil')

@section('header')
    @include('layouts.partials._header_copy')
@endsection

@section('content')
    <!-- COVER IMAGE -->
    <div class="container-fluid m-0 p-0 overflow-hidden">
        <img id="cover" src="/img/home-background(1).jpg" alt="">
    </div>

    <!-- INTRO -->
    <div class="container" id="presentation">
        <h1 class="p-4 text-center fs-1">Menuiserie sur La Réole</h1>
        <p class="text-justify description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat eros, posuere congue magna vel, semper tristique tortor. Integer eu justo ac justo eleifend vehicula eu a velit. Nunc aliquam, augue at aliquet gravida, enim eros tincidunt velit, a euismod nulla nunc id quam. Sed rhoncus velit at auctor sagittis. Cras vitae mi vel felis venenatis fringilla sit amet ac turpis. Fusce odio purus, viverra quis sollicitudin vel, interdum id lacus. Fusce sed felis non tortor sagittis gravida a ut metus. Aenean luctus libero nec augue faucibus, eget ullamcorper nulla congue. Ut at consectetur leo. In sed consequat metus. Curabitur finibus tortor quis commodo fermentum. Cras sit amet lectus vitae leo tristique fringilla et pulvinar orci. Nulla at consectetur nibh.
        </p>
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
    <!-- END PRESTATIONS -->

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
    <!-- END REALISATIONS -->

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
    <!-- END CONTACT -->

@endsection

@section('footer')
    @include('layouts.partials._footer')
@endsection

