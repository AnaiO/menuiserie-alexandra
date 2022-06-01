@extends('layouts.admin.app')

@section('page_title', $page_title)

@section('content')
    <button class="btn btn-primary mb-5">
        <a class="text-decoration-none text-white" href="{{ route('admin.'. $item_type .'s.create')}}">
            {{ $button_create_title }}
        </a>
    </button>

    @if (isset($items) && count($items))
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">prix</th>
                        <th scope="col">active</th>
                        <th scope="col"></th>
                        {{-- <th scope="col"></th> --}}
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @isset ($item->image->url)
                                    <div>
                                        <img src="{{ asset('storage/'. $item->image->url) }}" class="img-thumbnail" alt="photo de travaux d'Alexandra Deniel menuiserie">
                                    </div>
                                @else
                                   <p>Pas d'image disponible</p> 
                                @endisset
                            </td>
                            <td>{{ $item->price }}</td>
                            <td class="text-center">@if ($item->active) &#9989; @else &#10060; @endif</td>
                            <td class="col">
                                <a class="text-decoration-none" href="{{ route('admin.'. $item_type .'s.edit', [$item_type => $item->id]) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="col">
                                <form action="{{ route('admin.'. $item_type .'s.destroy', [$item_type => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 text-red">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    @else
        <div class="mt-5 text-center">Aucune {{ $item_type }} enregistrée en base.</div> 
    @endif

@endsection