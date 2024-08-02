@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to My Laravel App</h1>
        <p class="lead">This is a simple user management system built with Laravel.</p>
        <hr class="my-4">
        <p>Use the navigation bar to register, login, or manage your profile.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Get Started</a>
    </div>
</div>
@endsection
