<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->

                @include('side-bar')


                <!-- Main content -->

                <main class="col-12 col-md-9 col-lg-10 bg-white p-4">
                    <h4 class="mb-4">Welcome to Dr. Medha Sharma</h4>

                    <div class="row g-4">
                        <!-- Blog Card -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="p-4 shadow-sm rounded bg-light text-center h-100 border">
                                <div class="mb-3">
                                    <div class="rounded-circle bg-primary text-white d-inline-flex justify-content-center align-items-center"
                                        style="width: 50px; height: 50px;">
                                        <i class="bi bi-journal-richtext fs-4"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold">Blogs</h5>
                                <p class="text-muted mb-3">There are 150 blogs</p>
                                <div class="d-flex flex-column gap-1">
                                    <a href="{{route('admin.blogs.index')}}" class="btn btn-outline-primary btn-sm">View All Blogs</a>
                                    <a href="{{route('admin.blogs.create')}}" class="btn btn-primary btn-sm">Add New Blog</a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Category Card -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="p-4 shadow-sm rounded bg-light text-center h-100 border">
                                <div class="mb-3">
                                    <div class="rounded-circle bg-success text-white d-inline-flex justify-content-center align-items-center"
                                        style="width: 50px; height: 50px;">
                                        <i class="bi bi-folder-fill fs-4"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold">Blog Categories</h5>
                                <p class="text-muted mb-3">There are 10 categories</p>
                                <div class="d-flex flex-column gap-1">
                                    <a href="{{route('categories.index')}}" class="btn btn-outline-success btn-sm">View Categories</a>
                                    <a href="{{route('categories.create')}}" class="btn btn-success btn-sm">Add Category</a>
                                </div>
                            </div>
                        </div>

                        <!-- Products Card -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="p-4 shadow-sm rounded bg-light text-center h-100 border">
                                <div class="mb-3">
                                    <div class="rounded-circle bg-warning text-white d-inline-flex justify-content-center align-items-center"
                                        style="width: 50px; height: 50px;">
                                        <i class="bi bi-box-seam fs-4"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold">Products<br> Enquiry</h5>
                                <div class="d-flex flex-column gap-1">
                                    <a href="{{route('admin.product.bookings')}}" class="btn btn-outline-warning btn-sm text-dark">View Enquiry
                                        Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>




            </div>
        </div>
    </div>
</x-app-layout>
