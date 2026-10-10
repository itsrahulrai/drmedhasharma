<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->

                @include('side-bar')


                <!-- Main content -->

                <main class="col-12 col-md-9 col-lg-10 bg-white p-4">

                    <!-- Breadcrumb -->
                    <div class="card border rounded">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Categories</h5>
                            <nav aria-label="breadcrumb" class="mb-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}"
                                            class="text-primary fw-semibold">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.blogs.create') }}" class="text-primary fw-semibold">Add
                                            Blogs</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="card rounded mt-3">
                        <div class="card-header bg-primary text-white d-flex justify-content-between">
                            <h5 class="mb-0">All Blogs</h5>
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-light btn-sm">+ Add New</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Keyword</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($blogs as $key => $blog)
                                        <tr>
                                            <td>{{ $blogs->firstItem() ? $blogs->firstItem() + $key : $key + 1 }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category->name ?? '-' }}</td>
                                            <td>{{ $blog->meta_title }}</td>
                                            <td>
                                                @if ($blog->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>

                                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                                        class="btn btn-sm btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">No blogs found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            @if ($blogs->hasPages())
                                <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
                                    <div class="text-muted small">
                                        Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }} blogs
                                    </div>
                                    <div>
                                        {{ $blogs->links() }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>



                </main>
            </div>
        </div>
    </div>
</x-app-layout>
