@extends('errors::minimal')

@section('title', __('Too Many Requests'))

@section('code', '429')

@section('message')
    <h2 class="mb-0 mt-4 text-white">Oops! Sorry, you have been too many request.</h2>
@endsection
