@extends('frontend.layout.app')
@section('title', 'Eye Specialist in Dubai | Ophthalmologist in Dubai | Vision 4 Children')
@section('meta_description', 'Looking for an Eye Specialist in Dubai? Vision 4 Children offers expert care from Dr. Medha Sharma, an experienced Ophthalmologist in Dubai, with trusted care.')
@section('meta_robots', 'index, follow')
@section('content')

<style>
    .banner-style {
        margin-top: 140px !important; /* Desktop */
    }

    /* Mobile + Tablet (768px and below) */
    @media (max-width: 768px) {
        .banner-style {
            margin-top: 90px !important;
        }
    }
</style>

    <!-- Banner Sevtion Strat -->

<img src="{{ static_asset('front-assets/assets/images/banner/banner-01.webp') }}"
     class="img-fluid banner-style"
     alt="Dr Medha Sharma Eye Specialist Dubai">

    <!-- Banner Section end -->

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

    <!---Our Service-->
    <section class="process pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our process</span>
                        <h5 class="pq-section-main-title">how it help you stay strong</h5>
                    </div>
                </div>
            </div>
            <div class="pq-process-line-grid pq-process-line">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-6 col-md-6 p-0">
                        <div class="pq-process-step pq-process-2 text-center pq-process-dot">
                            <div class="pq-process-media">
                                <div class="pq-process-img">
                                    <img decoding="async" src="{{ static_asset('front-assets/assets/images/img04.png') }}"
                                        alt="process-image">
                                </div>
                                <div>
                                    <span></span>
                                </div>
                            </div>
                            <div class="pq-process-info">
                                <h5 class="pq-process-title">Comprehensive Eye Exam</h5>
                                <p class="pq-process-description">Detailed vision and eye health assessment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0 p-0">
                        <div class="pq-process-step pq-process-2 text-center">
                            <div class="pq-process-media">
                                <div class="pq-process-img">
                                    <img decoding="async" src="{{ static_asset('front-assets/assets/images/img05.png') }}"
                                        alt="process-image">
                                </div>
                                <div>
                                    <span></span>
                                </div>
                            </div>
                            <div class="pq-process-info">
                                <h5 class="pq-process-title">Personalized Diagnosis</h5>
                                <p class="pq-process-description">Tailored treatment plan based on individual needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 p-0">
                        <div class="pq-process-step pq-process-2 text-center pq-process-dot-right">
                            <div class="pq-process-media">
                                <div class="pq-process-img">
                                    <img decoding="async" src="{{ static_asset('front-assets/assets/images/img06.png') }}"
                                        alt="process-image">
                                </div>
                                <div>
                                    <span></span>
                                </div>
                            </div>
                            <div class="pq-process-info">
                                <h5 class="pq-process-title">Effective Treatment Follow-up</h5>
                                <p class="pq-process-description">Advanced care with regular progress monitoring.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!---Our Service-->

    <section class="service pq-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our service</span>
                        <h5 class="pq-section-main-title">What We Do</h5>
                    </div>
                </div>
                <div class="col-lg-12 wow  fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="pq-service-box-slider pq-style-1">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false"
                            data-desk_num="3" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1"
                            data-autoplay="false" data-loop="false" data-margin="30">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2177px;">
                                    <div class="owl-item active" style="width: 405.333px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="pq-service-box pq-style-1">
                                                <div class="pq-service-box-img">
                                                    <img decoding="async"
                                                        src="{{ static_asset('front-assets/assets/images/strab.png') }}"
                                                        alt="service-image">
                                                </div>
                                                <div class="pq-service-box-info">
                                                    <h5 class="pq-service-box-title">Strabismus</h5>
                                                    <p class="pq-service-box-description">Squint is another term for
                                                        “strabismus,” a condition where the eyes are not aligned properly.
                                                        It causes one eye to look in a different direction</p>
                                                    <div class="pq-btn-container">
                                                        <a class="pq-button pq-button-link" href="https://drmedhasharma.com/strabismus">
                                                            <div class="pq-button-block">
                                                                <i class="ion-plus-round "></i>
                                                                <span class="pq-button-text">read more</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 405.333px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="pq-service-box pq-style-1">
                                                <div class="pq-service-box-img">
                                                    <img decoding="async"
                                                        src="{{ static_asset('front-assets/assets/images/cornea.png') }}"
                                                        alt="service-image">
                                                </div>
                                                <div class="pq-service-box-info">
                                                    <h5 class="pq-service-box-title">Cornea</h5>
                                                    <p class="pq-service-box-description">Pterygium is a growth of pink,
                                                        fleshy tissue on the conjunctiva, the clear tissue that lines the
                                                        eyelids and covers the white part of the eye</p>
                                                    <div class="pq-btn-container">
                                                        <a class="pq-button pq-button-link" href="https://drmedhasharma.com/cornea-specialist-dubai">
                                                            <div class="pq-button-block">
                                                                <i class="ion-plus-round "></i>
                                                                <span class="pq-button-text">read more</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 405.333px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="pq-service-box pq-style-1">
                                                <div class="pq-service-box-img">
                                                    <img decoding="async"
                                                        src="{{ static_asset('front-assets/assets/images/eye.png') }}"
                                                        alt="service-image">
                                                </div>
                                                <div class="pq-service-box-info">
                                                    <h5 class="pq-service-box-title">Eyelid Surgery</h5>
                                                    <p class="pq-service-box-description">A chalazion is a cyst on the
                                                        eyelid caused by the blockage of a meibomian gland. It usually
                                                        presents as a painless lump or swelling on</p>
                                                    <div class="pq-btn-container">
                                                        <a class="pq-button pq-button-link" href="https://drmedhasharma.com/eyelid-surgery">
                                                            <div class="pq-button-block">
                                                                <i class="ion-plus-round "></i>
                                                                <span class="pq-button-text">read more</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 405.333px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="pq-service-box pq-style-1">
                                                <div class="pq-service-box-img">
                                                    <img decoding="async"
                                                        src="{{ static_asset('front-assets/assets/images/cata.png') }}"
                                                        alt="service-image">
                                                </div>
                                                <div class="pq-service-box-info">
                                                    <h5 class="pq-service-box-title">Cataract</h5>
                                                    <p class="pq-service-box-description">Pediatric cataract refers to a
                                                        clouding of the lens in a child’s eye, which can impair vision. It
                                                        can affect one (unilateral) or both (bilateral) eyes</p>
                                                    <div class="pq-btn-container">
                                                        <a class="pq-button pq-button-link" href="https://drmedhasharma.com/cataract-surgery">
                                                            <div class="pq-button-block">
                                                                <i class="ion-plus-round "></i>
                                                                <span class="pq-button-text">read more</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 405.333px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="pq-service-box pq-style-1">
                                                <div class="pq-service-box-img">
                                                    <img decoding="async"
                                                        src="{{ static_asset('front-assets/assets/images/nasol.png') }}"
                                                        alt="service-image">
                                                </div>
                                                <div class="pq-service-box-info">
                                                    <h5 class="pq-service-box-title">Nasolacrimal Duct Obstruction</h5>
                                                    <p class="pq-service-box-description">Pediatric nasolacrimal duct
                                                        obstruction (NLDO) is a common condition in infants where there is
                                                        an obstruction or narrowing in the nasolacrimal</p>
                                                    <div class="pq-btn-container">
                                                        <a class="pq-button pq-button-link"
                                                            href="https://drmedhasharma.com/nasolacrimal-duct-obstruction">
                                                            <div class="pq-button-block">
                                                                <i class="ion-plus-round "></i>
                                                                <span class="pq-button-text">read more</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                        class="ion-ios-arrow-back"></i><span></span></button><button type="button"
                                    role="presentation" class="owl-next"><span></span><i
                                        class="ion-ios-arrow-forward"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!---Our Service-->

    <!--Testimonials-->

    <section class="testimonial pq-bg-grey pq-bg-img-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="pq-sticky-top">
                        <div class="pq-section-title pq-style-1">
                            <h5 class="pq-section-main-title text-center mb-5">What our client say about us</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="pq-testimonial-box-slider pq-style-6">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                            data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1"
                            data-autoplay="false" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-testimonial pq-style-6">
                                    <div class="pq-testimonial-content">
                                        <div class="pq-testimonial-content-top">
                                            <div class="pq-testimonial-icon">
                                                <i class="ion ion-quote"></i>
                                            </div>
                                            <div class="pq-testimonial-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="pq-testimonial-info">
                                            <p class="pq-testimonial-description">We are extremely grateful to Dr. Medha and her entire team for the excellent care given to our son during his squint surgery. Doctor explained everything clearly, made us feel comfortable, and the results have been excellent. We wholeheartedly recommend Dr. Medha to any parent looking for a skilled and caring specialist. Truly grateful for her care🙏</p>
                                            <div class="pq-testimonial-img">
                                                <img decoding="async" src="{{ static_asset('front-assets/assets/images/test/dummy-man.png') }}"
                                                    alt="img">
                                            </div>
                                            <div class="pq-testimonial-meta">
                                                <h5 class="pq-testmonial-title">Ratish Menon</h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial pq-style-6">
                                    <div class="pq-testimonial-content">
                                        <div class="pq-testimonial-content-top">
                                            <div class="pq-testimonial-icon">
                                                <i class="ion ion-quote"></i>
                                            </div>
                                            <div class="pq-testimonial-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="pq-testimonial-info">
                                            <p class="pq-testimonial-description">Our experience with Dr. Medha sharma was very much satisfying, my daughter is 5.5yrs old undergone squint suregery at NMC DIP.
Doctor have guided us all through the proceedure, this was much needed suregery and i would recommend to all parents who's kids suffering from squint or vision related matter must consult Dr. Medha sharma</p>
                                            <div class="pq-testimonial-img">
                                                <img decoding="async" src="{{ static_asset('front-assets/assets/images/test/dummy-man.png') }}"
                                                    alt="img">
                                            </div>
                                            <div class="pq-testimonial-meta">
                                                <h5 class="pq-testmonial-title">Mohammed Anees</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonials End-->

    <!--- Contact Info ----->

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pq-section-title pq-style-1">
                        <h5 class="pq-section-main-title text-center mb-5">Contact us</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="pq-icon-box pq-style-2">
                        <div class="pq-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="pq-icon-box-content">
    <h5 class="pq-icon-box-title">Phone Number</h5>
    <p class="pq-icon-box-description">
        <a href="tel:+971527801583">+971 527801583</a>
    </p>
</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="pq-icon-box pq-style-2">
                        <div class="pq-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                      <div class="pq-icon-box-content">
    <h5 class="pq-icon-box-title">Email ID</h5>
    <p class="pq-icon-box-description">
        <!--email_off-->
        <a href="mailto:info@drmedhasharma.com">info@drmedhasharma.com</a>
        <!--/email_off-->
    </p>
</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="pq-icon-box pq-style-2">
                        <div class="pq-icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h5 class="pq-icon-box-title">We Reached Here</h5>

                            <p class="pq-icon-box-description">NMC Royal Hospital Plot no # 598 - 122 - behind Falcon House - Dubai Investment Park First - Green Community Village - Dubai - United Arab Emirates
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---- COntact Info ----->

    <!--faq-->
    <section class="faq">
        <div class="container">
            <div class="row pq-white-bg">
                <div class="col-xl-6">
                    <div class="pq-section-title pq-style-1">
                        <span class="pq-section-sub-title">faq's</span>
                        <h5 class="pq-section-main-title">frequently asked that quations</h5>
                    </div>
                    <div class="pq-accordion-block ">
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box 1 pq-active">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                        01.What are the signs of poor vision in my child?
                                        <i aria-hidden="true" class="ion ion-chevron-up active"></i>
                                        <i aria-hidden="true" class="ion ion-chevron-down inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details" style="">
                                    <p class="pq-detail-text strong"> Frequent squinting, eye rubbing, sitting too close to
                                        screens, or difficulty seeing distant objects may indicate poor vision in a child.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pq-accordion-block">
                            <div class="pq-accordion-box 2">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                        02. How frequently does my child need an eye examination?
                                        <i aria-hidden="true" class="ion ion-chevron-up active"></i>
                                        <i aria-hidden="true" class="ion ion-chevron-down inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details" style="display: none;">
                                    <p class="pq-detail-text">Children should have a comprehensive eye examination at least
                                        once a year, or as recommended by an eye specialist.
                                        Regular check-ups help detect vision problems early and support proper visual
                                        development.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box 3">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                        03.What can I do to promote overall eye health?
                                        <i aria-hidden="true" class="ion ion-chevron-up active"></i>
                                        <i aria-hidden="true" class="ion ion-chevron-down inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details" style="display: none;">
                                    <p class="pq-detail-text"> Encourage a balanced diet rich in fruits and vegetables,
                                        ensure proper lighting while reading, and limit screen time.
                                        Regular eye check-ups also help in early detection and prevention of vision
                                        problems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pq-accordion-block ">
                            <div class="pq-accordion-box 4">
                                <div class="pq-ad-title">
                                    <h4 class="ad-title-text">
                                        04. Why are frequent eye check up required?
                                        <i aria-hidden="true" class="ion ion-chevron-up active"></i>
                                        <i aria-hidden="true" class="ion ion-chevron-down inactive"></i>
                                    </h4>
                                </div>
                                <div class="pq-accordion-details" style="display: none;">
                                    <p class="pq-detail-text"> Frequent eye check-ups help detect vision problems early and
                                        prevent long-term eye damage.
                                        They ensure your child’s eyes are developing properly and their vision stays
                                        healthy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 pq-ps-30">
                    <div class="pq-contact-form-div" style="background-color: #cb0000;">
                        <form class="pq-contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Subject">
                                </div>
                                <div class="col-lg-12">
                                    <textarea id="message" cols="40" rows="10" placeholder="Message.."></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#" class="pq-button pq-button-flat">submit message</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14463.585131726575!2d55.154545!3d25.00364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6d3a9bdabeeb%3A0x3b3e2bff34dd8fb4!2sDr.%20Medha%20Sharma%20%7C%20Vision%204%20children%20%7C%20Ophthalmologist%20%7C%20Pediatric%20Ophthalmologist!5e0!3m2!1sen!2sin!4v1762597315400!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!--<section class="three-column-blog">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-xl-12">-->
    <!--                <div class="pq-section-title pq-style-1">-->
    <!--                    <h5 class="pq-section-main-title text-center mb-5">Our Blog </h5>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="pq-blog pq-blog-col-3">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-4">-->
    <!--                            <div class="pq-blog-post">-->
    <!--                                <div class="pq-post-media">-->
    <!--                                    <img decoding="async" src="images/blog/column/1.jpg" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="pq-blog-contain">-->
    <!--                                    <div class="pq-post-category">-->
    <!--                                        <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">Eye-->
    <!--                                            Care</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="pq-post-meta">-->
    <!--                                        <ul>-->
    <!--                                            <li class="pq-post-meta">-->
    <!--                                                <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">December-->
    <!--                                                    23, 2022</a>-->
    <!--                                            </li>-->
    <!--                                            <li class="pq-post-comment">-->
    <!--                                                <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">1-->
    <!--                                                    Comment</a>-->
    <!--                                            </li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <h5 class="pq-blog-title">-->
    <!--                                        <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">Regular-->
    <!--                                            Eye check up, We can Help Vision on High Level</a>-->
    <!--                                    </h5>-->
    <!--                                    <p>It is a long established fact that a reader will be distracted by the readable-->
    <!--                                        content of a page when looking at its layout.</p>-->
    <!--                                    <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html"-->
    <!--                                        class="pq-button pq-button-flat">-->
    <!--                                        <div class="pq-button-block">-->
    <!--                                            <i class="ion ion-plus-round"></i>-->
    <!--                                            <span class="pq-button-text">read more</span>-->
    <!--                                        </div>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-4">-->
    <!--                            <div class="pq-blog-post">-->
    <!--                                <div class="pq-post-media">-->
    <!--                                    <img decoding="async" src="images/blog/column/2.jpg" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="pq-blog-contain">-->
    <!--                                    <div class="pq-post-category">-->
    <!--                                        <a-->
    <!--                                            href="regular-eye-check-up-we-can-help-vision-on-high-level.html">Insight</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="pq-post-meta">-->
    <!--                                        <ul>-->
    <!--                                            <li class="pq-post-meta">-->
    <!--                                                <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">November-->
    <!--                                                    23, 2022</a>-->
    <!--                                            </li>-->
    <!--                                            <li class="pq-post-comment">-->
    <!--                                                <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">0-->
    <!--                                                    Comments</a>-->
    <!--                                            </li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <h5 class="pq-blog-title">-->
    <!--                                        <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">Put on-->
    <!--                                            sunglasses on and save your ultra-violate rays.</a>-->
    <!--                                    </h5>-->
    <!--                                    <p>It is a long established fact that a reader will be distracted by the readable-->
    <!--                                        content of a page when looking at its layout.</p>-->
    <!--                                    <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html"-->
    <!--                                        class="pq-button pq-button-flat">-->
    <!--                                        <div class="pq-button-block">-->
    <!--                                            <i class="ion ion-plus-round"></i>-->
    <!--                                            <span class="pq-button-text">read more</span>-->
    <!--                                        </div>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-4">-->
    <!--                            <div class="pq-blog-post">-->
    <!--                                <div class="pq-post-media">-->
    <!--                                    <img decoding="async" src="images/blog/column/3.jpg" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="pq-blog-contain">-->
    <!--                                    <div class="pq-post-category">-->
    <!--                                        <a-->
    <!--                                            href="regular-eye-check-up-we-can-help-vision-on-high-level.html">Insight</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="pq-post-meta">-->
    <!--                                        <ul>-->
    <!--                                            <li class="pq-post-meta">-->
    <!--                                                <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">November-->
    <!--                                                    23, 2022</a>-->
    <!--                                            </li>-->
    <!--                                            <li class="pq-post-comment">-->
    <!--                                                <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">0-->
    <!--                                                    Comments</a>-->
    <!--                                            </li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <h5 class="pq-blog-title">-->
    <!--                                        <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html">If your-->
    <!--                                            vision is clear then you will see your goal and beter future.</a>-->
    <!--                                    </h5>-->
    <!--                                    <p>It is a long established fact that a reader will be distracted by the readable-->
    <!--                                        content of a page when looking at its layout.</p>-->
    <!--                                    <a href="regular-eye-check-up-we-can-help-vision-on-high-level.html"-->
    <!--                                        class="pq-button pq-button-flat">-->
    <!--                                        <div class="pq-button-block">-->
    <!--                                            <i class="ion ion-plus-round"></i>-->
    <!--                                            <span class="pq-button-text">read more</span>-->
    <!--                                        </div>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->





@endsection
