@extends('admin.layouts.master')

@section('css')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Header -->
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Facility Sections List</h4>
                    <a href="{{ route('admin.facility.create') }}" class="btn btn-primary">Add Facility</a>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Heading</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($facilities as $index => $facility)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $facility->heading }}</td>
                                        <td>{!! \Illuminate\Support\Str::limit($facility->description, 50) !!}</td>
                                        <td>
                                            @if($facility->image)
                                                <img src="{{ asset('admin-assets/images/admin-image/facilities/'. $facility->image) }}" alt="Facility Image" style="width:50px; height:50px; object-fit:cover;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!-- View -->
                                                <a href="{{ route('admin.facility.show', $facility->id) }}" class="btn btn-info btn-sm me-2" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <!-- Edit -->
                                                <a href="{{ route('admin.facility.edit', $facility->id) }}" class="btn btn-primary btn-sm me-2" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>                                            
                                                <!-- Delete -->
                                                <form action="{{ route('admin.facility.destroy', $facility->id) }}" method="POST" class="delete-form m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-title="{{ $facility->heading }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">No Facility sections found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const form = this.closest('.delete-form');
            const title = this.getAttribute('data-title');

            Swal.fire({
                title: 'Are you sure?',
                text: `You are Facility to delete "${title}"! This action cannot be undone.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>
@endsection
