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
                                        <a href="{{ route('categories.create') }}" class="text-primary fw-semibold">Add
                                            Categories</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="card rounded mt-3">
                        <div class="card-header bg-primary text-white d-flex justify-content-between">
                            <h5 class="mb-0">All Categories</h5>
                            <a href="{{ route('categories.create') }}" class="btn btn-light btn-sm">+ Add New</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Meta Title</th>
                                        <th>Meta Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $key => $category)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                @if ($category->image)
                                                    <img src="{{ static_asset($category->image) }}"
                                                        alt="{{ $category->name }}" width="50" height="50"
                                                        class="rounded">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->meta_title ?? '-' }}</td>
                                            <td>{{ $category->meta_description ?? '-' }}</td>
                                            <td>
                                                @if ($category->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('categories.destroy', $category->id) }}"
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
                                            <td colspan="8" class="text-center text-muted">No categories found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>



                </main>
            </div>
        </div>
    </div>
</x-app-layout>
