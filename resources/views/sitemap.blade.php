{!! '<'.'?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Static Pages --}}
    @foreach ($staticRoutes as $route)
        <url>
            <loc>{{ $route['url'] }}</loc>
            <lastmod>{{ $route['lastmod'] }}</lastmod>
            <changefreq>{{ $route['changefreq'] }}</changefreq>
            <priority>{{ $route['priority'] }}</priority>
        </url>
    @endforeach

    {{-- Blog Categories --}}
    @foreach ($categories as $cat)
        <url>
            <loc>{{ route('blog.category', $cat->slug) }}</loc>
            <lastmod>{{ $cat->updated_at ? $cat->updated_at->toAtomString() : now()->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach

    {{-- Dynamic Blog Posts --}}
    @foreach ($blogs as $blog)
        <url>
            <loc>{{ route('blog.detail', $blog->slug) }}</loc>
            <lastmod>{{ $blog->updated_at ? $blog->updated_at->toAtomString() : now()->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>

