@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-16 lg:py-20 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <p class="section-label"><span class="w-6 h-px bg-rtc-gold"></span> Welcome to RTC</p>
            <h1 class="font-heading text-4xl md:text-5xl font-extrabold leading-tight text-rtc-navy">
                Tax &amp; Legal<br>Expertise<br>
                <span class="text-rtc-gold">You Can Trust</span>
            </h1>
            <p class="mt-5 text-rtc-gray max-w-md">
                Smart solutions to simplify your taxes and legal compliances, so you can focus on your growth.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="tel:+919630690069" class="btn-navy">Call Now</a>
                <a href="https://wa.me/919630690069" target="_blank" class="btn-gold">WhatsApp Us</a>
                <a href="{{ route('contact') }}" class="btn-outline">Book Consultation</a>
            </div>
            <div class="mt-10 flex flex-wrap gap-6 text-sm text-rtc-navy/80 font-medium">
                <span>🛡️ Trusted Advisory</span>
                <span>🎯 Accurate Solutions</span>
                <span>⏱️ Timely Compliance</span>
                <span>📈 Your Growth, Our Priority</span>
            </div>
        </div>
        <div class="bg-rtc-cream rounded-2xl h-80 lg:h-96 flex items-center justify-center text-rtc-gray text-sm">
            [ Hero Image Placeholder ]
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">Our Services</p>
        <h2 class="section-heading">Comprehensive Solutions for<br>Your Business &amp; Personal Needs</h2>

        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $services = [
                    ['title' => 'Income Tax Returns (ITR) Filing', 'desc' => 'Accurate and timely filing of your income tax returns.'],
                    ['title' => 'GST Registration & Returns', 'desc' => 'GST registration, returns filing & compliance made simple.'],
                    ['title' => 'TDS Compliance', 'desc' => 'TDS registration, returns filing & compliance with accuracy.'],
                    ['title' => 'Accounting & Bookkeeping', 'desc' => 'Professional accounting services to keep your records accurate.'],
                    ['title' => 'MSME Registration', 'desc' => 'MSME registration and benefits to grow your business.'],
                    ['title' => 'Business Registration Services', 'desc' => 'Private Limited, LLP, Partnership firm & other registrations.'],
                ];
            @endphp
            @foreach ($services as $service)
                <div class="border border-gray-100 rounded-xl p-6 text-left hover:shadow-lg hover:border-rtc-gold/40 transition">
                    <div class="w-12 h-12 rounded-lg bg-rtc-cream flex items-center justify-center text-rtc-gold mb-4">📄</div>
                    <h3 class="font-heading font-bold text-lg text-rtc-navy">{{ $service['title'] }}</h3>
                    <p class="text-sm text-rtc-gray mt-2">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <a href="{{ route('services') }}" class="btn-navy mt-10">View All Services
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>

{{-- ABOUT TEASER --}}
<section class="bg-rtc-cream py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-12 items-center">
        <div class="bg-white/50 rounded-2xl h-80 flex items-center justify-center text-rtc-gray text-sm">
            [ About Image Placeholder ]
        </div>
        <div>
            <p class="section-label">About Us</p>
            <h2 class="section-heading">Your Trusted Partner in<br>Tax &amp; Legal Compliance</h2>
            <p class="mt-4 text-rtc-gray">
                At Ritesh Tax &amp; Legal Consultant, we are committed to providing reliable, transparent and result-oriented
                tax and legal solutions. Our mission is to simplify complex processes and help individuals and
                businesses achieve financial growth with complete peace of mind.
            </p>

            <div class="mt-6 grid sm:grid-cols-1 gap-4">
                @foreach ([
                    ['title' => 'Expert Guidance', 'desc' => 'Experienced professionals with in-depth knowledge.'],
                    ['title' => 'Client Focused', 'desc' => 'Personalized solutions tailored to your specific needs.'],
                    ['title' => 'Confidential & Secure', 'desc' => 'Your data and information are always protected.'],
                ] as $point)
                    <div class="flex gap-3">
                        <span class="w-9 h-9 rounded-full bg-rtc-gold/15 text-rtc-gold flex items-center justify-center shrink-0">✓</span>
                        <div>
                            <h4 class="font-semibold text-rtc-navy">{{ $point['title'] }}</h4>
                            <p class="text-sm text-rtc-gray">{{ $point['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <a href="{{ route('about') }}" class="btn-outline mt-6">Know More About Us
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- HOW WE WORK + WHY CHOOSE US --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-12">
        <div>
            <p class="section-label">How We Work</p>
            <h2 class="font-heading text-2xl font-bold text-rtc-navy mb-8">Our Simple &amp; Transparent Process</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                @foreach ([
                    ['n' => '1', 't' => 'Contact Us', 'd' => 'Reach out to us via call, WhatsApp or email.'],
                    ['n' => '2', 't' => 'Share Documents', 'd' => 'Share your documents securely with us.'],
                    ['n' => '3', 't' => 'Expert Review', 'd' => 'Our experts review and analyze your details.'],
                    ['n' => '4', 't' => 'Timely Compliance', 'd' => 'We ensure accurate filing and timely compliance.'],
                ] as $step)
                    <div>
                        <div class="w-12 h-12 mx-auto rounded-full bg-rtc-navy text-rtc-gold font-bold flex items-center justify-center">{{ $step['n'] }}</div>
                        <h4 class="mt-3 font-semibold text-sm text-rtc-navy">{{ $step['t'] }}</h4>
                        <p class="text-xs text-rtc-gray mt-1">{{ $step['d'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <p class="section-label">Why Choose Us?</p>
            <div class="grid grid-cols-2 gap-4 mt-2">
                @foreach ([
                    ['v' => '100%', 'l' => 'Accurate & Reliable'],
                    ['v' => 'On-Time', 'l' => 'Compliance'],
                    ['v' => '500+', 'l' => 'Happy Clients'],
                    ['v' => 'Professional', 'l' => '& Dedicated'],
                ] as $stat)
                    <div class="border border-gray-100 rounded-xl p-5 text-center hover:shadow-md transition">
                        <p class="font-heading text-xl font-bold text-rtc-navy">{{ $stat['v'] }}</p>
                        <p class="text-xs text-rtc-gray mt-1">{{ $stat['l'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONIALS --}}
<section class="bg-rtc-cream py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">What Clients Say</p>
        <h2 class="section-heading">Trusted by Hundreds of Clients</h2>

        <div class="mt-10 grid md:grid-cols-3 gap-6 text-left">
            @foreach ([
                ['n' => 'Amit Sharma', 't' => 'Excellent service! They made my ITR filing so smooth and hassle-free. Highly professional and responsive team.'],
                ['n' => 'Priya Mehta', 't' => 'Very knowledgeable and supportive team. They handled our GST registration quickly and efficiently.'],
                ['n' => 'Rajesh Verma', 't' => 'Reliable, timely and transparent service. Ritesh Tax & Legal Consultant is truly a trusted partner.'],
            ] as $review)
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <span class="text-rtc-gold text-2xl">"</span>
                    <p class="text-sm text-rtc-gray mt-2">{{ $review['t'] }}</p>
                    <p class="mt-4 text-rtc-gold text-xs">★★★★★</p>
                    <p class="mt-1 text-sm font-semibold text-rtc-navy">— {{ $review['n'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- LATEST BLOG --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <p class="section-label">Latest from our Blog</p>
                <h2 class="font-heading text-2xl font-bold text-rtc-navy">Insights &amp; Updates</h2>
            </div>
            <a href="{{ route('blog.index') }}" class="text-sm font-semibold text-rtc-navy hover:text-rtc-gold">View All Blogs →</a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($latestPosts as $post)
                <a href="{{ route('blog.show', $post) }}" class="block group">
                    <div class="h-44 rounded-lg bg-rtc-cream flex items-center justify-center text-rtc-gray text-xs overflow-hidden">
                        @if($post->featured_image)
                            <img src="{{ asset('storage/'.$post->featured_image) }}" class="w-full h-full object-cover" alt="{{ $post->title }}">
                        @else
                            [ Image ]
                        @endif
                    </div>
                    <p class="text-xs text-rtc-gold mt-3">{{ $post->published_at?->format('M d, Y') }} &middot; {{ $post->category ?? 'Tax Tips' }}</p>
                    <h3 class="font-semibold text-rtc-navy group-hover:text-rtc-gold mt-1">{{ $post->title }}</h3>
                    <p class="text-sm text-rtc-gray mt-1 line-clamp-2">{{ $post->excerpt }}</p>
                </a>
            @empty
                <p class="text-rtc-gray text-sm col-span-3">No blog posts yet — add your first one from the admin console.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection