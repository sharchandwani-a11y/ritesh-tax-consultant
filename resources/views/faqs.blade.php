@extends('layouts.app')
 
@section('title', 'FAQs | Ritesh Tax & Legal Consultant')
 
@section('content')
 
<section class="bg-rtc-cream py-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">FAQs</p>
        <h1 class="section-heading">Frequently Asked Questions</h1>
    </div>
</section>
 
<section class="py-16">
    <div class="max-w-3xl mx-auto px-6 lg:px-10 space-y-4">
        @php
            $faqs = [
                ['q' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, aperiam.?', 'a' => 'PAN card, Aadhaar card, Form 16 (salaried), bank statements, investment proofs (80C/80D etc.), and details of any other income (capital gains, rent, interest) are generally required.'],
                ['q' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, enim!?', 'a' => 'Typically GST registration is completed within 3–7 working days once all documents and verification are submitted correctly, subject to government processing timelines.'],
                ['q' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, molestias.?', 'a' => 'TDS returns are filed quarterly — due dates generally fall on 31st July, 31st October, 31st January, and 31st May for each respective quarter.'],
                ['q' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, itaque??', 'a' => 'Simply contact us via call, WhatsApp, or the booking form. Share your requirement and documents, and our experts will review and get back to you with a clear plan and pricing.'],
                ['q' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, doloribus.?', 'a' => 'Yes — most of our services (ITR, GST, accounting, business registration) are handled fully online, so we can assist clients anywhere in India.'],
            ];
        @endphp
 
        @foreach ($faqs as $i => $faq)
            <details class="group border border-gray-100 rounded-xl p-5 [&_summary::-webkit-details-marker]:hidden" {{ $i === 0 ? 'open' : '' }}>
                <summary class="flex items-center justify-between cursor-pointer font-semibold text-rtc-navy">
                    {{ $faq['q'] }}
                    <span class="text-rtc-gold text-xl group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-3 text-sm text-rtc-gray leading-relaxed">{{ $faq['a'] }}</p>
            </details>
        @endforeach
 
        <div class="text-center mt-10">
            <p class="text-rtc-gray text-sm">Still have questions?</p>
            <a href="{{ route('contact') }}" class="btn-navy mt-3">Contact Us</a>
        </div>
    </div>
</section>
 
@endsection
 