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
                            <h5 class="card-title fw-bold">Add New blog</h5>
                            <nav aria-label="breadcrumb" class="mb-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}"
                                            class="text-primary fw-semibold">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-primary fw-semibold">blog</a>
                                    </li>
                                    <li class="breadcrumb-item active text-muted" aria-current="page">
                                        <a href="" class="text-primary fw-semibold">Add New
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="card rounded mt-3">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">
                                {{ isset($blog) ? 'Edit Blog' : 'Add New Blog' }}
                            </h5>
                        </div>
                        <div class="card-body">

                            @if (isset($blog))
                                <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                @else
                                    <form action="{{ route('admin.blogs.store') }}" method="POST"
                                        enctype="multipart/form-data">
                            @endif
                            @csrf

                            <div class="row g-4">
                                <!-- Blog Title -->
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Blog Title <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ old('title', $blog->title ?? '') }}" placeholder="Enter blog title"
                                        required>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Slug <small
                                            class="text-muted">(auto/manual)</small></label>
                                    <input type="text" id="slug" name="slug" class="form-control"
                                        value="{{ old('slug', $blog->slug ?? '') }}"
                                        placeholder="e.g. empowering-customer-success">
                                </div>

                                <!-- Blog Category -->
                                <div class="col-md-6">
                                    <label for="category_id" class="form-label">Category <span
                                            class="text-danger">*</span></label>
                                    <select id="category_id" name="category_id" class="form-select" required>
                                        <option value="">-- Select Category --</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ old('category_id', $blog->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Blog Image -->
                                <div class="col-md-6">
                                    <label for="image" class="form-label">Blog Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    <div class="form-text">Upload featured image (e.g. 1200x600px).</div>

                                    {{-- ✅ Show preview if editing --}}
                                    @if (isset($blog) && $blog->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image"
                                                class="img-thumbnail" width="120">
                                        </div>
                                    @endif
                                </div>

                                <!-- Blog Content -->
                                <div class="col-12">
                                    <label for="content" class="form-label">Blog Content <span
                                            class="text-danger">*</span></label>
                                    <textarea  id="summernote"  name="content" class="form-control" rows="10" placeholder="Write your blog content...">{{ old('content', $blog->content ?? '') }}</textarea>
                                </div>

                                <!-- SEO Section -->
                                <div class="col-12">
                                    <h5 class="mt-4">SEO Settings</h5>
                                    <hr>
                                </div>

                                <!-- Meta Title -->
                                <div class="col-md-6">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" id="meta_title" name="meta_title" class="form-control"
                                        value="{{ old('meta_title', $blog->meta_title ?? '') }}"
                                        placeholder="SEO meta title">
                                </div>

                                <!-- Meta Description -->
                                <div class="col-md-6">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description" class="form-control" rows="2"
                                        placeholder="SEO description...">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                                </div>

                                <!-- Canonical URL -->
                                <div class="col-md-6">
                                    <label for="canonical_url" class="form-label">Canonical URL</label>
                                    <input type="url" id="canonical_url" name="canonical_url"
                                        class="form-control"
                                        value="{{ old('canonical_url', $blog->canonical_url ?? '') }}"
                                        placeholder="https://example.com/blog/blog-title">
                                </div>

                                <!-- Robots -->
                                <div class="col-md-6">
                                    <label for="robots" class="form-label">Robots</label>
                                    <select id="robots" name="robots" class="form-select">
                                        <option value="index, follow"
                                            {{ old('robots', $blog->robots ?? 'index, follow') == 'index, follow' ? 'selected' : '' }}>
                                            index, follow</option>
                                        <option value="noindex, follow"
                                            {{ old('robots', $blog->robots ?? '') == 'noindex, follow' ? 'selected' : '' }}>
                                            noindex, follow</option>
                                        <option value="index, nofollow"
                                            {{ old('robots', $blog->robots ?? '') == 'index, nofollow' ? 'selected' : '' }}>
                                            index, nofollow</option>
                                        <option value="noindex, nofollow"
                                            {{ old('robots', $blog->robots ?? '') == 'noindex, nofollow' ? 'selected' : '' }}>
                                            noindex, nofollow</option>
                                    </select>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label class="form-label d-block">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status_active" value="1"
                                            {{ old('status', $blog->status ?? 1) == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_active">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="status_inactive" value="0"
                                            {{ old('status', $blog->status ?? 1) == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_inactive">Inactive</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-success px-4">
                                    {{ isset($blog) ? 'Update Blog' : 'Save Blog' }}
                                </button>
                            </div>
                            </form>
                            {{-- ✅ Form End --}}
                        </div>
                    </div>



                </main>
            </div>
        </div>
    </div>
</x-app-layout>
