@extends('layouts.app')

@section('title', 'Our Services | Ritesh Tax & Legal Consultant')

@section('content')

<section class="bg-rtc-cream py-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">Our Services</p>
        <h1 class="section-heading">Comprehensive Tax &amp; Legal Solutions</h1>
        <p class="mt-3 text-rtc-gray max-w-2xl mx-auto">
            From individual tax filing to complete business compliance — everything under one roof.
        </p>
    </div>
</section>

<section class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 space-y-16">

        @php
            $services = [
                [
                    'title' => 'Income Tax Returns (ITR) Filing',
                    'desc'  => 'Accurate and timely filing of ITR for salaried individuals, professionals, freelancers and businesses, ensuring maximum eligible deductions and zero compliance worries.',
                    'points'=> ['Salary, business & capital gains ITR', 'Tax planning & advisory', 'Refund tracking support'],
                ],
                [
                    'title' => 'GST Registration & Returns',
                    'desc'  => 'End-to-end GST registration and monthly/quarterly return filing so your business stays fully compliant with current regulations.',
                    'points'=> ['New GST registration', 'GSTR-1, GSTR-3B filing', 'GST amendments & cancellation'],
                ],
                [
                    'title' => 'TDS Compliance',
                    'desc'  => 'TAN registration, TDS deduction advisory and quarterly TDS return filing to keep your business penalty-free.',
                    'points'=> ['TAN registration', 'Quarterly TDS returns', 'Form 16/16A generation'],
                ],
                [
                    'title' => 'Accounting & Bookkeeping',
                    'desc'  => 'Professional, accurate bookkeeping and accounting support so your financial records are always audit-ready.',
                    'points'=> ['Monthly bookkeeping', 'Financial statement preparation', 'MIS reporting'],
                ],
                [
                    'title' => 'MSME Registration',
                    'desc'  => 'Get your business registered under MSME (Udyam) to unlock government schemes, subsidies and easier credit access.',
                    'points'=> ['Udyam registration', 'MSME benefit advisory', 'Documentation support'],
                ],
                [
                    'title' => 'Business Registration Services',
                    'desc'  => 'Complete support for setting up your business in the right legal structure — Private Limited, LLP, Partnership and more.',
                    'points'=> ['Private Limited / LLP incorporation', 'Partnership firm registration', 'Trademark & licensing guidance'],
                ],
            ];
        @endphp

        @foreach ($services as $i => $service)
            <div class="grid lg:grid-cols-2 gap-10 items-center {{ $i % 2 == 1 ? 'lg:[&>div:first-child]:order-2' : '' }}">
                <div class="bg-rtc-cream rounded-2xl h-64 flex items-center justify-center text-rtc-gray text-sm">
                    [ {{ $service['title'] }} Illustration ]
                </div>
                <div>
                    <h2 class="font-heading text-2xl font-bold text-rtc-navy">{{ $service['title'] }}</h2>
                    <p class="mt-3 text-rtc-gray">{{ $service['desc'] }}</p>
                    <ul class="mt-4 space-y-2">
                        @foreach ($service['points'] as $point)
                            <li class="flex items-center gap-2 text-sm text-rtc-navy">
                                <span class="text-rtc-gold">✓</span> {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-navy mt-5 text-sm">Get Started</a>
                </div>
            </div>
        @endforeach

    </div>
</section>

@endsection