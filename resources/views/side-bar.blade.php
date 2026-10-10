<!-- Sidebar (Offcanvas for Mobile, Sticky for Desktop) -->
<nav class="col-12 col-md-3 col-lg-2 offcanvas-md offcanvas-start sidebar p-0" tabindex="-1"
    id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
    
    <div class="offcanvas-header d-md-none border-bottom p-3">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ static_asset('front-assets/assets/images/logo.webp') }}" alt="Logo" height="32">
            <h6 class="offcanvas-title fw-bold text-dark mb-0" id="sidebarOffcanvasLabel">Admin Menu</h6>
        </div>
        <button type="button" class="btn-close text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="d-flex flex-column justify-content-between h-100 p-3 overflow-y-auto">
        <div>
            <ul class="nav nav-pills flex-column gap-1 w-100 p-0 m-0">
                <!-- Main Menu -->
                <li class="sidebar-heading">Main Menu</li>
                <li class="nav-item w-100">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Category & Blog Management -->
                <li class="sidebar-heading">Category Management</li>
                <li class="nav-item w-100">
                    <a href="{{ route('categories.create') }}" class="nav-link {{ request()->routeIs('categories.create') ? 'active' : '' }}">
                        <i class="bi bi-plus-circle"></i>
                        <span>Add Category</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.index') || request()->routeIs('categories.edit') ? 'active' : '' }}">
                        <i class="bi bi-folder2-open"></i>
                        <span>All Categories</span>
                    </a>
                </li>

                <!-- Blog Management -->
                <li class="sidebar-heading">Blog Management</li>
                <li class="nav-item w-100">
                    <a href="{{ route('admin.blogs.create') }}" class="nav-link {{ request()->routeIs('admin.blogs.create') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-plus"></i>
                        <span>Add Blog</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ request()->routeIs('admin.blogs.index') || request()->routeIs('admin.blogs.edit') ? 'active' : '' }}">
                        <i class="bi bi-journal-richtext"></i>
                        <span>All Blogs</span>
                    </a>
                </li>

                <!-- Inquiries & Leads -->
                <li class="sidebar-heading">Inquiries & Leads</li>
                <li class="nav-item w-100">
                    <a href="{{ route('admin.product.bookings') }}" class="nav-link {{ request()->routeIs('admin.product.bookings') ? 'active' : '' }}">
                        <i class="bi bi-box-seam"></i>
                        <span>Product Inquiries</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="{{ route('admin.contacts') }}" class="nav-link {{ request()->routeIs('admin.contacts') ? 'active' : '' }}">
                        <i class="bi bi-chat-left-text"></i>
                        <span>Contact Messages</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Bottom User Card in Sidebar -->
        <div class="mt-4 pt-3 border-top">
            <div class="d-flex align-items-center justify-content-between p-2 rounded-3 bg-light">
                <div class="d-flex align-items-center gap-2 overflow-hidden">
                    <div class="user-avatar-circle" style="width: 32px; height: 32px; font-size: 0.85rem;">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="overflow-hidden">
                        <span class="fw-semibold text-dark d-block text-truncate small">{{ Auth::user()->name }}</span>
                        <span class="text-muted d-block text-truncate" style="font-size: 0.7rem;">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger p-1 px-2 border-0" title="Log Out">
                        <i class="bi bi-box-arrow-right fs-6"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
