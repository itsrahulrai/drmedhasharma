@extends('frontend.layout.app')
@section('title', 'Video Gallery | Dr. Medha Sharma | Vision 4 Children')
@section('meta_description', 'Watch videos from Dr. Medha Sharma and Vision 4 Children featuring helpful information, expert insights, and educational content about eye care.')
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
                                Video Gallery  </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Video Gallery </li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->







@endsection
