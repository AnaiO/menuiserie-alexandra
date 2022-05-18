@extends('layouts.app')

@section('title', 'admin')

@section('content')
    <div class="container w-50 p-3">
        <form action="" method="POST" class="align-middle">
            @csrf

            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control @error('email') border-red @enderror" id="email" placeholder="Enter email" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control @error('password') border-red @enderror" id="pwd" placeholder="Enter password" name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
    </div>
@endsection