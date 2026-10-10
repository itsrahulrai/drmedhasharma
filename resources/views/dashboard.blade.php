<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->
                @include('side-bar')

                <!-- Main Content -->
                <main class="col-12 col-md-9 col-lg-10 bg-light p-4">

                    <!-- Welcome Header Card -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4" style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #0284c7 100%);">
                        <div class="card-body p-4 text-white">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div>
                                    <h3 class="fw-bold mb-1">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                                    <p class="mb-0 text-white-50">Here is a quick overview of Dr. Medha Sharma's website activity and management.</p>
                                </div>
                                <div>
                                    <span class="badge bg-white bg-opacity-25 text-white px-3 py-2 rounded-pill shadow-sm d-inline-flex align-items-center gap-2">
                                        <span><i class="bi bi-calendar-event me-1"></i> {{ now()->format('l, d F Y') }}</span>
                                        <span class="opacity-50">|</span>
                                        <span class="d-inline-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-1">
                                                <circle cx="12" cy="12" r="7"></circle>
                                                <polyline points="12 9 12 12 13.5 13.5"></polyline>
                                                <path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path>
                                            </svg>
                                            <span id="dashboardLiveClock">{{ now()->format('h:i:s A') }}</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Cards Grid -->
                    <div class="row g-3 mb-4">
                        <!-- Categories Card (Vibrant Cyan / Teal) -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card border-0 shadow-sm rounded-4 h-100 position-relative overflow-hidden"
                                style="background-color: #ecfeff; border: 1.5px solid #a5f3fc !important;">
                                <div class="card-body p-3 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold text-uppercase" style="font-size: 0.72rem; letter-spacing: 0.05em; color: #0891b2;">Categories</span>
                                            <div class="rounded-3 text-white d-flex align-items-center justify-content-center shadow-sm" style="width: 34px; height: 34px; background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);">
                                                <i class="bi bi-folder-check fs-6"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2 mb-2">
                                            <h3 class="fw-bold mb-0 text-dark">{{ $totalCategories ?? 0 }}</h3>
                                            <span class="badge rounded-pill px-2 py-0.5 fw-semibold" style="font-size: 0.72rem; background-color: #cffafe; color: #0e7490; border: 1px solid #67e8f9;">
                                                {{ $activeCategories ?? 0 }} Active
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #cffafe !important; font-size: 0.8rem;">
                                        <a href="{{ route('categories.index') }}" class="text-decoration-none fw-bold" style="color: #0891b2;">
                                            Manage All <i class="bi bi-arrow-right"></i>
                                        </a>
                                        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-light py-0 px-2 rounded-pill fw-semibold shadow-none border" style="font-size: 0.75rem; color: #0891b2; border-color: #a5f3fc !important;">
                                            + Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blogs Card (Soft Royal / Indigo Blue) -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card border-0 shadow-sm rounded-4 h-100 position-relative overflow-hidden"
                                style="background-color: #eef2ff; border: 1.5px solid #c7d2fe !important;">
                                <div class="card-body p-3 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold text-uppercase" style="font-size: 0.72rem; letter-spacing: 0.05em; color: #4f46e5;">Total Blogs</span>
                                            <div class="rounded-3 text-white d-flex align-items-center justify-content-center shadow-sm" style="width: 34px; height: 34px; background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);">
                                                <i class="bi bi-journal-richtext fs-6"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2 mb-2">
                                            <h3 class="fw-bold mb-0 text-dark">{{ $totalBlogs ?? 0 }}</h3>
                                            <span class="badge rounded-pill px-2 py-0.5 fw-semibold" style="font-size: 0.72rem; background-color: #e0e7ff; color: #3730a3; border: 1px solid #a5b4fc;">
                                                {{ $activeBlogs ?? 0 }} Published
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #e0e7ff !important; font-size: 0.8rem;">
                                        <a href="{{ route('admin.blogs.index') }}" class="text-decoration-none fw-bold" style="color: #4f46e5;">
                                            Manage All <i class="bi bi-arrow-right"></i>
                                        </a>
                                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-light py-0 px-2 rounded-pill fw-semibold shadow-none border" style="font-size: 0.75rem; color: #4f46e5; border-color: #c7d2fe !important;">
                                            + Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Inquiries Card (Warm Amber Gold) -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card border-0 shadow-sm rounded-4 h-100 position-relative overflow-hidden"
                                style="background-color: #fffbeb; border: 1.5px solid #fde68a !important;">
                                <div class="card-body p-3 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold text-uppercase" style="font-size: 0.72rem; letter-spacing: 0.05em; color: #b45309;">Product Inquiries</span>
                                            <div class="rounded-3 text-white d-flex align-items-center justify-content-center shadow-sm" style="width: 34px; height: 34px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                                                <i class="bi bi-box-seam fs-6"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2 mb-2">
                                            <h3 class="fw-bold mb-0 text-dark">{{ $totalInquiries ?? 0 }}</h3>
                                            <span class="badge rounded-pill px-2 py-0.5 fw-semibold" style="font-size: 0.72rem; background-color: #fef3c7; color: #92400e; border: 1px solid #fcd34d;">
                                                Bookings
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #fef3c7 !important; font-size: 0.8rem;">
                                        <a href="{{ route('admin.product.bookings') }}" class="text-decoration-none fw-bold" style="color: #b45309;">
                                            View Inquiries <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Messages Card (Emerald / Mint Green) -->
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card border-0 shadow-sm rounded-4 h-100 position-relative overflow-hidden"
                                style="background-color: #ecfdf5; border: 1.5px solid #a7f3d0 !important;">
                                <div class="card-body p-3 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold text-uppercase" style="font-size: 0.72rem; letter-spacing: 0.05em; color: #047857;">Contact Messages</span>
                                            <div class="rounded-3 text-white d-flex align-items-center justify-content-center shadow-sm" style="width: 34px; height: 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                                                <i class="bi bi-chat-left-text fs-6"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-baseline gap-2 mb-2">
                                            <h3 class="fw-bold mb-0 text-dark">{{ $totalContacts ?? 0 }}</h3>
                                            <span class="badge rounded-pill px-2 py-0.5 fw-semibold" style="font-size: 0.72rem; background-color: #d1fae5; color: #065f46; border: 1px solid #6ee7b7;">
                                                Submissions
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: #d1fae5 !important; font-size: 0.8rem;">
                                        <a href="{{ route('admin.contacts') }}" class="text-decoration-none fw-bold" style="color: #047857;">
                                            View Messages <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Tables Section (2 Columns) -->
                    <div class="row g-4">
                        <!-- Recent Blogs Table -->
                        <div class="col-12 col-xl-7">
                            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-journal-text text-primary fs-5"></i>
                                        <h5 class="fw-bold mb-0 text-dark">Recent Blogs</h5>
                                    </div>
                                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="ps-3">Blog</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th class="text-end pe-3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($recentBlogs ?? [] as $blog)
                                                    <tr>
                                                        <td class="ps-3">
                                                            <div class="d-flex align-items-center gap-2">
                                                                @if ($blog->image)
                                                                    <img src="{{ static_asset('uploads/blogs/' . $blog->image) }}"
                                                                        alt="{{ $blog->title }}" class="rounded object-fit-cover"
                                                                        width="40" height="40"
                                                                        onerror="this.style.display='none'">
                                                                @else
                                                                    <div class="rounded bg-light text-muted d-flex align-items-center justify-content-center"
                                                                        style="width: 40px; height: 40px;">
                                                                        <i class="bi bi-image"></i>
                                                                    </div>
                                                                @endif
                                                                <div>
                                                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-dark fw-semibold text-decoration-none d-block text-truncate" style="max-width: 220px;">
                                                                        {{ $blog->title }}
                                                                    </a>
                                                                    <small class="text-muted">{{ Str::limit($blog->slug, 25) }}</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-light text-dark border">
                                                                {{ $blog->category->name ?? 'Uncategorized' }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            @if ($blog->status == 1)
                                                                <span class="badge bg-success-subtle text-success border border-success-subtle">Active</span>
                                                            @else
                                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle">Inactive</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-muted small">
                                                            {{ $blog->created_at ? $blog->created_at->format('d M Y') : '-' }}
                                                        </td>
                                                        <td class="text-end pe-3">
                                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-light text-primary border" title="Edit Blog">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center py-4 text-muted">No blogs found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Inquiries Table -->
                        <div class="col-12 col-xl-5">
                            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-envelope-paper text-info fs-5"></i>
                                        <h5 class="fw-bold mb-0 text-dark">Recent Inquiries</h5>
                                    </div>
                                    <a href="{{ route('admin.contacts') }}" class="btn btn-sm btn-outline-info">View All</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="ps-3">Sender</th>
                                                    <th>Subject / Phone</th>
                                                    <th class="text-end pe-3">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($recentContacts ?? [] as $contact)
                                                    <tr>
                                                        <td class="ps-3">
                                                            <div class="fw-semibold text-dark">{{ $contact->name }}</div>
                                                            <small class="text-muted">{{ $contact->email }}</small>
                                                        </td>
                                                        <td>
                                                            <div class="small text-truncate" style="max-width: 160px;">{{ $contact->subject ?? '-' }}</div>
                                                            <small class="text-muted">{{ $contact->phone ?? '-' }}</small>
                                                        </td>
                                                        <td class="text-end pe-3 text-muted small">
                                                            {{ $contact->created_at ? $contact->created_at->diffForHumans() : '-' }}
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3" class="text-center py-4 text-muted">No recent inquiries</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>

    <script>
        function updateDashboardClock() {
            const clockEl = document.getElementById('dashboardLiveClock');
            if (clockEl) {
                const now = new Date();
                clockEl.textContent = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
            }
        }
        setInterval(updateDashboardClock, 1000);
    </script>
</x-app-layout>
