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
        @isset ($images)
            @foreach ($images as $image)
            <div class="position-relative">
                <div class="position-absolute top-0 end-0 d-flex">

                    <button type="button" class="border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Attention, en confirmant vous supprimerez définitivement cette photo.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <form action="{{ route('admin.images.destroy', ['image' => $image->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 btn btn-secondary">
                                        Supprimer
                                    </button>
                                </form>                            
                            </div>
                        </div>
                        </div>
                    </div>


                    
                    <form action="{{ route('admin.images.changeStatus', ['image' => $image->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="border-0 {{ $image->active ? 'text-success' : 'text-danger' }} text-red">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <div style="width:200px;height:200px">
                    <img src="{{ asset('storage/'. $image->url) }}" class="img-thumbnail" alt="photo de travaux d'Alexandra Deniel menuiserie">
                </div>
            </div>
            @endforeach
        @endisset

        @empty($images)
            Aucune image en base.
        @endempty
            
    </div>

@endsection