@extends('layouts.app')
 
@section('title', 'Contact Us | Ritesh Tax & Legal Consultant')
 
@section('content')
 
<section class="bg-rtc-cream py-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">Contact Us</p>
        <h1 class="section-heading">Get in Touch With Us!</h1>
    </div>
</section>
 
<section class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-12">
 
        {{-- Contact form --}}
        <div>
            @if (session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg px-4 py-3 mb-6">
                    {{ session('success') }}
                </div>
            @endif
 
            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                @csrf
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium text-rtc-navy">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
                        @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="text-sm font-medium text-rtc-navy">Phone Number</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
                        @error('phone') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <label class="text-sm font-medium text-rtc-navy">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
                    @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="text-sm font-medium text-rtc-navy">Service Required</label>
                    <select name="service" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
                        <option value="">Select a service</option>
                        <option>Income Tax Returns (ITR) Filing</option>
                        <option>GST Registration & Returns</option>
                        <option>TDS Compliance</option>
                        <option>Accounting & Bookkeeping</option>
                        <option>MSME Registration</option>
                        <option>Business Registration Services</option>
                        <option>Other</option>
                    </select>
                </div>
                <div>
                    <label class="text-sm font-medium text-rtc-navy">Message</label>
                    <textarea name="message" rows="4" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">{{ old('message') }}</textarea>
                    @error('message') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                <button type="submit" class="btn-navy w-full justify-center">Submit Enquiry</button>
            </form>
        </div>
 
        {{-- Contact details + map --}}
        <div>
            <div class="space-y-5">
                <div class="flex gap-4">
                    <span class="w-10 h-10 rounded-full bg-rtc-gold/15 text-rtc-gold flex items-center justify-center">📍</span>
                    <div>
                        <h4 class="font-semibold text-rtc-navy">Office Address</h4>
                        <p class="text-sm text-rtc-gray">Purswani Area, Satna, Madhya Pradesh - 485001</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <span class="w-10 h-10 rounded-full bg-rtc-gold/15 text-rtc-gold flex items-center justify-center">📞</span>
                    <div>
                        <h4 class="font-semibold text-rtc-navy">Phone</h4>
                        <p class="text-sm text-rtc-gray">9630690069</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <span class="w-10 h-10 rounded-full bg-rtc-gold/15 text-rtc-gold flex items-center justify-center">✉️</span>
                    <div>
                        <h4 class="font-semibold text-rtc-navy">Email</h4>
                        <p class="text-sm text-rtc-gray">ritestaxandlegalconsultant@gmail.com</p>
                    </div>
                </div>
            </div>
 
            <div class="mt-8 rounded-xl overflow-hidden border border-gray-100">
                <iframe
    src="https://www.google.com/maps?q=Satna,Madhya%20Pradesh&output=embed"
    width="100%" height="280" style="border:0;" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
            </div>
        </div>
    </div>
</section>
 
@endsection
 