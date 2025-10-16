@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="text-center">
            <h1>Home</h1>
            <p>Welcome to the home page.</p>
        </div>
        @include('employees.index')
    </div>
@endsection