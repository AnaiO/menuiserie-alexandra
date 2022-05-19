@extends('layouts.admin.app')

@section('content')
    <h2 class="h2 mb-5 text-center">Nouvelle prestation</h2>

    <div class="container col-6">
        <form method="post" action="{{ route('admin.prestations.store') }}">
            <!-- Title input -->
            <div class="form-outline mb-4">
                <input type="text" id="title" class="form-control" required/>
                <label class="form-label" for="title">Titre</label>
                @error('title')
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                @enderror
            </div>
          
            <!-- Image input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="image_id">Image</label>
                <input class="form-control" type="file" id="image_id" required>
                @error('image_id')
                    <div class="invalid-feedback">
                       {{ $message }} 
                    </div>
                @enderror    
            </div>
          
            <!-- Description input -->
            <div class="form-outline mb-4">
                <textarea id="description" class="form-control" required></textarea>
                <label class="form-label" for="description">Description</label>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
          
            <!-- Price input -->
            <div class="form-outline mb-4">
                <input type="number" id="price" class="form-control" required/>
                <label class="form-label" for="price">prix</label>
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
          
            <!-- Active input -->
            <div class="form-check mb-4 p-0">
                <input class="form-ckeck-input" type="checkbox" id="active" checked>
                <label class="form-check-label" for="active">active</label>
            </div>
                    
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
          </form>
    </div>
@endsection