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
                                            Category Management
                                        </span>
                                    </div>
                                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                        <i class="bi bi-folder2-open"></i>
                                        <span>All Categories</span>
                                    </h3>
                                    <p class="mb-0 text-white-50 small">
                                        Manage and organize all your blog categories for SEO and website navigation.
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('categories.create') }}" 
                                       class="btn btn-sm px-3.5 py-2 rounded-3 shadow-sm d-inline-flex align-items-center gap-2 fw-bold"
                                       style="background-color: #ffffff; color: #0284c7; border: 1px solid #ffffff;"
                                       onmouseover="this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'"
                                       onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
                                        <i class="bi bi-plus-lg fs-6"></i>
                                        <span>Add New Category</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category Table Card -->
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="card-header bg-white border-bottom py-3 px-4 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                     style="width: 32px; height: 32px; background-color: #ecfeff; color: #0891b2;">
                                    <i class="bi bi-folder2-open fs-6"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">All Categories</h6>
                                <span class="badge rounded-2 bg-light text-muted border px-2 py-1 ms-1 small fw-semibold">
                                    {{ count($categories) }} Categories
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4" style="width: 60px;">#</th>
                                            <th style="width: 80px;">Thumbnail</th>
                                            <th>Category Details</th>
                                            <th>Slug</th>
                                            <th>SEO Meta</th>
                                            <th style="width: 110px;">Status</th>
                                            <th class="text-end pe-4" style="width: 130px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($categories as $key => $category)
                                            <tr>
                                                <td class="ps-4 text-muted fw-semibold">{{ $key + 1 }}</td>
                                                <td>
                                                    @if ($category->image)
                                                        <img src="{{ static_asset($category->image) }}"
                                                            alt="{{ $category->name }}" width="44" height="44"
                                                            class="rounded-3 object-fit-cover border shadow-xs"
                                                            onerror="this.style.display='none'">
                                                    @else
                                                        <div class="rounded-3 bg-light text-muted d-flex align-items-center justify-content-center border"
                                                            style="width: 44px; height: 44px;">
                                                            <i class="bi bi-image"></i>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="fw-bold text-dark d-block">{{ $category->name }}</span>
                                                    <small class="text-muted">{{ $category->created_at ? $category->created_at->format('d M, Y') : '' }}</small>
                                                </td>
                                                <td>
                                                    <code class="px-2 py-1 rounded-2 bg-light text-primary border" style="font-size: 0.8rem;">
                                                        {{ $category->slug }}
                                                    </code>
                                                </td>
                                                <td>
                                                    <div style="max-width: 250px;">
                                                        <span class="d-block text-truncate fw-semibold small text-dark" title="{{ $category->meta_title }}">
                                                            {{ $category->meta_title ?? '-' }}
                                                        </span>
                                                        <small class="text-muted text-truncate d-block" title="{{ $category->meta_description }}">
                                                            {{ $category->meta_description ?? '-' }}
                                                        </small>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($category->status == 1)
                                                        <span class="badge rounded-2 bg-success-subtle text-success border border-success-subtle px-2 py-1 fw-semibold" style="font-size: 0.75rem;">
                                                            <i class="bi bi-check-circle-fill me-1"></i>Active
                                                        </span>
                                                    @else
                                                        <span class="badge rounded-2 bg-danger-subtle text-danger border border-danger-subtle px-2 py-1 fw-semibold" style="font-size: 0.75rem;">
                                                            <i class="bi bi-x-circle-fill me-1"></i>Inactive
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="text-end pe-4 text-nowrap">
                                                    <div class="d-flex align-items-center justify-content-end gap-1.5">
                                                        <a href="{{ route('categories.edit', $category->id) }}"
                                                            class="btn btn-sm btn-light border text-primary rounded-2 px-2.5 py-1.5 shadow-none"
                                                            title="Edit Category">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <form action="{{ route('categories.destroy', $category->id) }}"
                                                            method="POST" class="d-inline m-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')"
                                                                class="btn btn-sm btn-light border text-danger rounded-2 px-2.5 py-1.5 shadow-none"
                                                                title="Delete Category">
                                                                <i class="bi bi-trash3"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center py-5 text-muted">
                                                    <i class="bi bi-folder-x fs-1 d-block text-muted opacity-50 mb-2"></i>
                                                    <p class="mb-2">No categories found.</p>
                                                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary rounded-3 px-3">
                                                        + Create First Category
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>
</x-app-layout>
