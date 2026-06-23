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
        ['q' => 'What documents are required for ITR filing?', 'a' => 'You will typically need your PAN card, Aadhaar card, Form 16 (for salaried individuals), bank statements, investment proofs under sections 80C/80D, and details of any additional income such as capital gains, rental income, or interest earned.'],
        ['q' => 'How long does GST registration take?', 'a' => 'GST registration is usually completed within 3 to 7 working days, provided all required documents are submitted accurately and verification is processed smoothly by the GST department.'],
        ['q' => 'When are TDS returns due?', 'a' => 'TDS returns are filed quarterly, with due dates typically falling on 31st July, 31st October, 31st January, and 31st May for each respective quarter of the financial year.'],
        ['q' => 'What is the process for getting a consultation?', 'a' => 'Simply reach out to us via phone call, WhatsApp, or our online booking form. Share your requirements and relevant documents, and our experts will review your case and respond with a clear plan along with transparent pricing.'],
        ['q' => 'Do you provide services to clients across India?', 'a' => 'Yes. Most of our services — including ITR filing, GST registration, accounting, and business registration — are handled entirely online, allowing us to assist clients anywhere in India without requiring an in-person visit.'],
        ['q' => 'What happens if I miss the ITR filing deadline?', 'a' => 'Missing the deadline can result in a late filing fee ranging from ₹1,000 to ₹5,000, along with applicable interest on any unpaid tax. Filing as early as possible helps you avoid these penalties and ensures faster processing of refunds.'],
        ['q' => 'Is GST registration mandatory for my business?', 'a' => 'GST registration becomes mandatory once your annual turnover exceeds ₹40 lakh for goods or ₹20 lakh for services (limits may vary by state). However, certain businesses are required to register regardless of turnover, and we can help assess your specific requirement.'],
        ['q' => 'What are the benefits of MSME (Udyam) registration?', 'a' => 'MSME registration unlocks several advantages, including easier access to collateral-free business loans, government subsidies, priority in tender allocation, and protection against delayed payments from buyers.'],
        ['q' => 'Should I register my business as a Private Limited Company or an LLP?', 'a' => 'The right structure depends on factors like your funding plans, liability protection needs, and compliance capacity. Private Limited companies are better suited for businesses seeking external investment, while LLPs offer simpler compliance for smaller, owner-managed businesses. We can guide you through this decision based on your specific goals.'],
        ['q' => 'How much do your services cost?', 'a' => 'Our pricing varies depending on the complexity and scope of each service. We offer a free initial consultation to understand your requirements, after which we provide transparent, upfront pricing with no hidden charges.'],
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
 