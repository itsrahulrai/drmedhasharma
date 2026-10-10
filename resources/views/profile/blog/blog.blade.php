<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->
                @include('side-bar')

                <!-- Main content -->
                <main class="col-12 col-md-9 col-lg-10 bg-light p-4">

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4 d-flex align-items-center gap-2" role="alert">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <div>{{ session('success') }}</div>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4 d-flex align-items-center gap-2" role="alert">
                            <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
                            <div>{{ session('error') }}</div>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Header Hero Card -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4" style="background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);">
                        <div class="card-body p-4 text-white">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <a href="{{ route('dashboard') }}" class="text-white text-opacity-75 text-decoration-none small fw-semibold">
                                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                                        </a>
                                        <span class="text-white text-opacity-50">/</span>
                                        <span class="badge bg-white bg-opacity-25 text-white rounded-2 px-2.5 py-1 small">
                                            Blog Management
                                        </span>
                                    </div>
                                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span>All Blogs</span>
                                    </h3>
                                    <p class="mb-0 text-white-50 small">
                                        Manage, edit, and publish your eye health articles, patient guides, and news updates.
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('admin.blogs.create') }}" 
                                       class="btn btn-sm px-3.5 py-2 rounded-3 shadow-sm d-inline-flex align-items-center gap-2 fw-bold"
                                       style="background-color: #ffffff; color: #0284c7; border: 1px solid #ffffff;"
                                       onmouseover="this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                                       onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
                                        <i class="bi bi-plus-lg fs-6"></i>
                                        <span>Add New Blog</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Table Card -->
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="card-header bg-white border-bottom py-3 px-4 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                     style="width: 32px; height: 32px; background-color: #e0f2fe; color: #0284c7;">
                                    <i class="bi bi-journal-text fs-6"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Published & Draft Blogs</h6>
                                <span class="badge rounded-2 bg-light text-muted border px-2 py-1 ms-1 small fw-semibold">
                                    {{ $blogs->total() ?? count($blogs) }} Total
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4" style="width: 50px;">#</th>
                                            <th style="width: 80px;">Image</th>
                                            <th>Blog Title & Slug</th>
                                            <th>Category</th>
                                            <th>SEO Meta</th>
                                            <th style="width: 100px;">Status</th>
                                            <th class="text-end pe-4" style="width: 180px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($blogs as $key => $blog)
                                            @php
                                                $blogImg = null;
                                                if ($blog->image) {
                                                    if (file_exists(public_path('uploads/blogs/' . $blog->image))) {
                                                        $blogImg = static_asset('uploads/blogs/' . $blog->image);
                                                    } elseif (file_exists(public_path($blog->image))) {
                                                        $blogImg = static_asset($blog->image);
                                                    } elseif (file_exists(public_path('storage/' . $blog->image))) {
                                                        $blogImg = static_asset('storage/' . $blog->image);
                                                    } else {
                                                        $blogImg = static_asset('uploads/blogs/' . $blog->image);
                                                    }
                                                }
                                            @endphp
                                            <tr>
                                                <td class="ps-4 text-muted fw-semibold">
                                                    {{ $blogs->firstItem() ? $blogs->firstItem() + $key : $key + 1 }}
                                                </td>
                                                <td>
                                                    @if ($blogImg)
                                                        <img src="{{ $blogImg }}"
                                                            alt="{{ $blog->title }}" width="50" height="50"
                                                            class="rounded-3 object-fit-cover border shadow-xs"
                                                            onerror="this.style.display='none'">
                                                    @else
                                                        <div class="rounded-3 bg-light text-muted d-flex align-items-center justify-content-center border"
                                                            style="width: 50px; height: 50px;">
                                                            <i class="bi bi-card-image fs-5 text-secondary"></i>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="fw-bold text-dark mb-1 line-clamp-1" style="max-width: 320px;">
                                                        {{ $blog->title }}
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <span class="badge bg-light text-muted border font-monospace small px-2 py-0.5 rounded-2">
                                                            /blog/{{ $blog->slug ?? Str::slug($blog->title) }}
                                                        </span>
                                                        @if($blog->slug)
                                                            <a href="{{ url('/blog/' . $blog->slug) }}" target="_blank" class="text-muted hover-primary small" title="View on site">
                                                                <i class="bi bi-box-arrow-up-right"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($blog->category)
                                                        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 rounded-2 px-2.5 py-1 fw-medium">
                                                            <i class="bi bi-folder2 me-1"></i> {{ $blog->category->name }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-secondary bg-opacity-10 text-muted rounded-2 px-2 py-1">
                                                            Uncategorized
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="small text-truncate" style="max-width: 220px;" title="{{ $blog->meta_title ?? 'No SEO Title' }}">
                                                        <span class="text-muted fw-medium">T:</span> 
                                                        <span class="text-dark">{{ $blog->meta_title ?: '—' }}</span>
                                                    </div>
                                                    <div class="small text-truncate text-muted" style="max-width: 220px;" title="{{ $blog->meta_description ?? 'No SEO Description' }}">
                                                        <span class="fw-medium">D:</span> {{ $blog->meta_description ?: '—' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($blog->status == 1)
                                                        <span class="badge rounded-2 px-2.5 py-1 text-success border border-success border-opacity-25" style="background-color: #ecfdf5;">
                                                            <i class="bi bi-check-circle-fill me-1 small"></i> Active
                                                        </span>
                                                    @else
                                                        <span class="badge rounded-2 px-2.5 py-1 text-secondary border border-secondary border-opacity-25" style="background-color: #f8fafc;">
                                                            <i class="bi bi-dash-circle-fill me-1 small"></i> Inactive
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="text-end pe-4 text-nowrap">
                                                    <div class="d-inline-flex align-items-center gap-2">
                                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                            class="btn btn-sm btn-outline-primary rounded-2 px-2.5 py-1.5 d-inline-flex align-items-center gap-1.5 shadow-none"
                                                            title="Edit Blog">
                                                            <i class="bi bi-pencil-square"></i>
                                                            <span class="small fw-semibold">Edit</span>
                                                        </a>

                                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                                            method="POST" class="d-inline m-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" 
                                                                onclick="return confirm('Are you sure you want to delete this blog post?')"
                                                                class="btn btn-sm btn-outline-danger rounded-2 px-2.5 py-1.5 d-inline-flex align-items-center gap-1.5 shadow-none"
                                                                title="Delete Blog">
                                                                <i class="bi bi-trash3"></i>
                                                                <span class="small fw-semibold">Delete</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center py-5">
                                                    <div class="py-4">
                                                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                                            <i class="bi bi-journal-x text-muted fs-3"></i>
                                                        </div>
                                                        <h6 class="fw-bold text-dark mb-1">No Blog Articles Found</h6>
                                                        <p class="text-muted small mb-3">You haven't written any blog articles yet.</p>
                                                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-primary rounded-3 px-3 py-2 fw-semibold">
                                                            <i class="bi bi-plus-lg me-1"></i> Add Your First Blog
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            @if ($blogs->hasPages())
                                <div class="p-3 border-top d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <div class="text-muted small fw-medium">
                                        Showing <span class="fw-bold text-dark">{{ $blogs->firstItem() }}</span> to <span class="fw-bold text-dark">{{ $blogs->lastItem() }}</span> of <span class="fw-bold text-dark">{{ $blogs->total() }}</span> articles
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
