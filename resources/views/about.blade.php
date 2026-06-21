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
     <div class="rounded-2xl h-96 overflow-hidden">
    <img src="{{ asset('about.png') }}" alt="Ritesh Tax & Legal Consultant" class="w-full h-full object-cover">
</div>
        <div>
             <p class="font-heading text-3xl font-bold text-rtc-navy mb-1"><b>Founder — Ritesh Harchandwani</b></p>
    <p class="text-rtc-gray text-sm mb-4 leading-relaxed">
        With years of hands-on experience in taxation and legal advisory, <b>Ritesh Harchandwani</b> founded <b>RTC </b>with a
        simple goal — to make tax and legal compliance stress-free for individuals and businesses alike.
    </p>
            <h2 class="font-heading text-2xl font-bold text-rtc-navy">Who We Are</h2>
            <p class="mt-4 text-rtc-gray leading-relaxed">
                <b>Ritesh Tax &amp; Legal Consultant (RTC) </b>is a dedicated tax and legal advisory firm helping individuals,
                startups and growing businesses stay compliant - without the confusion. From income tax filing to
                GST, TDS, accounting and business registration, we handle the paperwork so you can focus on what
                you do best.
            </p>
            <p class="mt-4 text-rtc-gray leading-relaxed">
                Our approach is simple: accurate work, transparent pricing, and timely delivery - every single time.
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
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="section-heading text-left">Why Clients Choose Us</h2>
            <p class="mt-4 text-rtc-gray leading-relaxed">
                At Ritesh Tax & Legal Consultant, we believe that trust is built through consistent, transparent
                and accurate work. Every client who comes to us, whether an individual filing their first ITR
                or a growing business handling complex GST compliance, receives the same level of dedicated
                attention and expert guidance.
            </p>
            <p class="mt-4 text-rtc-gray leading-relaxed">
                Our team stays updated with the latest tax laws and regulatory changes, ensuring that your filings
                are always accurate and compliant. We prioritize clear communication, timely delivery, and
                complete confidentiality of your financial information, so you can focus on growing your business
                while we handle the paperwork.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-6">
            <div class="border-2 border-rtc-gold rounded-xl p-6 text-center bg-white">
                <span class="text-rtc-gold text-3xl">✓</span>
                <p class="font-semibold text-lg text-rtc-navy mt-3">Expert Guidance</p>
            </div>
            <div class="border-2 border-rtc-gold rounded-xl p-6 text-center bg-white">
                <span class="text-rtc-gold text-3xl">✓</span>
                <p class="font-semibold text-lg text-rtc-navy mt-3">Client Focused Approach</p>
            </div>
            <div class="border-2 border-rtc-gold rounded-xl p-6 text-center bg-white">
                <span class="text-rtc-gold text-3xl">✓</span>
                <p class="font-semibold text-lg text-rtc-navy mt-3">Confidential & Secure</p>
            </div>
            <div class="border-2 border-rtc-gold rounded-xl p-6 text-center bg-white">
                <span class="text-rtc-gold text-3xl">✓</span>
                <p class="font-semibold text-lg text-rtc-navy mt-3">Fast Turnaround Time</p>
            </div>
        </div>

    </div>
</section>

@endsection