<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->paginate(10);
        $categories = Category::all();
        return view('profile.blog.blog', compact('blogs', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('profile.blog.add-blog', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:blogs,slug',
            'category_id'      => 'required|exists:categories,id',
            'content'          => 'required',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'canonical_url'    => 'nullable|url',
            'robots'           => 'nullable|string|max:50',
            'status'           => 'required|boolean',
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'title'            => $request->title,
            'slug'             => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'category_id'      => $request->category_id,
            'content'          => $request->content,
            'image'            => $imagePath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url'    => $request->canonical_url,
            'robots'           => $request->robots ?? 'index, follow',
            'status'           => $request->status,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {


        $blog = Blog::findOrFail($id);
        //  dd($blog);
        // exit;
        $blogs = Blog::with('category')->latest()->get();
        $categories = Category::all();
        return view('profile.blog.add-blog', compact('blog', 'blogs', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:blogs,slug,' . $blog->id,
            'category_id'      => 'required|exists:categories,id',
            'content'          => 'required',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'canonical_url'    => 'nullable|url',
            'robots'           => 'nullable|string|max:50',
            'status'           => 'required|boolean',
        ]);

            $imagePath = $blog->image;

            if ($request->hasFile('image')) {
                // Purani image delete karein (agar ho to)
                if ($blog->image && file_exists(public_path('uploads/blogs/' . $blog->image))) {
                    unlink(public_path('uploads/blogs/' . $blog->image));
                }
                $imageName = time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('uploads/blogs'), $imageName);
                $imagePath = $imageName;
            }


        $blog->update([
            'title'            => $request->title,
            'slug'             => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'category_id'      => $request->category_id,
            'content'          => $request->content,
            'image'            => $imagePath,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'canonical_url'    => $request->canonical_url,
            'robots'           => $request->robots ?? 'index, follow',
            'status'           => $request->status,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
