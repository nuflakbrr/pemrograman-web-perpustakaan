@extends('errors::minimal')

@section('title', __('Server Error'))

@section('code')
    <img src="{{ asset('assets/images/error/500.png') }}" class="img-fluid mb-4 w-50" alt="">
@endsection

@section('message')
    <h2 class="mb-0 mt-4 text-white">Oops! Internal Server Error.</h2>
@endsection
