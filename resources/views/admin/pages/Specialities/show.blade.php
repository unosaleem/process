@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow">
        <!-- Header -->
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">{{ $specialty->title }}</h3>
        </div>

        <!-- Content -->
        <div class="card-body">
            <!-- Title & Slug in one row -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Title:</strong> {{ $specialty->title }}
                </div>
                <div class="col-md-6">
                    <strong>Slug:</strong> {{ $specialty->slug }}
                </div>
            </div>

            <!-- Image & Icon in one row -->
            <div class="row mb-3 align-items-center">
                @if($specialty->image)
                <div class="col-md-6">
                    <strong>Image:</strong><br>
                    <img src="{{ asset($specialty->image) }}" alt="Image" class="img-thumbnail" style="width:150px; height:150px; object-fit:cover;">
                </div>
                @endif

                @if($specialty->icon)
                <div class="col-md-6">
                    <strong>Icon:</strong><br>
                    <img src="{{ asset($specialty->icon) }}" alt="Icon" class="img-thumbnail" style="width:100px; height:100px; object-fit:cover;">
                </div>
                @endif
            </div>

            <!-- Description -->
            <div class="mb-3">
                <strong>Description:</strong>
                <div class="p-3 bg-light border rounded">
                    {!! $specialty->description !!}
                </div>
            </div>
        </div>

        <!-- Footer: Back & Edit buttons -->
        <div class="card-footer text-end">
            <a href="{{ route('specialties.index') }}" class="btn btn-secondary me-2">Back</a>
            <a href="{{ route('specialties.edit', $specialty->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
