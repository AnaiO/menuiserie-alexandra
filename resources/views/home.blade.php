@extends('layouts.app')

@section('title', 'Accueil')

@section('header')
    @include('layouts.partials._header')
@endsection

@section('content')
    <div class="container">
        <h1 class="p-4 text-center fs-1">Menuiserie sur La Réole</h1>
        <p class="text-justify description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat eros, posuere congue magna vel, semper tristique tortor. Integer eu justo ac justo eleifend vehicula eu a velit. Nunc aliquam, augue at aliquet gravida, enim eros tincidunt velit, a euismod nulla nunc id quam. Sed rhoncus velit at auctor sagittis. Cras vitae mi vel felis venenatis fringilla sit amet ac turpis. Fusce odio purus, viverra quis sollicitudin vel, interdum id lacus. Fusce sed felis non tortor sagittis gravida a ut metus. Aenean luctus libero nec augue faucibus, eget ullamcorper nulla congue. Ut at consectetur leo. In sed consequat metus. Curabitur finibus tortor quis commodo fermentum. Cras sit amet lectus vitae leo tristique fringilla et pulvinar orci. Nulla at consectetur nibh.
        </p>
    </div>


    <!-- PRESTATIONS -->
    <div class="container pt-4 prestations">
        <h2 class="fs-1">Prestations</h2>
        <div class="card-group">
            <div class="card">
                <img src="{{ asset('/img/chaise.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button>Demander un devis</button>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('/img/boutique-bois.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button>Demander un devis</button>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('/img/plancher.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button>Demander un devis</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRESTATIONS -->

    <!-- REALISATIONS -->
    <div class="container pt-4 realisations">
        <h2 class="fs-1">Réalisations</h2>

        <div class="d-flex justify-content-between flex-wrap">
            <div class="card" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src={{ asset('/img/chaise.jpg') }} class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
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


@endsection

@section('footer')
    @include('layouts.partials._footer')
@endsection

