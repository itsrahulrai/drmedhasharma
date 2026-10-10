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
                                        <a href="{{ route('categories.index') }}" class="text-white text-opacity-75 text-decoration-none small fw-semibold">
                                            <i class="bi bi-arrow-left me-1"></i> Back to Categories
                                        </a>
                                        <span class="text-white text-opacity-50">/</span>
                                        <span class="badge bg-white bg-opacity-25 text-white rounded-pill px-2.5 py-1 small">
                                            {{ isset($category) ? 'Edit Mode' : 'New Creation' }}
                                        </span>
                                    </div>
                                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                        <i class="bi {{ isset($category) ? 'bi-pencil-square' : 'bi-folder-plus' }}"></i>
                                        <span>{{ isset($category) ? 'Edit Category' : 'Add New Category' }}</span>
                                    </h3>
                                    <p class="mb-0 text-white-50 small">
                                        {{ isset($category) ? 'Modify category title, SEO metadata, status and thumbnail.' : 'Define a new topic category to organize blog articles and improve SEO ranking.' }}
                                    </p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('categories.index') }}" 
                                       class="btn btn-sm text-white px-3 py-2 rounded-3 text-decoration-none" 
                                       style="background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.35); font-weight: 500; backdrop-filter: blur(4px);"
                                       onmouseover="this.style.background='rgba(255,255,255,0.25)'"
                                       onmouseout="this.style.background='rgba(255,255,255,0.15)'">
                                        Cancel
                                    </a>
                                    <button type="button" onclick="document.getElementById('categoryForm').submit();" 
                                            class="btn btn-sm px-3.5 py-2 rounded-3 shadow-sm d-inline-flex align-items-center gap-2 fw-bold"
                                            style="background-color: #ffffff; color: #0284c7; border: 1px solid #ffffff;"
                                            onmouseover="this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                                            onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
                                        <i class="bi bi-check2-circle fs-6"></i>
                                        <span>{{ isset($category) ? 'Update Category' : 'Save Category' }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 mb-4 d-flex align-items-center gap-2 bg-white border-start border-success border-4 p-3" role="alert">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <div class="text-dark fw-semibold">{{ session('success') }}</div>
                            <button type="button" class="btn-close shadow-none ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4 mb-4 bg-white border-start border-danger border-4 p-3" role="alert">
                            <div class="fw-bold text-danger mb-1 d-flex align-items-center gap-2">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                <span>Please resolve the following issues:</span>
                            </div>
                            <ul class="mb-0 ps-4 small text-muted">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close shadow-none ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form id="categoryForm" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($category))
                            @method('PUT')
                        @endif

                        <div class="row g-4">
                            <!-- Left Column: Primary Content & SEO -->
                            <div class="col-12 col-lg-8">
                                
                                <!-- Card 1: Category Info -->
                                <div class="card border-0 shadow-sm rounded-4 mb-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="rounded-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #ecfeff; color: #0891b2;">
                                                <i class="bi bi-tag-fill fs-6"></i>
                                            </span>
                                            <h6 class="fw-bold mb-0 text-dark">Category Information</h6>
                                        </div>
                                        <span class="badge bg-light text-muted fw-normal border">Step 1</span>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="row g-3">
                                            <!-- Category Name -->
                                            <div class="col-12">
                                                <label for="name" class="form-label fw-bold text-dark small text-uppercase" style="letter-spacing: 0.04em;">
                                                    Category Name <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" id="name" name="name" 
                                                    class="form-control form-control-lg rounded-3 @error('name') is-invalid @enderror"
                                                    style="font-size: 0.95rem;"
                                                    value="{{ old('name', $category->name ?? '') }}"
                                                    placeholder="e.g. Eye Care & Surgery" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Slug -->
                                            <div class="col-12">
                                                <label for="slug" class="form-label fw-bold text-dark small text-uppercase" style="letter-spacing: 0.04em;">
                                                    Permanent URL Slug
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light text-muted border-end-0 small px-3">
                                                        <i class="bi bi-link-45deg me-1"></i> drmedhasharma.com/category/
                                                    </span>
                                                    <input type="text" id="slug" name="slug" 
                                                        class="form-control border-start-0 ps-1 rounded-end-3 @error('slug') is-invalid @enderror"
                                                        value="{{ old('slug', $category->slug ?? '') }}"
                                                        placeholder="eye-care-surgery">
                                                </div>
                                                <div class="form-text text-muted mt-1" style="font-size: 0.78rem;">
                                                    Auto-generated live from category name. Unique URL slug for website routing.
                                                </div>
                                                @error('slug')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2: SEO Meta & Google Search Preview -->
                                <div class="card border-0 shadow-sm rounded-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="rounded-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #fffbeb; color: #d97706;">
                                                <i class="bi bi-google fs-6"></i>
                                            </span>
                                            <h6 class="fw-bold mb-0 text-dark">SEO & Search Snippet</h6>
                                        </div>
                                        <span class="badge bg-light text-muted fw-normal border">Step 2</span>
                                    </div>
                                    <div class="card-body p-4">
                                        <!-- Interactive Google Preview Snippet Box -->
                                        <div class="p-3 mb-4 rounded-3 border bg-light" style="font-family: Arial, sans-serif;">
                                            <div class="text-muted small mb-1" style="font-size: 0.72rem;">
                                                <i class="bi bi-eye me-1"></i> GOOGLE SEARCH PREVIEW
                                            </div>
                                            <div class="text-primary text-truncate fw-normal fs-6 mb-1" id="seoPreviewTitle" style="color: #1a0dab !important; cursor: pointer;">
                                                {{ old('meta_title', $category->meta_title ?? ($category->name ?? 'Category Title | Dr Medha Sharma')) }}
                                            </div>
                                            <div class="text-success small mb-1" id="seoPreviewUrl" style="font-size: 0.78rem; color: #006621 !important;">
                                                https://drmedhasharma.com/category/<span id="seoPreviewSlug">{{ old('slug', $category->slug ?? 'category-slug') }}</span>
                                            </div>
                                            <div class="text-muted small text-truncate-2" id="seoPreviewDesc" style="font-size: 0.82rem; color: #545454 !important; line-height: 1.35;">
                                                {{ old('meta_description', $category->meta_description ?? 'Browse the latest articles, medical guides, and expert patient resources under this category.') }}
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <!-- Meta Title -->
                                            <div class="col-12">
                                                <label for="meta_title" class="form-label fw-bold text-dark small text-uppercase" style="letter-spacing: 0.04em;">
                                                    Meta Title
                                                </label>
                                                <input type="text" id="meta_title" name="meta_title" 
                                                    class="form-control rounded-3 @error('meta_title') is-invalid @enderror"
                                                    value="{{ old('meta_title', $category->meta_title ?? '') }}"
                                                    placeholder="Target title keyword for search engine ranking">
                                                @error('meta_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Meta Description -->
                                            <div class="col-12">
                                                <label for="meta_description" class="form-label fw-bold text-dark small text-uppercase" style="letter-spacing: 0.04em;">
                                                    Meta Description
                                                </label>
                                                <textarea id="meta_description" name="meta_description" 
                                                    class="form-control rounded-3 @error('meta_description') is-invalid @enderror" 
                                                    rows="3" placeholder="Brief 150-160 character description summarizing category content for Google...">{{ old('meta_description', $category->meta_description ?? '') }}</textarea>
                                                @error('meta_description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Publishing Status & Media -->
                            <div class="col-12 col-lg-4">
                                
                                <!-- Card 3: Publishing Status -->
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
                                                        {{ old('status', $category->status ?? 1) == 1 ? 'checked' : '' }}>
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
                                                        {{ old('status', $category->status ?? 1) == 0 ? 'checked' : '' }}>
                                                    <div>
                                                        <span class="fw-bold text-danger d-block small">Draft / Inactive</span>
                                                        <span class="text-muted" style="font-size: 0.72rem;">Hidden from public visitors</span>
                                                    </div>
                                                </div>
                                                <i class="bi bi-dash-circle-fill text-danger fs-5"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 4: Featured Thumbnail Card -->
                                <div class="card border-0 shadow-sm rounded-4 bg-white">
                                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-2">
                                        <span class="rounded-3 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #eef2ff; color: #4f46e5;">
                                            <i class="bi bi-image fs-6"></i>
                                        </span>
                                        <h6 class="fw-bold mb-0 text-dark">Category Image</h6>
                                    </div>
                                    <div class="card-body p-4 text-center">
                                        <!-- Image Dropzone Preview Box -->
                                        <div class="mb-3 position-relative">
                                            <div id="catImagePreviewWrapper" class="{{ (isset($category) && $category->image) ? '' : 'd-none' }}">
                                                <div class="position-relative d-inline-block border rounded-4 p-1 bg-light shadow-xs mb-2">
                                                    <img id="catImagePreview" 
                                                         src="{{ (isset($category) && $category->image) ? static_asset($category->image) : '#' }}" 
                                                         alt="Category Preview" 
                                                         class="rounded-3 object-fit-cover" 
                                                         style="width: 160px; height: 160px;">
                                                </div>
                                            </div>
                                            <div id="catImagePlaceholder" 
                                                 onclick="document.getElementById('categoryImageInput').click();"
                                                 class="{{ (isset($category) && $category->image) ? 'd-none' : '' }} p-4 border border-2 border-dashed rounded-4 bg-light mb-2 cursor-pointer"
                                                 style="cursor: pointer; border-color: #cbd5e1 !important; transition: background 0.2s ease;">
                                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2" 
                                                     style="width: 48px; height: 48px; background-color: #e0f2fe; color: #0284c7;">
                                                    <i class="bi bi-cloud-arrow-up-fill fs-4"></i>
                                                </div>
                                                <div class="fw-bold text-dark small">Click to upload image</div>
                                                <span class="text-muted" style="font-size: 0.72rem;">PNG, JPG, WEBP up to 2MB</span>
                                            </div>
                                        </div>

                                        <input type="file" id="categoryImageInput" name="image" 
                                               class="form-control form-control-sm rounded-pill @error('image') is-invalid @enderror"
                                               accept="image/*" onchange="previewCatImage(this)">
                                        @error('image')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </main>
            </div>
        </div>
    </div>

    <!-- Live Image Preview & Live SEO Preview Sync Script -->
    <script>
        function previewCatImage(input) {
            const previewWrapper = document.getElementById('catImagePreviewWrapper');
            const placeholder = document.getElementById('catImagePlaceholder');
            const previewImg = document.getElementById('catImagePreview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewWrapper.classList.remove('d-none');
                    if (placeholder) placeholder.classList.add('d-none');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Live Auto-slug & Google Snippet sync
        const nameInput = document.getElementById('name');
        const slugInput = document.getElementById('slug');
        const metaTitleInput = document.getElementById('meta_title');
        const metaDescInput = document.getElementById('meta_description');

        const seoTitle = document.getElementById('seoPreviewTitle');
        const seoSlug = document.getElementById('seoPreviewSlug');
        const seoDesc = document.getElementById('seoPreviewDesc');

        if (nameInput) {
            nameInput.addEventListener('input', function() {
                const val = this.value.trim();
                @if(!isset($category))
                if (slugInput) {
                    const generatedSlug = val.toLowerCase().replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
                    slugInput.value = generatedSlug;
                    if (seoSlug) seoSlug.textContent = generatedSlug || 'category-slug';
                }
                @endif
                if (!metaTitleInput.value && seoTitle) {
                    seoTitle.textContent = (val ? val + ' | Dr Medha Sharma' : 'Category Title | Dr Medha Sharma');
                }
            });
        }

        if (slugInput && seoSlug) {
            slugInput.addEventListener('input', function() {
                seoSlug.textContent = this.value || 'category-slug';
            });
        }

        if (metaTitleInput && seoTitle) {
            metaTitleInput.addEventListener('input', function() {
                seoTitle.textContent = this.value || (nameInput.value ? nameInput.value + ' | Dr Medha Sharma' : 'Category Title | Dr Medha Sharma');
            });
        }

        if (metaDescInput && seoDesc) {
            metaDescInput.addEventListener('input', function() {
                seoDesc.textContent = this.value || 'Browse the latest articles, medical guides, and expert patient resources under this category.';
            });
        }
    </script>
</x-app-layout>
