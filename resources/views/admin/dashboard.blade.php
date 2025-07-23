

@extends('admin.layout')

@section('title', __('dashboard.dashboard'))

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">{{ __('dashboard.welcome') }}</h1>

        <div class="row">
            <!-- Example Box -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $projectCount ?? 0 }}</h3>
                        <p>{{ __('dashboard.projects') }}</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <a href="{{ route('projects.index') }}" class="small-box-footer">
                        {{ __('dashboard.more_info') }} <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Add more boxes here -->
        </div>
    </div>
@endsection
