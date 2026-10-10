@extends('frontend.layout.app')

@section('title', $blog->meta_title ?? $blog->title)
@section('meta_description', $blog->meta_description ?? Str::limit(strip_tags($blog->content), 160))
@section('meta_robots', $blog->robots ?? 'index, follow')
@section('canonical', $blog->canonical_url ?? url()->current())
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
                                {{ $blog->title }} </h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">{{ $blog->title }}</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <section class="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img decoding="async" src="{{ asset('public/uploads/blogs/' . $blog->image) }}"
                                alt="{{ $blog->title }}">
                        </div>
                        <div class="pq-blog-contain">
                            <div class="pq-post-category">
                                <a href=""> {{ $blog->category->name ?? 'Uncategorized' }}</a>
                            </div>
                            <div class="pq-post-meta">
                                <ul>
                                    <li class="pq-post-meta">
                                        {{ $blog->created_at->format('d F, Y') }}
                                    </li>
                                </ul>
                            </div>
                            <h2>{{ $blog->title }}</h2>
                            <p>{!! $blog->content !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget widget_block">
                            <div class="wp-block-group is-layout-constrained">
                                <div class="wp-block-group__inner-container">
                                    <h3 class="wp-block-heading">Categories</h3>
                                    <ul class="wp-block-categories-list wp-block-categories">
                                        @foreach ($categories as $category)
                                        <li class="cat-item cat-item-43">
                                            <a href="javascript:void(0)"> {{ $category->name }}</a> <span>({{ $category->blogs_count }})</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
