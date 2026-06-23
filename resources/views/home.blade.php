@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-16 lg:py-20 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <p class="section-label"><span class="w-8 h-px bg-rtc-gold"></span> Welcome to RTC</p>
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
        <div class="rounded-2xl h-80 lg:h-96 overflow-hidden">
    <img src="{{ asset('hero.png') }}" alt="Tax & Legal Expertise" class="w-full h-full object-cover">
</div>
    </div>
</section>

{{-- SERVICES --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">Our Services</p>
        <h2 class="section-heading">Comprehensive Solutions for<br>Your Business &amp; Personal Needs</h2>

        <p class="mt-4 text-rtc-gray max-w-2xl mx-auto">
            Whether you're an individual managing personal taxes or a growing business handling complex
            compliance requirements, our team offers reliable, accurate and timely solutions tailored to
            your specific needs — so you can stay compliant and focus on what matters most.
        </p>

        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $services = [
                    ['title' => 'Income Tax Returns (ITR) Filing', 'desc' => 'Accurate and timely filing of income tax returns for salaried individuals, professionals, freelancers and businesses, ensuring you claim every eligible deduction without compliance worries.', 'icon' => '🧾'],
                    ['title' => 'GST Registration & Returns', 'desc' => 'End-to-end GST registration, monthly and quarterly return filing, and amendments — keeping your business fully compliant with the latest regulations.', 'icon' => '📊'],
                    ['title' => 'TDS Compliance', 'desc' => 'TAN registration, TDS deduction advisory and timely quarterly return filing, helping your business stay penalty-free and audit-ready.', 'icon' => '💰'],
                    ['title' => 'Accounting & Bookkeeping', 'desc' => 'Professional, accurate bookkeeping and monthly financial statement preparation, so your records are always organized and ready when you need them.', 'icon' => '📒'],
                    ['title' => 'MSME Registration', 'desc' => 'Quick and hassle-free Udyam (MSME) registration, unlocking government schemes, subsidies and easier access to business credit.', 'icon' => '🏭'],
                    ['title' => 'Business Registration Services', 'desc' => 'Complete support in choosing and registering the right legal structure — Private Limited, LLP or Partnership — for your growing business.', 'icon' => '🏢'],
                ];
            @endphp
            @foreach ($services as $service)
                <div class="hover-card border border-gray-100 rounded-xl p-6 text-left">
                    <div class="hover-icon w-12 h-12 rounded-lg bg-rtc-cream flex items-center justify-center text-2xl mb-4">{{ $service['icon'] }}</div>
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
        <div class="rounded-2xl h-80 overflow-hidden">
    <img src="{{ asset('home2.png') }}" alt="About Ritesh Tax & Legal Consultant" class="w-full h-full object-cover">
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
                    ['v' => '50+', 'l' => 'Happy Clients'],
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
    <div class="max-w-7xl mx-auto px-6 lg:px-9 text-center">
        <p class="section-label justify-center">What Clients Says...</p>
        <h2 class="section-heading">Trusted by Many Clients</h2>

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
               <a href="{{ route('blog.show', $post) }}" class="hover-card block group rounded-xl">
    <div class="h-44 rounded-lg bg-rtc-cream flex items-center justify-center text-xs overflow-hidden">
        @if($post->featured_image)
            <img src="{{ asset('storage/'.$post->featured_image) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="{{ $post->title }}">
        @else
            <img src="{{ asset('blog.png') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="{{ $post->title }}">
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