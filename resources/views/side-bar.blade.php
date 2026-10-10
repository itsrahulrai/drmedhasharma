<!-- Sidebar Toggle Button for Mobile -->
<div class="d-md-none bg-white border-bottom px-3 py-2 d-flex justify-content-between align-items-center">
    <h5 class="mb-0 text-dark">Admin Panel</h5>
    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#sidebarOffcanvas">
        <i class="bi bi-list"></i>
    </button>
</div>

<!-- Sidebar (Offcanvas for Mobile, Fixed for Desktop) -->
<nav class="col-12 col-md-3 col-lg-2 offcanvas-md offcanvas-start bg-light sidebar p-0 border-end vh-100" tabindex="-1"
    id="sidebarOffcanvas">
    <div class="offcanvas-header d-md-none">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="d-flex flex-column align-items-center align-items-md-start vh-100 w-100">

        <ul class="nav nav-pills flex-column px-2 mt-3 gap-2 w-100">
            <li class="nav-item w-100">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center gap-2 active">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ route('categories.create') }}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-grid"></i> Add Category
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ route('categories.index') }}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-list-ul"></i> All Category
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{route('admin.blogs.create')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-grid"></i> Add Blog
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{route('admin.blogs.index')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-journal-text"></i> All Blog
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{route('admin.product.bookings')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-question-circle"></i>  Inquiry
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{route('admin.contacts')}}" class="nav-link d-flex align-items-center gap-2">
                    <i class="bi bi-chat-dots"></i> General Inquiry
                </a>
            </li>
        </ul>
    </div>
</nav>
