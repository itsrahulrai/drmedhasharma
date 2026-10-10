@extends('frontend.layout.app')
@section('title', 'Computer Vision Syndrome - Dr Medha Sharma : Eye Specialist Dubai | Paediatric Ophthalmologist')
@section('meta_description',
    'Consult Dr. Medha Sharma, a leading Eye Specialist and Paediatric Ophthalmologist in
    Dubai. Expert in treating strabismus, lazy eye, cataract, and all pediatric vision disorders with advanced care and
    compassion.')
@section('meta_keywords',
    'Dr Medha Sharma, Eye Specialist Dubai, Paediatric Ophthalmologist Dubai, Strabismus
    Treatment, Lazy Eye Treatment, Children Eye Doctor Dubai, Pediatric Eye Specialist, Eye Clinic Dubai, Best Eye Doctor
    Dubai')
@section('meta_robots', 'index, follow')
@section('canonical', url('https://drmedhasharma.com/'))
@section('content')


    <!-- Breadcrumb -->
    <div class="pq-breadcrumb" style="padding-top: 262.2px;">
        <div class="container">
            <img src="" alt="">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1> Computer Vision Syndrome </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Computer Vision Syndrome </li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Service -->
    <section class="service-single">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">

                    @include('frontend.include.side-bar')

                </div>
                <div class="col-xl-8 mt-4 mt-xl-0">
                    <img src="{{ static_asset('front-assets/assets/images/computer.png')}}" class="pq-mb-30" alt="">
                    <h2 class="mb-2">Computer Vision Syndrome</h2>
                    <p>Prolonged screen use can lead to eye strain, dryness, and blurred vision.
                        Our specialists provide advanced eye care solutions to relieve digital strain.
                        Protect your vision with proper diagnosis and personalized treatment today.</p>
                    <p class="pq-highlighted-text">“Protect your eyes from digital strain and fatigue.”
                        Expert care for relief from Computer Vision Syndrome and screen-related eye stress.</p>
                    <p class="pq-mb-45">Long hours on screens can cause burning, dryness, and blurred vision.
                        Our eye specialists offer advanced treatments to ease digital eye discomfort.
                        Keep your eyes healthy and refreshed with personalized vision care.
                    </p>
                    <div class="row pq-mb-45">
                        <div class="col-lg-6 col-md-6">
                            <div class="pq-icon-box pq-style-9">
                                <div class="pq-icon">
                                    <i class="flaticon-optometrist"></i>
                                </div>
                                <div class="pq-icon-box-content">
                                    <h4 class="pq-icon-box-title">
                                        <a href="">Visual Acuity</a>
                                    </h4>
                                    <p class="pq-icon-box-description">Regular visual acuity checks help detect
                                        screen-related eye strain early and protect long-term vision.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                            <div class="pq-icon-box pq-style-9">
                                <div class="pq-icon">
                                    <i class="flaticon-optometrist-3"></i>
                                </div>
                                <div class="pq-icon-box-content">
                                    <h4 class="pq-icon-box-title">
                                        <a href="">Check Up</a>
                                    </h4>
                                    <p class="pq-icon-box-description">Routine eye check-ups help prevent and manage
                                        Computer Vision Syndrome effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pq-mb-45">
                        <div class="col-lg-7 col-md-7 p-xl-0">
                            <img src="{{ static_asset('front-assets/assets/images/computer02.png')}}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-lg-5 col-md-5 mt-4 mt-md-0 pq-ps-30">
                            <h4 class="pq-service-single-title">Computer Vision Syndrome Treatments designed for</h4>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>Digital Eye Strain Relief</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>Dry & Tired Eyes Care</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>Screen-Time Vision Protection</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-accordion-block">
                        <div class="pq-accordion-box 1 pq-active">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    01. What causes Computer Vision Syndrome?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="">
                                <p class="pq-detail-text">Prolonged screen time and poor posture strain your eyes.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    02. What are the symptoms?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Dryness, blurred vision, headache, and eye fatigu</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 3">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    03. How is it treated?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Using eye drops, screen breaks, and ergonomic adjustments.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 4">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    04. Can it be prevented?

                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Yes, through regular eye check-ups and digital hygiene.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->




@endsection
