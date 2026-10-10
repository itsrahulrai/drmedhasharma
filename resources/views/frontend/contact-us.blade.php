@extends('frontend.layout.app')
@section('title', 'Contact Us | Vision 4 Children | Dr. Medha Sharma')
@section('meta_description', 'Contact Vision 4 Children to learn more about our services, clinic, appointments, and how to reach Dr. Medha Sharma and our team.')
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
                                Contact us </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Contact us</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pq-contact-box active">
                        <div class="pq-contact-box-media">
                            <div class="pq-contact-box-icon">
                                <i class="ion ion-android-call"></i>
                            </div>
                            <div class="pq-contact-box-media-content">
                                <h4 class="pq-contact-box-media-title">call us anytime</h4>
                                <p class="pq-contact-box-media-description">phone number</p>
                            </div>
                        </div>
                        <div class="pq-contact-box-content">
                            <p class="pq-contact-box-description">
                              Phone No :
                              <a href="tel:+971527801583" class="hover:text-white transition-colors duration-300">
                                +971 527801583
                              </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">-->
                <!--    <div class="pq-contact-box">-->
                <!--        <div class="pq-contact-box-media">-->
                <!--            <div class="pq-contact-box-icon">-->
                <!--                <i class="ti-envelope"></i>-->
                <!--            </div>-->
                <!--            <div class="pq-contact-box-media-content">-->
                <!--                <h4 class="pq-contact-box-media-title">our location</h4>-->
                <!--                <p class="pq-contact-box-media-description">our location</p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="pq-contact-box-content">-->
                <!--            <p class="pq-contact-box-description">The Queen's Walk, Bishop's, London SE1 7PB, United Kingdom-->
                <!--            </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-contact-box">
                        <div class="pq-contact-box-media">
                            <div class="pq-contact-box-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="pq-contact-box-media-content">
                                <h4 class="pq-contact-box-media-title">our location</h4>
                                <p class="pq-contact-box-media-description">our location</p>
                            </div>
                        </div>
                        <div class="pq-contact-box-content">
                            <p class="pq-contact-box-description">NMC Royal Hospital Plot no # 598 - 122 - behind Falcon House - Dubai Investment Park First - Green Community Village - Dubai - United Arab Emirates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->

    <section class="contact-form pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 pq-pe-90">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <span class="pq-section-sub-title">LET'S TALK</span>
                        <h5 class="pq-section-main-title">Contact Us &amp; Get In here Touch !</h5>
                        <p class="pq-section-description"></p>
                    </div>
                    <div class="pq-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.916280268326!2d55.151577110599675!3d25.00296057774409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6d3a9bdabeeb%3A0x3b3e2bff34dd8fb4!2sDr.%20Medha%20Sharma%20%7C%20Vision%204%20children%20%7C%20Ophthalmologist%20%7C%20Pediatric%20Ophthalmologist!5e0!3m2!1sen!2sin!4v1788247549596!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
                <div class="col-xl-5 mt-4 mt-xl-0 p-xl-0">
                    <div class="pq-contact-form-div">
                      <form action="{{ route('contact.store') }}" method="POST" class="pq-contact-form" id="contactForm">
                            @csrf
                            <div class="row">
                            
                                <div class="col-lg-12">
                                    <input type="text" name="name" id="name" placeholder="Name" required>
                                    <small class="text-danger" id="nameError"></small>
                                </div>
                            
                                <div class="col-lg-12">
                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                    <small class="text-danger" id="emailError"></small>
                                </div>
                            
                                <div class="col-lg-6">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                                    <small class="text-danger" id="phoneError"></small>
                                </div>
                            
                                <div class="col-lg-6">
                                    <input type="text" name="subject" id="subject" placeholder="Your Subject" required>
                                    <small class="text-danger" id="subjectError"></small>
                                </div>
                            
                                <div class="col-lg-12">
                                    <textarea name="message" id="message" rows="6" placeholder="Message.." required></textarea>
                                    <small class="text-danger" id="messageError"></small>
                                </div>
                            
                                <div class="col-lg-12">
                                    <button type="submit" class="pq-button pq-button-flat">Submit Message</button>
                                </div>
                            
                            </div>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('script')
<script>
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("contactForm");

    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");

    function hasScript(value) {
        return /<\s*script/i.test(value);
    }

    function validateName() {
        const val = name.value.trim();
        if (!/^[A-Za-z\s]+$/.test(val)) {
            nameError.innerText = "Only letters and spaces allowed";
            return false;
        }
        nameError.innerText = "";
        return true;
    }

    function validateEmail() {
        const val = email.value.trim();
        const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!pattern.test(val)) {
            emailError.innerText = "Enter valid email address";
            return false;
        }
        emailError.innerText = "";
        return true;
    }

    function validatePhone() {
        const val = phone.value.trim();
        if (!/^\d{10}$/.test(val)) {
            phoneError.innerText = "Enter 10 digit mobile number";
            return false;
        }
        phoneError.innerText = "";
        return true;
    }

    function validateSubject() {
        if (subject.value.trim() === "") {
            subjectError.innerText = "Subject is required";
            return false;
        }
        if (hasScript(subject.value)) {
            subjectError.innerText = "Invalid input detected";
            return false;
        }
        subjectError.innerText = "";
        return true;
    }

    function validateMessage() {
        if (message.value.trim() === "") {
            messageError.innerText = "Message is required";
            return false;
        }
        if (hasScript(message.value)) {
            messageError.innerText = "Invalid input detected";
            return false;
        }
        messageError.innerText = "";
        return true;
    }

    // Live validation
    name.addEventListener("input", validateName);
    email.addEventListener("input", validateEmail);
    phone.addEventListener("input", validatePhone);
    subject.addEventListener("input", validateSubject);
    message.addEventListener("input", validateMessage);

    // On submit
    form.addEventListener("submit", function (e) {
        if (
            !validateName() |
            !validateEmail() |
            !validatePhone() |
            !validateSubject() |
            !validateMessage()
        ) {
            e.preventDefault();
        }
    });

});
</script>
@endpush


