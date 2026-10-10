<x-app-layout>
    <div class="py-0">
        <div class="container-fluid">
            <div class="row min-vh-100">

                <!-- Sidebar -->
                @include('side-bar')

                <!-- Main Content -->
                <main class="col-12 col-md-9 col-lg-10 bg-light p-4">

                    <div class="row g-4">
                        <!-- Profile Information Card -->
                        <div class="col-12 col-lg-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                                <div class="card-body p-4">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>
                        </div>

                        <!-- Update Password Card -->
                        <div class="col-12 col-lg-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                                <div class="card-body p-4">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>

                        <!-- Delete Account Card -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm rounded-4 bg-white border-start border-danger border-4">
                                <div class="card-body p-4">
                                    @include('profile.partials.delete-user-form')
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>
</x-app-layout>
