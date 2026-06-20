<?php
 
namespace App\Http\Controllers;
 
use App\Models\Post;
use Illuminate\Http\Request;
 
class PageController extends Controller
{
    public function home()
    {
        $latestPosts = Post::published()->latest('published_at')->take(3)->get();
        return view('home', compact('latestPosts'));
    }
 
    public function about()
    {
        return view('about');
    }
 
    public function services()
    {
        return view('services');
    }
 
    public function faqs()
    {
        return view('faqs');
    }
 
    public function contact()
    {
        return view('contact');
    }
 
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['required', 'string', 'max:20'],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);
 
        // TODO: send mail / save to DB / WhatsApp API webhook
        // Mail::to('ritestaxandlegalconsultant@gmail.com')->send(new ContactEnquiry($validated));
 
        return back()->with('success', 'Thank you! Your enquiry has been received. Our team will contact you shortly.');
    }
}