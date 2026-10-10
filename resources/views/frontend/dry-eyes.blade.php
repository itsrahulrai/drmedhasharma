@extends('frontend.layout.app')
@section('title', 'Dry Eyes - Dr Medha Sharma : Eye Specialist Dubai | Paediatric Ophthalmologist')
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
                            <h1> Dry Eyes </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Dry Eyes </li>
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
                    <img src="{{ static_asset('front-assets/assets/images/dryeye01.png')}}" class="pq-mb-30" alt="">
                    <h2 class="mb-2">Dry Eyes</h2>
                    <p>Dry eyes occur when your eyes don’t produce enough tears or the tears evaporate too quickly,
                        causing discomfort and irritation. Common symptoms include burning, redness, and a gritty
                        sensation. It can result from prolonged screen use, aging, or certain medical conditions.
                        Proper treatment and lifestyle changes can help restore eye moisture and comfort.</p>
                    <p class="pq-highlighted-text">Dry eyes occur when your eyes don’t produce enough tears or the tears
                        evaporate too quickly, causing irritation and discomfort.
                        It leads to redness, burning, and blurred vision, often worsening with screen use or dry
                        environments.</p>
                    <p class="pq-mb-45">Dry, red eyes can result from prolonged screen time, allergies, or environmental
                        factors like wind and pollution.
                        Proper hydration, eye drops, and regular blinking can help relieve symptoms and maintain eye
                        comfort.
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
                                    <p class="pq-icon-box-description">Visual acuity tests help assess how dry, red eyes may
                                        be affecting sharpness and clarity of vision.</p>
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
                                    <p class="pq-icon-box-description">Regular eye check-ups help identify the cause of dry,
                                        red eyes and ensure proper treatment for lasting relief.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pq-mb-45">
                        <div class="col-lg-7 col-md-7 p-xl-0">
                            <img src="{{ static_asset('front-assets/assets/images/dryeye03.png')}}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-lg-5 col-md-5 mt-4 mt-md-0 pq-ps-30">
                            <h4 class="pq-service-single-title">Dry Red Eyes Treatments designed for</h4>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>tear restoration</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>s
                                    <span>irritation relief</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>eye hydration</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-accordion-block">
                        <div class="pq-accordion-box 1 pq-active">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    01. What causes dry, red eyes?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Dry, red eyes are often caused by reduced tear production,
                                    allergies, or excessive screen time.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    02. How can I relieve dry, red eyes at home?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Use lubricating eye drops, take screen breaks, and avoid smoky or
                                    dry environments.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 3">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    03.When should I see a doctor for dry, red eyes?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">If symptoms persist, worsen, or cause vision changes, consult an
                                    eye specialist promptly.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 4">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    04. Can dry, red eyes be prevented?

                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Yes, by staying hydrated, maintaining good eye hygiene, and using
                                    a humidifier in dry settings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->




@endsection
