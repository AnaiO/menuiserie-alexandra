@php
    $mode = Route::current()->getName() === 'admin.prestations.create' ? 'prestation_creation' : 'prestation_edition';
@endphp


@extends('layouts.admin.app')


@if ($mode === 'prestation_edition')
    @section('page_title', 'Editer la prestation')
@else
    @section('page_title', 'Nouvelle prestation')
@endif


@section('content')
    <div class="container">

        <!----------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------- CREATE MODE --------------------------------------------------------->
        <!----------------------------------------------------------------------------------------------------------------------->
        @if ($mode === 'prestation_creation')

            <form method="POST" action="{{ route('admin.prestations.store') }}">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}" required/>
                    @error('title')
                        <div class="text-danger">
                            {{ $errors->first('title') }}
                        </div>
                    @enderror
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description')}}" required></textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">prix</label>
                    <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price')}}" required/>
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-check mb-4 p-0">
                    <input class="form-ckeck-input @error('active') is-invalid @enderror" name="active" type="checkbox" id="active" value="{{ old('active')}}" checked>
                    <label class="form-check-label" for="active">active</label>
                    @error('active')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control @error('image_url') is-invalid @enderror" name="image_url" type="file" id="image_url" value="{{ old('image_url')}}" required>
                    @error('image_url')
                        <div class="text-danger">
                        {{ $message }} 
                        </div>
                    @enderror    
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="image_description">Description de l'image</label>
                    <input type="text" id="image_description" name="image_description" class="form-control @error('image_description') is-invalid @enderror" value="{{ old('image_description')}}" required/>
                    @error('image_description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                <button type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
            </form>
        @endif

        <!----------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------- EDIT MODE ---------------------------------------------------------->
        <!----------------------------------------------------------------------------------------------------------------------->
        @if ($mode === 'prestation_edition')

            <form method="POST" action="{{ route('admin.prestations.update', ['prestation' => $prestation->id]) }}">
                @csrf
                @method('PATCH')
                <div class="form-outline mb-4">
                    <label class="form-label" for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $prestation->title }}" required/>
                    @error('title')
                        <div class="text-danger">
                            {{ $errors->first('title') }}
                        </div>
                    @enderror
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description" required>{{ $prestation->description }}</textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">prix</label>
                    <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $prestation->price }}" required/>
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-check mb-4 p-0">
                    <input class="form-ckeck-input @error('active') is-invalid @enderror" name="active" type="checkbox" id="active" {{ $prestation->active ? 'checked' : ''}}>
                    <label class="form-check-label" for="active">active</label>
                    @error('active')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control @error('image_url') is-invalid @enderror" name="image_url" type="file" id="image_url" value="{{ $prestation->image->url }}" required> 
                    @error('image_url')
                        <div class="text-danger">
                            {{ $message }} 
                        </div>
                    @enderror  
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="image_description">Description de l'image</label>
                    <input type="text" id="image_description" name="image_description" class="form-control @error('image_description') is-invalid @enderror" value="{{ $prestation->title }}" required/>
                    @error('image_description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                <button type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
            </form>
        @endif
    </div>
@endsection