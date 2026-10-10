@extends('frontend.layout.app')
@section('title', 'Cataract Surgery - Dr Medha Sharma : Eye Specialist Dubai | Paediatric Ophthalmologist')
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
                            <h1> Cataract Surgery </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Cataract Surgery </li>
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
                    <img src="{{ static_asset('front-assets/assets/images/cataract1.png')}}" class="pq-mb-30" alt="">
                    <h2 class="mb-2">Cataract Surgery</h2>
                    <p>Cataract eye surgery is a safe and effective procedure to remove the cloudy lens and restore clear
                        vision.
                        It involves replacing the affected lens with an artificial intraocular lens (IOL).
                        The surgery is quick, painless, and usually done on an outpatient basis. Most patients experience
                        improved vision within a few days after the procedure.</p>
                    <p class="pq-highlighted-text">Cataract eye surgery restores clear vision by removing the cloudy lens
                        and replacing it with a clear artificial lens for improved sight.</p>
                    <p class="pq-mb-45">Cataract eye surgery is a safe and effective procedure to restore clear vision by
                        removing the cloudy lens and replacing it with an artificial one
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
                                    <p class="pq-icon-box-description">Visual acuity improves significantly after cataract
                                        surgery, restoring sharp and clear vision for daily activities.</p>
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
                                    <p class="pq-icon-box-description">Regular eye check-ups help detect cataracts early,
                                        allowing timely surgery for clearer and sharper vision.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pq-mb-45">
                        <div class="col-lg-7 col-md-7 p-xl-0">
                            <img src="{{ static_asset('front-assets/assets/images/cata.png')}}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-lg-5 col-md-5 mt-4 mt-md-0 pq-ps-30">
                            <h4 class="pq-service-single-title">Cataract Surgery treatments designed for</h4>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>clear vision</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>lens replacement</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>vision restoration.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-accordion-block">
                        <div class="pq-accordion-box 1 pq-active">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    01. 1. What is cataract surgery?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="">
                                <p class="pq-detail-text">Cataract surgery is a procedure to remove the cloudy natural lens
                                    and replace it with a clear artificial lens to restore vision.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    02. Is cataract surgery painful?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Is cataract surgery painful?
                                    No, the surgery is generally painless as it’s done under local anesthesia, and patients
                                    feel minimal discomfort.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 3">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    03. How long does cataract surgery take?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">The procedure usually takes about 15–30 minutes, and most patients
                                    can go home the same day.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 4">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    04. How soon will I see clearly after cataract surgery?

                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Most patients notice improved vision within a few days, with
                                    complete healing in about 3 to 4 weeks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->




@endsection
