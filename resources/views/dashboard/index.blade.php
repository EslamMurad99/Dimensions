@extends('admin.layout')

@section('title', __('dashboard.title'))

@section('content')
    <div class="row g-4" data-aos="fade-up">
        <div class="col-md-4">
            <a href="{{ route('dashboard') }}" class="card p-4 nav-link text-center">
                {{ __('dashboard.services') }}
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.projects.index') }}" class="card p-4 nav-link text-center">
                {{ __('dashboard.projects') }}
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.contacts.index') }}" class="card p-4 nav-link text-center">
                {{ __('dashboard.contacts') }}
            </a>
        </div>
    </div>

    <h2 class="mt-5 text-center" data-aos="zoom-in">{{ __('dashboard.welcome') }}</h2>
@endsection
