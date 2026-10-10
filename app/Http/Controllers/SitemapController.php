<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $staticRoutes = [
            ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('contact'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('blog'), 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => now()->toAtomString()],
            ['url' => route('image-gallery'), 'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('video-gallery'), 'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            
            // Service Pages
            ['url' => route('strabismus'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('eyelid-surgery'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('cataract-surgery'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('nasolacrimal-duct-obstruction'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('glaucoma'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('dry-eyes'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('computer-vision-syndrome'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('adult-eye-checkup-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('amblyopia-treatment-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('pediatric-ophthalmologist-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('cornea-specialist-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('eye-specialist-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('eye-specialist-for-kids-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('eye-specialist-doctor-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('keratoconus-treatment-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('lazy-eye-treatment-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
            ['url' => route('squint-specialist-in-dubai'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => now()->startOfMonth()->toAtomString()],
        ];

        $blogs = Blog::where('status', 1)->latest('updated_at')->get();
        $categories = Category::where('status', 1)->latest('updated_at')->get();

        return response()
            ->view('sitemap', compact('staticRoutes', 'blogs', 'categories'))
            ->header('Content-Type', 'text/xml; charset=utf-8');
    }
}

