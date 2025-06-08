@extends('errors::minimal')

@section('title', __('Unauthorized'))

@section('code', '401')

@section('message')
    <h2 class="mb-0 mt-4 text-white">Oops! You are not Authorized to access this page.</h2>
@endsection
