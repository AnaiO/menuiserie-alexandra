@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Alexandra Deniel</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn">Logout</button>
            </form>
        </div>
    </div>
@endsection