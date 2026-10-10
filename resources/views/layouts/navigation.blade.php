<nav class="navbar navbar-expand-lg admin-navbar sticky-top bg-white px-3 py-2 border-bottom">
    <div class="container-fluid px-0 d-flex justify-content-between align-items-center">
        <!-- Left: Mobile Toggle & Brand Logo -->
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-light border d-md-none p-1 px-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas" aria-label="Toggle Navigation">
                <i class="bi bi-list fs-5"></i>
            </button>

            <a class="navbar-brand d-flex align-items-center gap-2 m-0 p-0 text-decoration-none" href="{{ route('dashboard') }}">
                <img src="{{ static_asset('front-assets/assets/images/logo.webp') }}" alt="Dr. Medha Sharma" height="38" class="d-inline-block">
                <div class="d-none d-sm-block lh-1">
                    <span class="fw-bold text-dark fs-6 d-block">Dr. Medha Sharma</span>
                    <span class="text-muted text-uppercase" style="font-size: 0.68rem; letter-spacing: 0.05em;">Admin Portal</span>
                </div>
            </a>
        </div>

        <!-- Right: Actions & User Profile -->
        <div class="d-flex align-items-center gap-2 gap-md-3">
            <!-- Quick View Site Shortcut -->
            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-outline-primary d-none d-md-inline-flex align-items-center gap-1 rounded-pill px-3 shadow-none">
                <i class="bi bi-globe2"></i>
                <span>Live Site</span>
                <i class="bi bi-box-arrow-up-right small"></i>
            </a>

            <!-- User Profile Dropdown -->
            <div class="dropdown">
                <a id="userDropdown" class="d-flex align-items-center gap-2 text-decoration-none text-dark p-1 rounded-pill hover-bg"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-avatar-circle shadow-sm">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="d-none d-md-block text-start lh-1 me-1">
                        <span class="fw-semibold text-dark d-block small">{{ Auth::user()->name }}</span>
                        <span class="text-muted" style="font-size: 0.72rem;">Administrator</span>
                    </div>
                    <i class="bi bi-chevron-down text-muted small ms-1"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3 mt-2 py-2" aria-labelledby="userDropdown" style="min-width: 200px;">
                    <li class="px-3 py-2 border-bottom mb-1">
                        <span class="fw-bold text-dark d-block small">{{ Auth::user()->name }}</span>
                        <span class="text-muted small text-truncate d-block">{{ Auth::user()->email }}</span>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2 text-dark" href="{{ route('profile.edit') }}">
                            <i class="bi bi-person-gear text-primary"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2 text-dark d-md-none" href="{{ route('home') }}" target="_blank">
                            <i class="bi bi-globe2 text-success"></i>
                            <span>Visit Website</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider my-1">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>{{ __('Log Out') }}</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
