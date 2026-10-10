@extends('frontend.layout.app')
@section('title', 'Thank You - Dr Medha Sharma | Eye Specialist Dubai')
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
                            <h1>
                                Thank You </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Thank You</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->



<section class="pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="text-center p-5 bg-white shadow rounded">

                    <i class="fas fa-check-circle text-success mb-4" style="font-size:70px;"></i>

                    <h2 class="mb-3">Thank You</h2>

                    <p class="mb-4">
                        Your message has been successfully submitted.  
                        Our team will review your enquiry and get back to you as soon as possible.
                    </p>


                    <a href="{{ route('home') }}" class="pq-button pq-button-flat">
                        Back to Home
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>






@endsection
