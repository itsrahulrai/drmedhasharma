@extends('frontend.layout.app')
@section('title', 'Nasolacrimal Duct Obstruction | Causes & Treatment | Vision 4 Children')
@section('meta_description', 'Learn about Nasolacrimal Duct Obstruction, including symptoms, causes, diagnosis, and treatment options with expert guidance from Dr. Medha Sharma.')
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
                            <h1> Nasolacrimal Duct Obstruction </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Nasolacrimal Duct Obstruction </li>
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
                    <img src="{{ static_asset('front-assets/assets/images/nod1.png')}}" class="pq-mb-30" alt="">
                    <h2 class="mb-2">Nasolacrimal Duct Obstruction</h2>
                    <p>Nasolacrimal Duct Obstruction (NLDO) occurs when the tear drainage system is blocked, causing watery
                        eyes and recurrent infections.
                        It is common in infants but can also affect adults due to aging or injury. Treatment may include
                        massage, medication, or minor surgery
                        to open the blocked duct. Early diagnosis ensures better relief and long-term comfort.</p>
                    <p class="pq-highlighted-text">Nasolacrimal Duct Obstruction causes excessive tearing and eye discomfort
                        due to blockage in the tear drainage pathway.</p>
                    <p class="pq-mb-45">It can lead to frequent eye infections and irritation if left untreated. Prompt
                        medical evaluation helps restore normal tear flow and eye comfort.
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
                                    <p class="pq-icon-box-description">Regular visual acuity tests help assess any impact of
                                        Nasolacrimal Duct Obstruction on overall eye health and vision clarity.</p>
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
                                    <p class="pq-icon-box-description">Routine eye check-ups help detect Nasolacrimal Duct
                                        Obstruction early and prevent recurrent eye infections.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pq-mb-45">
                        <div class="col-lg-7 col-md-7 p-xl-0">
                            <img src="{{ static_asset('front-assets/assets/images/ndo.jpg')}}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-lg-5 col-md-5 mt-4 mt-md-0 pq-ps-30">
                            <h4 class="pq-service-single-title">Nasolacrimal Duct Obstruction treatments designed for</h4>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>tear drainage</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>infection prevention</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>comfort restoration</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-accordion-block">
                        <div class="pq-accordion-box 1 pq-active">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    01. What causes Nasolacrimal Duct Obstruction?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="">
                                <p class="pq-detail-text">It occurs when the tear drainage passage is blocked due to
                                    congenital issues, infection, or injury.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    02. How is Nasolacrimal Duct Obstruction treated?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Treatment may include tear duct massage, antibiotics, or surgery
                                    like dacryocystorhinostomy (DCR) to clear the blockage.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 3">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    03.Can Nasolacrimal Duct Obstruction heal on its own?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">In infants, it often resolves naturally within the first year;
                                    adults may need medical intervention.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 4">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    04. What are the symptoms of Nasolacrimal Duct Obstruction?

                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Common symptoms include watery eyes, discharge, and recurrent eye
                                    infections.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->




@endsection
