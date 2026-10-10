<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->
                @include('side-bar')

                <!-- Main content -->
                <main class="col-12 col-md-9 col-lg-10 bg-light p-4">

                    <!-- Header Hero Card -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4" style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);">
                        <div class="card-body p-4 text-white">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <a href="{{ route('admin.blogs.index') }}" class="text-white text-opacity-75 text-decoration-none small fw-semibold">
                                            <i class="bi bi-arrow-left me-1"></i> Back to Blogs
                                        </a>
                                        <span class="text-white text-opacity-50">/</span>
                                        <span class="badge bg-white bg-opacity-25 text-white rounded-2 px-2.5 py-1 small">
                                            {{ isset($blog) ? 'Edit Mode' : 'New Article' }}
                                        </span>
                                    </div>
                                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                        <i class="bi {{ isset($blog) ? 'bi-pencil-square' : 'bi-journal-plus' }}"></i>
                                        <span>{{ isset($blog) ? 'Edit Blog Article' : 'Add New Blog Article' }}</span>
                                    </h3>
                                    <p class="mb-0 text-white-50 small">
                                        {{ isset($blog) ? 'Update blog article content, featured media, category, and search engine metadata.' : 'Compose and publish high-quality medical and eye-care articles for patients and visitors.' }}
                                    </p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('admin.blogs.index') }}" 
                                       class="btn btn-sm text-white px-3 py-2 rounded-3 text-decoration-none" 
                                       style="background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.35); font-weight: 500; backdrop-filter: blur(4px);"
                                       onmouseover="this.style.background='rgba(255,255,255,0.25)'"
                                       onmouseout="this.style.background='rgba(255,255,255,0.15)'">
                                        Cancel
                                    </a>
                                    <button type="button" onclick="document.getElementById('blogForm').submit();" 
                                            class="btn btn-sm px-3.5 py-2 rounded-3 shadow-sm d-inline-flex align-items-center gap-2 fw-bold"
                                            style="background-color: #ffffff; color: #0284c7; border: 1px solid #ffffff;"
                                            onmouseover="this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                                            onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
                                        <i class="bi bi-check2-circle fs-6"></i>
                                        <span>{{ isset($blog) ? 'Update Blog' : 'Publish Blog' }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4 d-flex align-items-center gap-2" role="alert">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <div class="text-dark fw-semibold">{{ session('success') }}</div>
                            <button type="button" class="btn-close shadow-none ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4 p-3" role="alert">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
                                <span class="fw-bold">Please check the following form errors:</span>
                            </div>
                            <ul class="mb-0 ps-4 small text-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Form Start -->
                    <form id="blogForm" action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($blog))
                            @method('PUT')
                        @endif

                        <div class="row g-4">
                            <!-- Left Column (Main Article Details & SEO) -->
                            <div class="col-lg-8">
                                
                                <!-- Card 1: Article Content -->
                                <div class="card border-0 shadow-sm rounded-4 mb-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-2">
                                        <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                             style="width: 32px; height: 32px; background-color: #e0f2fe; color: #0284c7;">
                                            <i class="bi bi-file-earmark-richtext fs-6"></i>
                                        </div>
                                        <h6 class="fw-bold mb-0 text-dark">Article Content</h6>
                                    </div>
                                    <div class="card-body p-4">
                                        <!-- Blog Title -->
                                        <div class="mb-3">
                                            <label for="title" class="form-label fw-semibold text-dark">
                                                Blog Title <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="title" name="title" 
                                                   class="form-control rounded-3 py-2.5 px-3 @error('title') is-invalid @enderror"
                                                   value="{{ old('title', $blog->title ?? '') }}" 
                                                   placeholder="e.g. 7 Early Signs of Vision Problems in Children" 
                                                   required
                                                   oninput="handleTitleInput(this.value)">
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Slug Field -->
                                        <div class="mb-4">
                                            <label for="slug" class="form-label fw-semibold text-dark mb-1">
                                                URL Slug
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light text-muted border-end-0 rounded-start-3 small">
                                                    {{ url('/blog') }}/
                                                </span>
                                                <input type="text" id="slug" name="slug" 
                                                       class="form-control rounded-end-3 py-2.5 px-3 @error('slug') is-invalid @enderror"
                                                       value="{{ old('slug', $blog->slug ?? '') }}" 
                                                       placeholder="early-signs-of-vision-problems"
                                                       oninput="this.dataset.touched = 'true'; updateSeoPreview();">
                                            </div>
                                            <div class="form-text small text-muted">
                                                Auto-generated from title. Unique URL slug for website routing.
                                            </div>
                                            @error('slug')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Content (Summernote) -->
                                        <div class="mb-2">
                                            <label for="summernote" class="form-label fw-semibold text-dark">
                                                Article Body / Content <span class="text-danger">*</span>
                                            </label>
                                            <textarea id="summernote" name="content" class="form-control @error('content') is-invalid @enderror" rows="12" required>{{ old('content', $blog->content ?? '') }}</textarea>
                                            @error('content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2: SEO Optimization -->
                                <div class="card border-0 shadow-sm rounded-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                                 style="width: 32px; height: 32px; background-color: #fef3c7; color: #d97706;">
                                                <i class="bi bi-search fs-6"></i>
                                            </div>
                                            <h6 class="fw-bold mb-0 text-dark">Search Engine Optimization (SEO)</h6>
                                        </div>
                                        <span class="badge bg-light text-muted border rounded-2 px-2 py-1 small">
                                            Google SERP Preview
                                        </span>
                                    </div>
                                    <div class="card-body p-4">
                                        <!-- Google Search Preview Widget -->
                                        <div class="p-3 mb-4 rounded-3 border bg-light bg-opacity-50">
                                            <div class="text-muted small fw-semibold text-uppercase mb-2 d-flex align-items-center gap-1.5" style="letter-spacing: 0.05em; font-size: 0.75rem;">
                                                <i class="bi bi-google"></i> Search Snippet Live Preview
                                            </div>
                                            <div class="bg-white p-3 rounded-3 border">
                                                <div class="d-flex align-items-center gap-2 text-muted small mb-1" style="font-size: 0.8rem;">
                                                    <span class="text-dark fw-medium">{{ config('app.name', 'Dr Medha Sharma') }}</span>
                                                    <span>›</span>
                                                    <span id="preview_breadcrumb_url" class="text-truncate">{{ url('/blog') }}/{{ $blog->slug ?? 'your-article-slug' }}</span>
                                                </div>
                                                <h6 id="preview_seo_title" class="fw-bold mb-1" style="color: #1a0dab; font-size: 1.05rem; cursor: pointer;">
                                                    {{ $blog->meta_title ?? ($blog->title ?? 'Blog Article Title - Dr. Medha Sharma') }}
                                                </h6>
                                                <p id="preview_seo_description" class="mb-0 text-muted small" style="line-height: 1.4; color: #4d5156;">
                                                    {{ $blog->meta_description ?? 'Read our comprehensive medical article to learn about advanced eye care, treatments, and pediatric vision care guidance.' }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <!-- Meta Title -->
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <label for="meta_title" class="form-label fw-semibold text-dark mb-0">Meta Title</label>
                                                    <span class="text-muted small" id="metaTitleCount">0 / 60 chars</span>
                                                </div>
                                                <input type="text" id="meta_title" name="meta_title" 
                                                       class="form-control rounded-3 py-2.5 px-3 @error('meta_title') is-invalid @enderror"
                                                       value="{{ old('meta_title', $blog->meta_title ?? '') }}" 
                                                       placeholder="Recommended 50-60 characters"
                                                       oninput="updateSeoPreview()">
                                                @error('meta_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Meta Description -->
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <label for="meta_description" class="form-label fw-semibold text-dark mb-0">Meta Description</label>
                                                    <span class="text-muted small" id="metaDescCount">0 / 160 chars</span>
                                                </div>
                                                <textarea id="meta_description" name="meta_description" 
                                                          class="form-control rounded-3 p-3 @error('meta_description') is-invalid @enderror" 
                                                          rows="3" 
                                                          placeholder="Brief summary of the article for search results (recommended 140-160 characters)"
                                                          oninput="updateSeoPreview()">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                                                @error('meta_description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Canonical URL -->
                                            <div class="col-md-6">
                                                <label for="canonical_url" class="form-label fw-semibold text-dark">
                                                    Canonical URL
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-end-0 rounded-start-3 text-muted">
                                                        <i class="bi bi-link-45deg"></i>
                                                    </span>
                                                    <input type="url" id="canonical_url" name="canonical_url" 
                                                           class="form-control rounded-end-3 py-2.5 px-3 @error('canonical_url') is-invalid @enderror"
                                                           value="{{ old('canonical_url', $blog->canonical_url ?? '') }}" 
                                                           placeholder="https://drmedhasharma.com/blog/article">
                                                </div>
                                                @error('canonical_url')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Robots Directives -->
                                            <div class="col-md-6">
                                                <label for="robots" class="form-label fw-semibold text-dark">
                                                    Robots Meta Tag
                                                </label>
                                                <select id="robots" name="robots" class="form-select rounded-3 py-2.5 px-3">
                                                    <option value="index, follow" {{ old('robots', $blog->robots ?? 'index, follow') == 'index, follow' ? 'selected' : '' }}>
                                                        index, follow (Default - Recommended)
                                                    </option>
                                                    <option value="noindex, follow" {{ old('robots', $blog->robots ?? '') == 'noindex, follow' ? 'selected' : '' }}>
                                                        noindex, follow (Do not index in search)
                                                    </option>
                                                    <option value="index, nofollow" {{ old('robots', $blog->robots ?? '') == 'index, nofollow' ? 'selected' : '' }}>
                                                        index, nofollow (Index but don't follow links)
                                                    </option>
                                                    <option value="noindex, nofollow" {{ old('robots', $blog->robots ?? '') == 'noindex, nofollow' ? 'selected' : '' }}>
                                                        noindex, nofollow (Completely hide)
                                                    </option>
                                                </select>
                                                @error('robots')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Right Column (Sidebar Settings) -->
                            <div class="col-lg-4">

                                <!-- Card 3: Blog Category -->
                                <div class="card border-0 shadow-sm rounded-4 mb-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-2">
                                        <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                             style="width: 32px; height: 32px; background-color: #e0f2fe; color: #0284c7;">
                                            <i class="bi bi-folder2-open fs-6"></i>
                                        </div>
                                        <h6 class="fw-bold mb-0 text-dark">Category</h6>
                                    </div>
                                    <div class="card-body p-4">
                                        <label for="category_id" class="form-label fw-bold text-dark small text-uppercase" style="letter-spacing: 0.04em;">
                                            Select Category <span class="text-danger">*</span>
                                        </label>
                                        <select id="category_id" name="category_id" class="form-select rounded-3 py-2.5 px-3 @error('category_id') is-invalid @enderror" required>
                                            <option value="">-- Choose Category --</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}" {{ old('category_id', $blog->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="mt-2">
                                            <a href="{{ route('categories.create') }}" target="_blank" class="small text-primary text-decoration-none fw-semibold">
                                                <i class="bi bi-plus-circle me-1"></i> Create New Category
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 4: Publishing Status (Exact Match) -->
                                <div class="card border-0 shadow-sm rounded-4 mb-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-2">
                                        <span class="rounded-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #ecfdf5; color: #059669;">
                                            <i class="bi bi-broadcast fs-6"></i>
                                        </span>
                                        <h6 class="fw-bold mb-0 text-dark">Publishing Status</h6>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="d-flex flex-column gap-2">
                                            <label class="d-flex align-items-center justify-content-between p-3 border rounded-3 bg-light cursor-pointer hover-shadow" style="transition: all 0.2s ease;">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input class="form-check-input mt-0" type="radio" name="status" id="status_active" value="1"
                                                        {{ old('status', $blog->status ?? 1) == 1 ? 'checked' : '' }}>
                                                    <div>
                                                        <span class="fw-bold text-success d-block small">Active / Published</span>
                                                        <span class="text-muted" style="font-size: 0.72rem;">Visible across the entire website</span>
                                                    </div>
                                                </div>
                                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                            </label>
                                            <label class="d-flex align-items-center justify-content-between p-3 border rounded-3 bg-light cursor-pointer hover-shadow" style="transition: all 0.2s ease;">
                                                <div class="d-flex align-items-center gap-2">
                                                    <input class="form-check-input mt-0" type="radio" name="status" id="status_inactive" value="0"
                                                        {{ old('status', $blog->status ?? 1) == 0 ? 'checked' : '' }}>
                                                    <div>
                                                        <span class="fw-bold text-danger d-block small">Draft / Inactive</span>
                                                        <span class="text-muted" style="font-size: 0.72rem;">Hidden from public visitors</span>
                                                    </div>
                                                </div>
                                                <i class="bi bi-dash-circle-fill text-danger fs-5"></i>
                                            </label>
                                        </div>
                                        @error('status')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Card 4: Featured Image Upload -->
                                <div class="card border-0 shadow-sm rounded-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-2">
                                        <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                             style="width: 32px; height: 32px; background-color: #f3e8ff; color: #9333ea;">
                                            <i class="bi bi-image fs-6"></i>
                                        </div>
                                        <h6 class="fw-bold mb-0 text-dark">Featured Image</h6>
                                    </div>
                                    <div class="card-body p-4">
                                        @php
                                            $currentImgUrl = null;
                                            if (isset($blog) && $blog->image) {
                                                if (file_exists(public_path('uploads/blogs/' . $blog->image))) {
                                                    $currentImgUrl = static_asset('uploads/blogs/' . $blog->image);
                                                } elseif (file_exists(public_path($blog->image))) {
                                                    $currentImgUrl = static_asset($blog->image);
                                                } elseif (file_exists(public_path('storage/' . $blog->image))) {
                                                    $currentImgUrl = static_asset('storage/' . $blog->image);
                                                } else {
                                                    $currentImgUrl = static_asset('uploads/blogs/' . $blog->image);
                                                }
                                            }
                                        @endphp

                                        <!-- Upload Box / Dropzone -->
                                        <div class="border border-2 border-dashed rounded-3 p-4 text-center bg-light bg-opacity-50 position-relative mb-3" 
                                             style="transition: all 0.2s ease;"
                                             ondragover="this.classList.add('border-primary', 'bg-white')"
                                             ondragleave="this.classList.remove('border-primary', 'bg-white')">
                                            <input type="file" id="image" name="image" 
                                                   class="position-absolute top-0 start-0 w-100 h-100 opacity-0 cursor-pointer" 
                                                   accept="image/png, image/jpeg, image/jpg, image/webp"
                                                   onchange="previewBlogImage(this)">
                                            <div class="mb-2 text-primary">
                                                <i class="bi bi-cloud-arrow-up fs-1"></i>
                                            </div>
                                            <div class="fw-bold text-dark small mb-1">Click to browse or drop image</div>
                                            <div class="text-muted small" style="font-size: 0.75rem;">
                                                PNG, JPG, WEBP up to 2MB (Rec. 1200x630px)
                                            </div>
                                        </div>

                                        @error('image')
                                            <div class="text-danger small mb-3">{{ $message }}</div>
                                        @enderror

                                        <!-- Current Image Preview -->
                                        @if ($currentImgUrl)
                                            <div id="current_image_container" class="mb-3">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <label class="form-label small text-muted fw-semibold mb-0">Current Image:</label>
                                                    <span class="badge bg-success bg-opacity-10 text-success rounded-2 px-2 py-0.5 small">Saved</span>
                                                </div>
                                                <div class="position-relative rounded-3 overflow-hidden border shadow-xs">
                                                    <img src="{{ $currentImgUrl }}" alt="Current Blog Image" class="w-100 object-fit-cover" style="height: 160px;">
                                                </div>
                                            </div>
                                        @endif

                                        <!-- New Selected Image Preview -->
                                        <div id="new_image_preview_container" class="d-none">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <label class="form-label small text-muted fw-semibold mb-0">New Image Preview:</label>
                                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-2 px-2 py-0.5 small">Selected</span>
                                            </div>
                                            <div class="position-relative rounded-3 overflow-hidden border border-primary shadow-xs">
                                                <img id="new_image_preview" src="#" alt="New Image Preview" class="w-100 object-fit-cover" style="height: 160px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- Form End -->

                </main>
            </div>
        </div>
    </div>

    <!-- Page Scripts -->
    <script>
        function generateSlug(text) {
            return text
                .toString()
                .toLowerCase()
                .trim()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }

        function handleTitleInput(title) {
            const slugInput = document.getElementById('slug');
            if (slugInput && slugInput.dataset.touched !== 'true' && (!slugInput.value || '{{ isset($blog) ? "1" : "0" }}' === '0')) {
                slugInput.value = generateSlug(title);
            }
            updateSeoPreview();
        }

        document.getElementById('meta_title').addEventListener('input', function() {
            this.dataset.touched = 'true';
            updateSeoPreview();
        });

        function updateSeoPreview() {
            const titleVal = document.getElementById('title').value;
            const slugVal = document.getElementById('slug').value || generateSlug(titleVal) || 'your-article-slug';
            const metaTitleVal = document.getElementById('meta_title').value;
            const metaDescVal = document.getElementById('meta_description').value;

            // Character counters
            const metaTitleLen = metaTitleVal.length;
            const metaDescLen = metaDescVal.length;
            
            const titleCountEl = document.getElementById('metaTitleCount');
            const descCountEl = document.getElementById('metaDescCount');

            if (titleCountEl) {
                titleCountEl.textContent = `${metaTitleLen} / 60 chars`;
                titleCountEl.className = metaTitleLen > 60 ? 'text-danger small fw-semibold' : 'text-muted small';
            }

            if (descCountEl) {
                descCountEl.textContent = `${metaDescLen} / 160 chars`;
                descCountEl.className = metaDescLen > 160 ? 'text-danger small fw-semibold' : 'text-muted small';
            }

            // SERP preview elements
            const previewTitle = document.getElementById('preview_seo_title');
            const previewDesc = document.getElementById('preview_seo_description');
            const previewUrl = document.getElementById('preview_breadcrumb_url');

            if (previewTitle) {
                previewTitle.textContent = metaTitleVal || titleVal || 'Blog Article Title - Dr. Medha Sharma';
            }
            if (previewDesc) {
                previewDesc.textContent = metaDescVal || 'Read our comprehensive medical article to learn about advanced eye care, treatments, and pediatric vision care guidance.';
            }
            if (previewUrl) {
                previewUrl.textContent = `{{ url('/blog') }}/${slugVal}`;
            }
        }

        function previewBlogImage(input) {
            const previewContainer = document.getElementById('new_image_preview_container');
            const previewImage = document.getElementById('new_image_preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('d-none');
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                previewContainer.classList.add('d-none');
            }
        }

        // Initialize counters on load
        document.addEventListener('DOMContentLoaded', function() {
            updateSeoPreview();
        });
    </script>
</x-app-layout>
