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
        <h4>Edit About Section</h4>
      </div>
    </div>
    <div class="col-sm-6 d-flex justify-content-sm-end">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About Sections</a></li>
        <li class="breadcrumb-item active">Edit About</li>
      </ol>
    </div>
  </div>

  <!-- Form Card -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Update About Details</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-3">📌 About Information</div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Heading <span class="text-danger">*</span></label>
                    <input type="text" name="heading" id="heading" class="form-control" 
                        value="{{ old('heading', $about->heading) }}" required>
                </div>

                <div class="form-group">
                    <label>Slug <span class="text-danger">*</span></label>
                    <input type="text" name="slug" id="slug" class="form-control" 
                        value="{{ old('slug', $about->slug) }}" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" id="description" class="form-control" rows="6" required>{{ old('description', $about->description) }}</textarea>
                </div>
            </div>

            <!-- About Image -->
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title">About Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form custom_file_input">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" id="about_image" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp">
                                    <label class="custom-file-label" for="about_image">Choose image</label>
                                </div>
                            </div>

                            @if($about->image)
                                <img id="imagePreview" src="{{ asset('admin-assets/images/admin-image/abouts/' . $about->image) }}" class="preview-img" alt="Current Image">
                            @else
                                <img id="imagePreview" class="preview-img" style="display:none;" alt="About Image Preview">
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary">Update About</button>
            <a href="{{ route('admin.about.index') }}" class="btn btn-light">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    // Image preview
    document.getElementById('about_image').addEventListener('change', function() {
        const file = this.files[0];
        const preview = document.getElementById('imagePreview');
        if(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
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
