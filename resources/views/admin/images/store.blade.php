<form method="POST" action="{{ route('admin.images.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-outline mb-4">
        <label class="form-label" for="image">Image</label>
        <input 
            class="form-control @error('image_url') is-invalid @enderror" 
            name="image_url" 
            type="file" 
            id="image_url" 
            value="{{ old('image_url')}}" 
            required
        >
        @error('image_url')
            <div class="text-danger">
            {{ $message }} 
            </div>
        @enderror    
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
</form>