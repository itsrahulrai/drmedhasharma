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
                                            Communications
                                        </span>
                                    </div>
                                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                        <i class="bi bi-chat-left-quote"></i>
                                        <span>Contact Form Submissions</span>
                                    </h3>
                                    <p class="mb-0 text-white-50 small">
                                        Direct patient inquiries, treatment questions, and feedback submitted via the Contact Us page.
                                    </p>
                                </div>
                                <div>
                                    <span class="badge bg-white text-primary px-3 py-2 rounded-3 fw-bold fs-6 shadow-sm d-inline-flex align-items-center gap-1.5">
                                        <i class="bi bi-envelope-open-fill"></i>
                                        <span>{{ count($contacts) }} {{ count($contacts) === 1 ? 'Message' : 'Messages' }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contacts Table Card -->
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="card-header bg-white border-bottom py-3 px-4 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-3 d-flex align-items-center justify-content-center" 
                                     style="width: 32px; height: 32px; background-color: #ecfdf5; color: #059669;">
                                    <i class="bi bi-envelope-paper fs-6"></i>
                                </div>
                                <h6 class="fw-bold mb-0 text-dark">Received Contact Messages</h6>
                                <span class="badge rounded-2 bg-light text-muted border px-2 py-1 ms-1 small fw-semibold">
                                    {{ count($contacts) }} Total Submissions
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4" style="width: 50px;">#</th>
                                            <th>Sender Name</th>
                                            <th>Contact Info</th>
                                            <th>Subject & Message</th>
                                            <th style="width: 110px;">Terms</th>
                                            <th>Date & Time</th>
                                            <th class="text-end pe-4" style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contacts as $key => $contact)
                                            <tr>
                                                <td class="ps-4 text-muted fw-semibold">{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2.5">
                                                        <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white shadow-xs"
                                                             style="width: 38px; height: 38px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); font-size: 0.85rem;">
                                                            {{ strtoupper(substr($contact->name, 0, 1)) }}
                                                        </div>
                                                        <div class="fw-bold text-dark">{{ $contact->name }}</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column gap-1">
                                                        <a href="mailto:{{ $contact->email }}" class="text-dark text-decoration-none small hover-primary d-inline-flex align-items-center gap-1.5">
                                                            <i class="bi bi-envelope text-muted"></i>
                                                            <span>{{ $contact->email }}</span>
                                                        </a>
                                                        @if($contact->phone)
                                                            <a href="tel:{{ $contact->phone }}" class="text-muted text-decoration-none small hover-primary d-inline-flex align-items-center gap-1.5">
                                                                <i class="bi bi-telephone text-muted"></i>
                                                                <span>{{ $contact->phone }}</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div style="max-width: 360px;">
                                                        @if(!empty($contact->subject))
                                                            <div class="fw-bold text-dark small mb-1 d-flex align-items-center gap-1">
                                                                <i class="bi bi-tag text-primary small"></i>
                                                                <span>{{ $contact->subject }}</span>
                                                            </div>
                                                        @endif
                                                        <div class="bg-light p-2.5 rounded-3 border text-dark small" style="line-height: 1.45;">
                                                            {{ $contact->message ?: 'No message content.' }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($contact->accepted_terms)
                                                        <span class="badge rounded-2 px-2.5 py-1 text-success border border-success border-opacity-25" style="background-color: #ecfdf5; font-size: 0.75rem;">
                                                            <i class="bi bi-check-circle-fill me-1"></i> Agreed
                                                        </span>
                                                    @else
                                                        <span class="badge rounded-2 px-2.5 py-1 text-secondary border border-secondary border-opacity-25" style="background-color: #f8fafc; font-size: 0.75rem;">
                                                            <i class="bi bi-dash-circle me-1"></i> N/A
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="small text-dark fw-medium">
                                                        {{ $contact->created_at ? $contact->created_at->format('M d, Y') : '—' }}
                                                    </div>
                                                    <div class="text-muted small" style="font-size: 0.75rem;">
                                                        {{ $contact->created_at ? $contact->created_at->format('h:i A') : '' }}
                                                    </div>
                                                </td>
                                                <td class="text-end pe-4 text-nowrap">
                                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline m-0">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                onclick="return confirm('Are you sure you want to delete this contact submission?')" 
                                                                class="btn btn-sm btn-outline-danger rounded-2 px-3 py-1.5 d-inline-flex align-items-center shadow-none"
                                                                title="Delete Message">
                                                            <i class="bi bi-trash3 me-1.5"></i>
                                                            <span class="small fw-semibold">Delete</span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center py-5">
                                                    <div class="py-4">
                                                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                                            <i class="bi bi-chat-square-dots text-muted fs-3"></i>
                                                        </div>
                                                        <h6 class="fw-bold text-dark mb-1">No Contact Submissions Found</h6>
                                                        <p class="text-muted small mb-0">New messages submitted through the website contact form will appear here.</p>
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
