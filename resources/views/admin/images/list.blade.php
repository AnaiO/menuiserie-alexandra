@extends('layouts.admin.app')

@section('page_title', 'Mes images')

@section('content')

    <button class="btn btn-primary mb-5">
        <a class="text-decoration-none text-white" href="{{ route('admin.images.create')}}">
            Enregistrer une nouvelle image
        </a>
    </button>

    <div class="container d-flex flex-wrap">
        {{-- {{ dd($images )}} --}}
        @if ($images)
            @foreach ($images as $image)
            <div style="width:200px;height:200px">
                <img src="{{ asset('storage/'. $image->url) }}" class="img-thumbnail" alt="photo de travaux d'Alexandra Deniel menuiserie">
            </div>
            @endforeach
        @else
            Aucune image en base.
        @endif
    </div>

@endsection