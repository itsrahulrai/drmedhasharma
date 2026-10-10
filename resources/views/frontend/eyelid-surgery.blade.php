@extends('frontend.layout.app')
@section('title', 'Eyelid Surgery in Dubai | Expert Eye Care | Vision 4 Children')
@section('meta_description', 'Learn about Eyelid Surgery in Dubai at Vision 4 Children, with personalised evaluation, treatment options, and expert care from our experienced eye care team.')
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
                            <h1> Eyelid Surgery </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Eyelid Surgery </li>
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
                    <img src="{{ static_asset('front-assets/assets/images/eyelid1.png')}}" class="pq-mb-30" alt="">
                    <h2 class="mb-2">Eyelid Surgery</h2>
                    <p>**Eyelid surgery, also known as **blepharoplasty**, is a cosmetic and functional procedure to remove
                        excess skin, fat, and muscle from the upper or lower eyelids.
                        It helps improve vision** blocked by drooping lids and enhances facial appearance.
                        The surgery can reduce puffiness, wrinkles, and sagging around the eyes. Overall, it restores a
                        youthful, refreshed look** while improving eye comfort and function.</p>
                    <p class="pq-highlighted-text">"Eyelid surgery (Blepharoplasty) is a procedure that rejuvenates the eyes
                        by removing excess skin and fat,
                        enhancing both vision and appearance."
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
                                    <p class="pq-icon-box-description">Eyelid surgery (Blepharoplasty) helps improve visual
                                        acuity by lifting droopy eyelids that obstruct vision, while also enhancing the
                                        eye’s natural appearance.</p>
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
                                    <p class="pq-icon-box-description">Regular check-ups after eyelid surgery are essential
                                        to monitor healing, prevent infection, and ensure the eyes regain their best
                                        function and appearance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pq-mb-45">
                        <div class="col-lg-7 col-md-7 p-xl-0">
                            <img src="{{ static_asset('front-assets/assets/images/eyelid.png')}}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-lg-5 col-md-5 mt-4 mt-md-0 pq-ps-30">
                            <h4 class="pq-service-single-title">Eyelid Surgery treatments designed for</h4>
                            <ul class="pq-list-check">
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>Rejuvenation</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>Vision Improvement</span>
                                </li>
                                <li>
                                    <i class="ion ion-checkmark-circled"></i>
                                    <span>Safety & Recovery</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pq-accordion-block">
                        <div class="pq-accordion-box 1 pq-active">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    01. What is eyelid surgery (blepharoplasty)?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="">
                                <p class="pq-detail-text">Eyelid surgery is a procedure to remove excess skin, fat, and
                                    muscle from the upper or lower eyelids, improving appearance and vision.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    02. Who is a candidate for eyelid surgery?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Candidates include those with droopy eyelids obstructing vision,
                                    puffiness, or wrinkles affecting the eye area.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 3">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    03. How long is the recovery after eyelid surgery?
                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text">Most patients recover within 1–2 weeks, with swelling and bruising
                                    gradually subsiding during this period.</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box 4">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    04. Are the results of eyelid surgery permanent?

                                    <i aria-hidden="true" class=" ti-angle-up active"></i>
                                    <i aria-hidden="true" class=" ti-angle-down inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details" style="display: none;">
                                <p class="pq-detail-text"> Results are long-lasting, though natural aging may gradually
                                    affect eyelid appearance over time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->




@endsection
