@extends('layouts.admin.app')

@section('content')
    <h2 class="h2 text-center mb-5">Mes prestations</h2>
    <button class="btn btn-primary mb-5">
        <a class="text-decoration-none text-white" href="{{ route('admin.prestations.create')}}">
            Nouvelle prestation
        </a>
    </button>

    @if (isset($prestations) && count($prestations))
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
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($prestations as $prestation)
                        <tr>
                            <td>{{ $prestation->title }}</td>
                            <td>{{ $prestation->description }}</td>
                            <td>{{ $prestation->image->url }}</td>
                            <td>{{ $prestation->price }}</td>
                            <td class="text-center">@if ($prestation->active) &#9989; @else &#10060; @endif</td>
                            <td class="col">
                                <a class="text-decoration-none" href="{{ route('admin.prestations.show', ['prestation' => $prestation->id]) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="col">
                                <a class="text-decoration-none" href="{{ route('admin.prestations.show', ['prestation' => $prestation->id]) }}">
                                    Modifier
                                </a>
                            </td>
                            <td class="col">
                                <form action="{{ route('admin.prestations.destroy', ['prestation' => $prestation->id]) }}" method="POST">
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
        Aucune prestation enregistrée en base.
    @endif

@endsection