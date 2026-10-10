@extends('frontend.layout.app')
@section('title', 'Eye Care Blog | Dr. Medha Sharma | Vision 4 Children')
@section('meta_description', 'Explore expert eye care insights by Dr. Medha Sharma, with helpful articles on eye health, vision, conditions, treatments, and practical eye care.')
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
                                Blog </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Blog</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <section class="three-column-blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pq-section-title pq-style-1">
                        <h5 class="pq-section-main-title text-center mb-5">Our Blog </h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-blog pq-blog-col-3">
                        <div class="row">
                            @forelse ($blogs as $blog)
                                <div class="col-lg-4">
                                    <div class="pq-blog-post">
                                        <div class="pq-post-media">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">
                                                <img decoding="async" src="{{ asset('public/uploads/blogs/'.$blog->image) }}"
                                                    alt="{{ $blog->title }}">
                                            </a>
                                        </div>

                                        <div class="pq-blog-contain">
                                            <div class="pq-post-category">
                                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                                    {{ $blog->category->name ?? 'Uncategorized' }}
                                                </a>
                                            </div>

                                            <div class="pq-post-meta">
                                                <ul>
                                                    <li class="pq-post-meta">
                                                        <a href="{{ route('blog.detail', $blog->slug) }}">
                                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <h5 class="pq-blog-title">
                                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                                    {{ $blog->title }}
                                                </a>
                                            </h5>

                                            <p>{{ Str::limit(strip_tags($blog->content), 100, '...') }}</p>

                                            <a href="{{ route('blog.detail', $blog->slug) }}"
                                                class="pq-button pq-button-flat">
                                                <div class="pq-button-block">
                                                    <i class="ion ion-plus-round"></i>
                                                    <span class="pq-button-text">Read More</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center">
                                    <p>No blogs found.</p>
                                </div>
                            @endforelse
                        </div>

                        @if ($blogs->hasPages())
                            <div class="row mt-5">
                                <div class="col-12 d-flex justify-content-center">
                                    {{ $blogs->links() }}
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
