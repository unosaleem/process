@extends('admin.layouts.master')

@section('css')
<style>
    .preview-icon {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 10px;
        margin-top: 10px;
        display: block;
        border: 2px solid #ccc;
    }
    .section-title {
        font-weight: 600;
        font-size: 16px;
        background: #f1f5f9;
        border-left: 4px solid #007bff;
        padding: 10px 15px;
        margin-top: 15px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Edit Vision & Mission</h4>
            </div>
        </div>
        <div class="col-sm-6 d-flex justify-content-sm-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.vision-mission.index') }}">Vision & Mission</a></li>
                <li class="breadcrumb-item active">Edit Vision & Mission</li>
            </ol>
        </div>
    </div>

    <!-- Form Card -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Vision & Mission Details</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.vision-mission.update', $vision->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-3">📌 Vision & Mission Information</div>
                    </div>

                    <!-- Icon -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Icon <span class="text-danger">*</span></label>
                            <input type="text" name="icon" id="icon" class="form-control" 
                                value="{{ old('icon', $vision->icon) }}" placeholder="Enter icon class or URL" required>
                        </div>
                        @if($vision->icon)
                            <img id="iconPreview" src="{{ old('icon', $vision->icon) }}" class="preview-icon" alt="Current Icon">
                        @else
                            <img id="iconPreview" class="preview-icon" style="display:none;" alt="Icon Preview">
                        @endif
                    </div>

                    <!-- Heading -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Heading <span class="text-danger">*</span></label>
                            <input type="text" name="heading" id="heading" class="form-control" 
                                value="{{ old('heading', $vision->heading) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" id="slug" class="form-control" 
                                value="{{ old('slug', $vision->slug) }}" required>
                        </div>
                    </div>

                    <!-- Description & Stats -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control" rows="6" required>{{ old('description', $vision->description) }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Stats <span class="text-danger">*</span></label>
                            <input type="text" name="stats" id="stats" class="form-control" 
                                value="{{ old('stats', $vision->stats) }}" placeholder="e.g., 500+ Clients" required>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-12 text-end mt-3">
                    <button type="submit" class="btn btn-primary">Update Vision & Mission</button>
                    <a href="{{ route('admin.vision-mission.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Auto-generate slug
    document.getElementById('heading').addEventListener('input', function() {
        const slugInput = document.getElementById('slug');
        slugInput.value = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9]+/g, '-')  // replace spaces/special chars with -
            .replace(/^-+|-+$/g, '');     // remove starting/ending -
    });

    // Icon preview (if icon is an image URL)
    document.getElementById('icon').addEventListener('input', function() {
        const preview = document.getElementById('iconPreview');
        if(this.value) {
            preview.src = this.value;
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    });
</script>
@endsection
