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
                    <h4 class="card-title mb-0">Milestones List</h4>
                    <a href="{{ route('admin.milestones.create') }}" class="btn btn-primary">Add Milestones</a>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Icon</th>
                                    <th>Heading</th>
                                    <th>Year</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($milestones as $index => $milestone)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $milestone->icon }}</td>
                                        <td>{{ $milestone->heading }}</td>
                                        <td>{{ $milestone->year }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($milestone->description, 50) }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('admin.milestones.show', $milestone->id) }}" class="btn btn-info btn-sm me-2" title="View"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin.milestones.edit', $milestone->id) }}" class="btn btn-primary btn-sm me-2" title="Edit"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('admin.milestones.destroy', $milestone->id) }}" method="POST" class="delete-form m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-title="{{ $milestone->heading }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">No Milestone found.</td>
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
                text: `You are about to delete "${title}"!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) form.submit();
            });
        });
    });
});
</script>
@endsection
