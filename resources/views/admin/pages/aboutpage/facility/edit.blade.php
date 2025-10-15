@extends('admin.layouts.master')

@section('css')
<style>
    .preview-img {
        width: 140px;
        height: 140px;
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
        <h4>Edit Facility Section</h4>
      </div>
    </div>
    <div class="col-sm-6 d-flex justify-content-sm-end">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.facility.index') }}">Facility Sections</a></li>
        <li class="breadcrumb-item active">Edit Facility</li>
      </ol>
    </div>
  </div>

  <!-- Form Card -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Update Facility Details</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.facility.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-3">📌 Facility Information</div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Heading <span class="text-danger">*</span></label>
                    <input type="text" name="heading" id="heading" class="form-control" 
                        value="{{ old('heading', $facility->heading) }}" required>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" id="description" class="form-control" rows="6" required>{{ old('description', $facility->description) }}</textarea>
                </div>
            </div>

            <!-- Facility Image -->
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title">Facility Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form custom_file_input">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" id="facility_image" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp">
                                    <label class="custom-file-label" for="facility_image">Choose image</label>
                                </div>
                            </div>

                            @if($facility->image)
                                <img id="imagePreview" src="{{ asset('admin-assets/images/admin-image/facilities/' . $facility->image) }}" class="preview-img" alt="Current Image">
                            @else
                                <img id="imagePreview" class="preview-img" style="display:none;" alt="Facility Image Preview">
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary">Update Facility</button>
            <a href="{{ route('admin.facility.index') }}" class="btn btn-light">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    // Image preview
    document.getElementById('facility_image').addEventListener('change', function() {
        const file = this.files[0];
        const preview = document.getElementById('imagePreview');
        if(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
    Facility
    });

    // Auto-generate slug
    document.getElementById('heading').addEventListener('input', function() {
        const slugInput = document.getElementById('slug');
        slugInput.value = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9]+/g, '-')  // replace spaces/special chars with -
            .replace(/^-+|-+$/g, '');     // remove starting/ending -
    });
</script>
@endsection
