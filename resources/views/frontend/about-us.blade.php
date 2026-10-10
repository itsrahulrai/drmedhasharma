@extends('frontend.layout.app')
@section('title', 'About Us | Dr. Medha Sharma & Vision 4 Children')
@section('meta_description', 'Learn about Dr. Medha Sharma, her expertise, and the vision behind Vision 4 Children, dedicated to providing trusted, compassionate eye care.')
@section('meta_robots', 'index, follow')
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb" style="padding-top: 262.2px;">
        <div class="container">
            <img src="" alt="">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>
                                About Us </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- About us Start -->

    <!-- About us -->
    <section class="out">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow  fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <img src="{{ static_asset('front-assets/assets/images/01.png') }}" class="img-fluid w-100 rounded"
                        alt="">
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <span class="pq-section-sub-title">About Us</span>
                        <h5 class="pq-section-main-title">Dr Medha Sharma</h5>
                        <p class="pq-section-description " style ="text-align:justify;">Dr. Medha Sharma is an accomplished
                            pediatric ophthalmologist with an extraordinary educational background. Dr. Sharma completed her
                            ophthalmology training and fellowship in Cornea, Squint, and Neuro-Ophthalmology at the
                            prestigious All India Institute of Medical Sciences (AIIMS) in Delhi, India. She further
                            enhanced her expertise by completing a fellowship in Pediatric Ophthalmology and Strabismus at
                            the world-renowned Harvard Medical School in Boston, USA..</p>
                    </div>
                    <ul class="pq-list-check">
                        <li>
                            <i class="ion ion-checkmark-circled"></i>
                            <span>Here's what they have to say about us</span>
                        </li>
                        <li>
                            <i class="ion ion-checkmark-circled"></i>
                            <span>Quickly aggregate B2B users.</span>
                        </li>
                        <li>
                            <i class="ion ion-checkmark-circled"></i>
                            <span>Appropriately empower dynamic leadership</span>
                        </li>
                    </ul>
                    <div class="seprator pq-mt-30 pq-pb-30"></div>
                    <div class="row pq-mb-45">
                        <div class="col-lg-6 col-md-6">
                            <div class="pq-icon-box pq-style-1">
                                <div class="pq-icon">
                                    <i class="flaticon-eye-test"></i>
                                </div>
                                <div class="pq-icon-box-content">
                                    <h6 class="pq-icon-box-title">Appropriately Empowerer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                            <div class="pq-icon-box pq-style-1">
                                <div class="pq-icon">
                                    <i class="flaticon-testing-glasses-1"></i>
                                </div>
                                <div class="pq-icon-box-content">
                                    <h6 class="pq-icon-box-title">Dynamically Appropriately</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- About us end -->


    <!-- Process -->
    <section class="process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">Dr. Medha Sharma</span>
                        <h5 class="pq-section-main-title">Why Choose Dr. Medha Sharma?</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-process-box">
                        <div class="pq-process-icon">
                            <img src="{{ static_asset('front-assets/assets/images/icons/01.png') }}" width="80px"
                                alt="" class="img-fluid">
                        </div>
                        <h4 class="pq-process-title">International Expertise </h4>
                        <p class="pq-process-box-description">Trained at AIIMS, Delhi, and Harvard Medical School, ensuring
                            world-class ophthalmic care.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-process-box">
                        <div class="pq-process-icon">
                            <img src="{{ static_asset('front-assets/assets/images/icons/02.png') }}" width="80px"
                                alt="" class="img-fluid">
                        </div>
                        <h4 class="pq-process-title"> Pediatric Eye Care </h4>
                        <p class="pq-process-box-description">Expert in treating squints, lazy eye, congenital cataracts,
                            and corneal disorders.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-process-box">
                        <div class="pq-process-icon">
                            <img src="{{ static_asset('front-assets/assets/images/icons/03.png') }}" width="80px"
                                alt="" class="img-fluid">
                        </div>
                        <h4 class="pq-process-title"> Eye Treatments </h4>
                        <p class="pq-process-box-description">Uses modern technology for precise and safe eye surgeries and
                            treatments.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-process-box">
                        <div class="pq-process-icon">
                            <img src="{{ static_asset('front-assets/assets/images/icons/04.png') }}" width="80px"
                                alt="" class="img-fluid">
                        </div>
                        <h4 class="pq-process-title">Patient-Centered </h4>
                        <p class="pq-process-box-description">Combines medical research with personal care to deliver
                            trusted, effective results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process -->




@endsection
