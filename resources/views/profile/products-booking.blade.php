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
                                            Inquiries & Leads
                                        </span>
                                    </div>
                                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                        <i class="bi bi-calendar-check"></i>
                                        <span>All Product & Service Bookings</span>
                                    </h3>
                                    <p class="mb-0 text-white-50 small">
                                        Review, track, and manage incoming patient consultations and product inquiries.
                                    </p>
                                </div>
                                <div>
                                    <span class="badge bg-white text-primary px-3 py-2 rounded-3 fw-bold fs-6 shadow-sm d-inline-flex align-items-center gap-1.5">
                                        <i class="bi bi-inbox-fill"></i>
                                        <span>{{ count($bookings) }} {{ count($bookings) === 1 ? 'Booking' : 'Bookings' }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bookings Table Card -->
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="card-header bg-white border-bottom py-3 px-4 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                     style="width: 32px; height: 32px; background-color: #fffbeb; color: #d97706;">
                                    <i class="bi bi-bag-check fs-6"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Received Inquiries</h6>
                                <span class="badge rounded-2 bg-light text-muted border px-2 py-1 ms-1 small fw-semibold">
                                    {{ count($bookings) }} Total Records
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4" style="width: 50px;">#</th>
                                            <th>Patient / Client</th>
                                            <th>Contact Details</th>
                                            <th>Message / Requirement</th>
                                            <th>Date & Time</th>
                                            <th class="text-end pe-4" style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($bookings as $key => $booking)
                                            <tr>
                                                <td class="ps-4 text-muted fw-semibold">{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2.5">
                                                        <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white shadow-xs"
                                                             style="width: 38px; height: 38px; background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%); font-size: 0.85rem;">
                                                            {{ strtoupper(substr($booking->name, 0, 1)) }}
                                                        </div>
                                                        <div>
                                                            <div class="fw-bold text-dark">{{ $booking->name }}</div>
                                                            @if(!empty($booking->product))
                                                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-2 px-2 py-0.5 small" style="font-size: 0.72rem;">
                                                                    {{ $booking->product }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column gap-1">
                                                        <a href="mailto:{{ $booking->email }}" class="text-dark text-decoration-none small hover-primary d-inline-flex align-items-center gap-1.5">
                                                            <i class="bi bi-envelope text-muted"></i>
                                                            <span>{{ $booking->email }}</span>
                                                        </a>
                                                        @if($booking->phone)
                                                            <a href="tel:{{ $booking->phone }}" class="text-muted text-decoration-none small hover-primary d-inline-flex align-items-center gap-1.5">
                                                                <i class="bi bi-telephone text-muted"></i>
                                                                <span>{{ $booking->phone }}</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="bg-light p-2.5 rounded-3 border text-dark small" style="max-width: 360px; line-height: 1.45;">
                                                        {{ $booking->message ?: 'No additional message provided.' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="small text-dark fw-medium">
                                                        {{ $booking->created_at ? $booking->created_at->format('M d, Y') : '—' }}
                                                    </div>
                                                    <div class="text-muted small" style="font-size: 0.75rem;">
                                                        {{ $booking->created_at ? $booking->created_at->format('h:i A') : '' }}
                                                    </div>
                                                </td>
                                                <td class="text-end pe-4 text-nowrap">
                                                    <form action="{{ route('admin.product.bookings.destroy', $booking->id) }}" method="POST" class="d-inline m-0">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                onclick="return confirm('Are you sure you want to delete this booking inquiry?')" 
                                                                class="btn btn-sm btn-outline-danger rounded-2 px-3 py-1.5 d-inline-flex align-items-center shadow-none"
                                                                title="Delete Booking">
                                                            <i class="bi bi-trash3 me-1.5"></i>
                                                            <span class="small fw-semibold">Delete</span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-5">
                                                    <div class="py-4">
                                                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                                            <i class="bi bi-inbox text-muted fs-3"></i>
                                                        </div>
                                                        <h6 class="fw-bold text-dark mb-1">No Bookings Found</h6>
                                                        <p class="text-muted small mb-0">Patient bookings and consultation inquiries will appear here once submitted.</p>
                                                    </div>
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
