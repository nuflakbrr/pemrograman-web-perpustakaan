@extends('errors::minimal')

@section('title', __('Service Unavailable'))

@section('code', '503')

@section('message')
    <h2 class="mb-0 mt-4 text-white">Oops! Sorry, service unavailable.</h2>
@endsection
