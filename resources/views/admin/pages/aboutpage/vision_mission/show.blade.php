@extends('admin.layouts.master')

@section('css')
<style>
    /* Card styling for content */
    .vision-content {
        border: 1px solid #e2e8f0;
        padding: 20px;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    /* Section titles */
    .section-title {
        font-weight: 600;
        font-size: 16px;
        margin-top: 20px;
        margin-bottom: 10px;
        border-left: 4px solid #007bff;
        padding-left: 10px;
        color: #333;
    }

    /* Stats & Icon styling */
    .vision-meta {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }

    .vision-icon {
        font-size: 24px;
        color: #007bff;
    }

    .vision-stats {
        font-weight: 600;
        color: #555;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row page-titles mx-0 mb-3">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Vision & Mission Details</h4>
            </div>
        </div>
        <div class="col-sm-6 d-flex justify-content-sm-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.vision-mission.index') }}">Vision & Mission</a></li>
                <li class="breadcrumb-item active">View Vision & Mission</li>
            </ol>
        </div>
    </div>

    <!-- Vision & Mission Card -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <!-- Heading and Icon -->
            <div class="row align-items-center mb-4">
                <div class="col-md-12">
                    <h3 class="card-title">{{ $vision->heading }}</h3>
                    <div class="vision-meta">
                        <span class="vision-icon"><i class="{{ $vision->icon }}"></i></span>
                        <span class="vision-stats">{{ $vision->stats }}</span>
                    </div>
                    <p class="text-muted mb-1"><strong>Slug:</strong> {{ $vision->slug }}</p>
                </div>
            </div>

            <!-- Description -->
            <div class="mt-3">
                <h5 class="section-title">Description</h5>
                <div class="vision-content">
                    {!! $vision->description !!}
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-4">
                <a href="{{ route('admin.vision-mission.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
