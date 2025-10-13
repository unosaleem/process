@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <h4 class="card-title mb-0">FAQs</h4>
      <a href="{{ route('faqs.create') }}" class="btn btn-primary">Add FAQ</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Question</th>
              <th>Answer</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse($faqs as $index => $faq)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $faq->question }}</td>
              <td>{!! \Illuminate\Support\Str::limit(strip_tags($faq->answer), 50) !!}</td>
              <td>
                @if($faq->image && file_exists(public_path('admin-assets/images/admin-image/faqs/' . $faq->image)))
                  <img src="{{ asset('admin-assets/images/admin-image/faqs/' . $faq->image) }}" width="80" class="rounded">
                @else
                  <span class="text-muted">No Image</span>
                @endif
              </td>
              <td>
                <a href="{{ route('faqs.show', $faq->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>
                <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-muted">No FAQs found.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
