@extends('errors::minimal')

@section('title', __('Forbidden'))

@section('code', '403')

@section('message')
    <h2 class="mb-0 mt-4 text-white">{{ __($exception->getMessage() ?: 'Forbidden') }}</h2>
@endsection
