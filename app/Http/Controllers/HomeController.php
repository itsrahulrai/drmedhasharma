<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ProductBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->take(3)->get();
        $categories = Category::withCount('blogs')->get();
        return view('frontend.index', compact('blogs', 'categories'));
    }

    public function blog()
    {
        $blogs = Blog::with('category')->latest()->paginate(6);
        $categories = Category::withCount('blogs')->get();
        return view('frontend.blog', compact('blogs', 'categories'));
    }

    public function show($slug)
    {
        $blog = Blog::with('category')->where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::latest()->take(3)->get();
        $categories = Category::withCount('blogs')->get();
        return view('frontend.blog-detials', compact('blog', 'recentBlogs', 'categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $blogs = Blog::with('category')->where('category_id', $category->id)->latest()->paginate(6);
        $categories = Category::withCount('blogs')->get();
        return view('frontend.blog', compact('blogs', 'categories', 'category'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
            'accepted_terms' => 'accepted'
        ]);

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'accepted_terms' => true,
        ]);
        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }

    public function productsubmit(Request $request)
    {
        // dd($request->all());
        // exit;

        $validated = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'email',
            'phone' => 'required|digits:10',
            'product' => 'required|string',
            'message' => 'nullable|string|max:500',
        ]);
        ProductBooking::create($validated);

        return back()->with('success', 'Your product booking request has been submitted successfully!');
    }


        public function sendContact(Request $request)
        {
            $validated = $request->validate([
                'name'    => 'required|string|max:255',
                'email'   => 'required|email',
                'phone'   => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'nullable|string|max:5000',
            ]);
        
            // Basic script tag protection
            if (preg_match('/<\s*script/i', $request->subject . $request->message)) {
                return back()->with('error', 'Invalid input detected.');
            }
        
            $name    = e($validated['name']);
            $email   = e($validated['email']);
            $phone   = e($validated['phone']);
            $subjectLine = e($validated['subject']);
            $messageText = nl2br(e($validated['message'] ?? 'No message provided.'));
        
            $toEmail = "drmedhasharma1@gmail.com";
        
            $html = '
            <div style="font-family: Arial, sans-serif; max-width:650px; margin:auto; border:1px solid #e5e5e5; border-radius:10px;">
                <div style="background:#081016; padding:20px; color:#fff; text-align:center;">
                    <h2>New Contact Enquiry</h2>
                </div>
        
                <div style="padding:25px; background:#f9f9f9;">
                    <table style="width:100%; border-collapse:collapse;">
                        <tr><td style="padding:8px 0; width:30%;"><b>Name:</b></td><td>'.$name.'</td></tr>
                        <tr><td style="padding:8px 0;"><b>Email:</b></td><td>'.$email.'</td></tr>
                        <tr><td style="padding:8px 0;"><b>Phone:</b></td><td>'.$phone.'</td></tr>
                        <tr><td style="padding:8px 0;"><b>Subject:</b></td><td>'.$subjectLine.'</td></tr>
                        <tr><td style="padding:8px 0; vertical-align:top;"><b>Message:</b></td><td>'.$messageText.'</td></tr>
                    </table>
                </div>
        
                <div style="padding:15px; text-align:center;">
                    <a href="mailto:'.$email.'"
                       style="background:#081016;color:#fff;padding:10px 25px;border-radius:5px;text-decoration:none;">
                       Reply to User
                    </a>
                </div>
        
                <div style="background:#081016;color:#fff;text-align:center;padding:10px;font-size:13px;">
                    © '.date('Y').' Dr. Medha Sharma. All rights reserved.
                </div>
            </div>';
        
            try {
                Mail::html($html, function ($message) use ($toEmail, $email, $name, $subjectLine) {
                    $message->to($toEmail)
                        ->subject('Website Enquiry: '.$subjectLine.' — '.$name)
                        ->replyTo($email, $name);
                });
        
                return redirect()->route('thank.you')->with('success', 'Message sent successfully.');
            } catch (\Exception $e) {
                return back()->with('error', 'Mail sending failed. Please try again later.');
            }
        }



}
