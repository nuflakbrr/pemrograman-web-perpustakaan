@extends('errors::minimal')

@section('title', __('Not Found'))

@section('code')
    <img src="{{ asset('assets/images/error/404.png') }}" class="img-fluid mb-4 w-50" alt="">
@endsection

@section('message')
    <h2 class="mb-0 mt-4 text-white">Oops! This Page is Not Found.</h2>
    <p class="mt-2 text-white">The requested page dose not exist.</p>
@endsection
