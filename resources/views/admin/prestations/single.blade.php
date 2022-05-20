@extends('layouts.admin.app')


@php
    $isEditionMode = Route::current()->getName() !== 'admin.prestation.create';
    dd($prestation);
@endphp


@section('content')
    <div class="container">

        <!----------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------- CREATE MODE --------------------------------------------------------->
        <!----------------------------------------------------------------------------------------------------------------------->
        @if (!$isEditionMode)

            <form method="POST" action="{{ route('admin.prestations.store') }}">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title')}}" required/>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" value="{{ old('description')}}" required></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">prix</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{ old('price')}}" required/>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-check mb-4 p-0">
                    <input class="form-ckeck-input" name="active" type="checkbox" id="active" value="{{ old('active')}}" checked>
                    <label class="form-check-label" for="active">active</label>
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" name="image_url" type="file" id="image_url" value="{{ old('image_url')}}" required>
                    @error('image_url')
                        <div class="invalid-feedback">
                        {{ $message }} 
                        </div>
                    @enderror    
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="image_description">Description de l'image</label>
                    <input type="text" id="image_description" name="image_description" class="form-control" value="{{ old('image_description')}}" required/>
                    @error('image_description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
            </form>
        @endif

        <!----------------------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------------- EDIT MODE ---------------------------------------------------------->
        <!----------------------------------------------------------------------------------------------------------------------->
        @if ($isEditionMode && isset($prestation))

            <form method="POST" action="{{ route('admin.prestations.store') }}">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $prestation->title }}" required/>
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" value="{{ $prestation->title }}" required></textarea>
                </div>
            
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">prix</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{ $prestation->title }}" required/>
                </div>
                
                <div class="form-check mb-4 p-0">
                    <input class="form-ckeck-input" name="active" type="checkbox" id="active" value="{{ $prestation->title }}" checked>
                    <label class="form-check-label" for="active">active</label>
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" name="image_url" type="file" id="image_url" value="{{ $prestation->title }}" required> 
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="image_description">Description de l'image</label>
                    <input type="text" id="image_description" name="image_description" class="form-control" value="{{ $prestation->title }}" required/>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
            </form>
        @endif
    </div>
@endsection