@extends('admin.layouts.master')

@section('css')
<style>
    .section-title {
        font-weight: 600;
        font-size: 16px;
        background: #f1f5f9;
        border-left: 4px solid #007bff;
        padding: 10px 15px;
        margin-top: 15px;
    }
    hr {
        border-top: 2px dashed #ccc;
        margin: 25px 0;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
  <!-- Page Header -->
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Add Milestones</h4>
      </div>
    </div>
    <div class="col-sm-6 d-flex justify-content-sm-end">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.milestones.index') }}">Milestones</a></li>
        <li class="breadcrumb-item active">Add Milestones</li>
      </ol>
    </div>
  </div>

  <!-- Form Card -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Milestones Details</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.milestones.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-3">📄 Milestones Information</div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Icon <span class="text-danger">*</span></label>
                    <input type="text" name="icon" class="form-control" placeholder="Enter icon (e.g., la la-star)" required>
                </div>

                <div class="form-group">
                    <label>Heading <span class="text-danger">*</span></label>
                    <input type="text" name="heading" class="form-control" placeholder="Enter heading" required>
                </div>

                <div class="form-group">
                    <label>Year <span class="text-danger">*</span></label>
                    <input type="text" name="year" class="form-control" placeholder="Enter Year" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" rows="6" placeholder="Write a short description..." required></textarea>
                </div>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary">Save Milestone</button>
            <a href="{{ route('admin.milestones.index') }}" class="btn btn-light">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
