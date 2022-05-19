@extends('layouts.admin.app')

@section('content')
<div>SALUT CEST LA HOME ADMIN</div>
<form action="{{ route('logout') }}" method="post">
    @csrf

    <button class="btn">Logout</button>
</form>
@endsection