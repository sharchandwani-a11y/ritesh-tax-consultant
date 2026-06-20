@extends('layouts.app')

@section('title', 'About Us | Ritesh Tax & Legal Consultant')

@section('content')

<section class="bg-rtc-cream py-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">About Us</p>
        <h1 class="section-heading">Your Trusted Partner in Tax &amp; Legal Compliance</h1>
    </div>
</section>

<section class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-12 items-center">
        <div class="bg-rtc-cream rounded-2xl h-96 flex items-center justify-center text-rtc-gray text-sm">
            [ Firm / Founder Image Placeholder ]
        </div>
        <div>
            <h2 class="font-heading text-2xl font-bold text-rtc-navy">Who We Are</h2>
            <p class="mt-4 text-rtc-gray leading-relaxed">
                Ritesh Tax &amp; Legal Consultant (RTC) is a dedicated tax and legal advisory firm helping individuals,
                startups and growing businesses stay compliant — without the confusion. From income tax filing to
                GST, TDS, accounting and business registration, we handle the paperwork so you can focus on what
                you do best.
            </p>
            <p class="mt-4 text-rtc-gray leading-relaxed">
                Our approach is simple: accurate work, transparent pricing, and timely delivery — every single time.
            </p>
        </div>
    </div>
</section>

<section class="bg-rtc-cream py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid md:grid-cols-3 gap-8 text-center">
        @foreach ([
            ['t' => 'Our Mission', 'd' => 'To simplify tax and legal compliance for every client through reliable, transparent and timely service.'],
            ['t' => 'Our Vision', 'd' => 'To be the most trusted tax & legal advisory partner for individuals and businesses across India.'],
            ['t' => 'Our Values', 'd' => 'Integrity, accuracy, confidentiality and client-first commitment in everything we do.'],
        ] as $card)
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h3 class="font-heading font-bold text-lg text-rtc-navy">{{ $card['t'] }}</h3>
                <p class="text-sm text-rtc-gray mt-3">{{ $card['d'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <h2 class="section-heading">Why Clients Choose Us</h2>
        <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                'Expert Guidance', 'Client Focused Approach', 'Confidential & Secure', 'Fast Turnaround Time',
            ] as $item)
                <div class="border border-gray-100 rounded-xl p-6">
                    <span class="text-rtc-gold text-2xl">✓</span>
                    <p class="font-semibold text-rtc-navy mt-3">{{ $item }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection