<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->

                @include('side-bar')


                <!-- Main content -->

                <main class="col-12 col-md-9 col-lg-10 bg-white p-4">

                    @if (session('success'))
                        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1080">
                            <div id="successToast" class="toast align-items-center text-white bg-success border-0 show"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        ✅ {{ session('success') }}
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Breadcrumb -->
                    <div class="card border rounded">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Add New Category</h5>
                            <nav aria-label="breadcrumb" class="mb-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}"
                                            class="text-primary fw-semibold">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('categories.index') }}"
                                            class="text-primary fw-semibold">Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active text-muted" aria-current="page">
                                        <a href="{{ route('categories.create') }}" class="text-primary fw-semibold">Add
                                            New
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="card rounded mt-3">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">
                                {{ isset($category) ? 'Edit Category' : 'Add New Category' }}
                            </h5>
                        </div>
                        <div class="card-body">
                            @if (isset($category))
                                <form action="{{ route('categories.update', $category->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                @else
                                    <form action="{{ route('categories.store') }}" method="POST"
                                        enctype="multipart/form-data">
                            @endif

                            @csrf

                            <div class="row g-4">
                                <!-- Category Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Category Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name', $category->name ?? '') }}"
                                        placeholder="Enter category name" required>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Slug <small
                                            class="text-muted">(auto/manual)</small></label>
                                    <input type="text" id="slug" name="slug" class="form-control"
                                        value="{{ old('slug', $category->slug ?? '') }}"
                                        placeholder="e.g. digital-marketing">
                                </div>

                                <!-- Meta Title -->
                                <div class="col-md-6">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" id="meta_title" name="meta_title" class="form-control"
                                        value="{{ old('meta_title', $category->meta_title ?? '') }}"
                                        placeholder="SEO meta title">
                                </div>

                                <!-- Meta Description -->
                                <div class="col-md-6">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description" class="form-control" rows="2"
                                        placeholder="SEO description...">{{ old('meta_description', $category->meta_description ?? '') }}</textarea>
                                </div>

                                <!-- Category Image -->
                                <div class="col-md-6">
                                    <label for="image" class="form-label">Category Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    <div class="form-text">Upload a square image (e.g. 300x300px) for best display.
                                    </div>

                                    @if (isset($category) && $category->image)
                                        <div class="mt-2">
                                            <img src="{{ asset($category->image) }}" alt="Category Image"
                                                class="img-thumbnail" width="100">
                                        </div>
                                    @endif
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label class="form-label d-block">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status_active" value="1"
                                            {{ old('status', $category->status ?? 1) == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_active">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status_inactive" value="0"
                                            {{ old('status', $category->status ?? 1) == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_inactive">Inactive</label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-success px-4">
                                    {{ isset($category) ? 'Update Category' : 'Save Category' }}
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>


                </main>
            </div>
        </div>
    </div>
</x-app-layout>
