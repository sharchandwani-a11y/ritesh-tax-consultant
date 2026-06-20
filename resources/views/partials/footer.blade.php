{{-- CTA strip --}}
<section class="bg-rtc-cream border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-8 flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <h3 class="font-heading text-xl font-bold text-rtc-navy">Need Expert Assistance?</h3>
            <p class="text-rtc-gray text-sm">We're just a call away. Get in touch with us today!</p>
        </div>
        <div class="flex flex-wrap items-center gap-6">
            <a href="tel:+919630690069" class="flex items-center gap-2 text-sm font-semibold text-rtc-navy">
                <svg class="w-5 h-5 text-rtc-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.34 1.9.62 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.28 1.85.49 2.81.62A2 2 0 0 1 22 16.92Z"/></svg>
                Call Us<br><span class="text-rtc-gray font-normal">9630690069</span>
            </a>
            <a href="https://wa.me/919630690069" target="_blank" class="flex items-center gap-2 text-sm font-semibold text-rtc-navy">
                <svg class="w-5 h-5 text-rtc-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.93.55 3.73 1.5 5.27L2 22l4.96-1.6a9.83 9.83 0 0 0 5.08 1.4c5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2z"/></svg>
                WhatsApp<br><span class="text-rtc-gray font-normal">9630690069</span>
            </a>
            <a href="{{ route('contact') }}" class="btn-navy text-sm">Book Consultation
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>
 
<footer class="bg-rtc-navy text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
            <span class="font-heading text-2xl font-extrabold">RTC<span class="text-rtc-gold">+</span></span>
            <p class="mt-3 text-sm text-white/70 leading-relaxed">
                Providing expert tax, accounting and legal services with integrity, accuracy and commitment.
            </p>
            <div class="flex gap-3 mt-4">
                @foreach (['facebook','instagram','linkedin','whatsapp'] as $icon)
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-rtc-gold flex items-center justify-center text-xs">{{ substr($icon,0,2) }}</a>
                @endforeach
            </div>
        </div>
 
        <div>
            <h4 class="font-semibold text-rtc-gold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm text-white/80">
                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
                <li><a href="{{ route('blog.index') }}" class="hover:text-white">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Contact Us</a></li>
            </ul>
        </div>
 
        <div>
            <h4 class="font-semibold text-rtc-gold mb-4">Our Services</h4>
            <ul class="space-y-2 text-sm text-white/80">
                <li>Income Tax Returns (ITR)</li>
                <li>GST Registration &amp; Returns</li>
                <li>TDS Compliance</li>
                <li>Accounting &amp; Bookkeeping</li>
                <li>MSME Registration</li>
                <li>Business Registration</li>
            </ul>
        </div>
 
        <div>
            <h4 class="font-semibold text-rtc-gold mb-4">Contact Info</h4>
            <ul class="space-y-3 text-sm text-white/80">
                <li>123, Business Park, Indore, Madhya Pradesh - 452001</li>
                <li>ritestaxandlegalconsultant@gmail.com</li>
                <li>9630690069</li>
            </ul>
        </div>
    </div>
 
    <div class="border-t border-white/10 py-5 px-6 text-center text-xs text-white/60">
        © {{ date('Y') }} Ritesh Tax &amp; Legal Consultant. All Rights Reserved. &middot;
        <a href="#" class="hover:text-white">Privacy Policy</a> &middot;
        <a href="#" class="hover:text-white">Terms &amp; Conditions</a>
    </div>
</footer>
 