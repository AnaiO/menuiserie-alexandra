@extends('layouts.admin.app')

@section('title', 'Prestation')

@section('content')
    @isset($prestation)
        PAGE DE LA PRESTATION {{ $prestation->title }}
    @else
        Aucune prestation répondant à cette référence.
        <button>
            <a href="{{  route('admin.prestations.list') }}">
                Liste des prestations
            </a>
        </button>
    @endif

@endsection