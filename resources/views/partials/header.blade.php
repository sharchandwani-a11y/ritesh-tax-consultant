<header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 flex items-center justify-between h-20">
 
        {{-- Logo --}}
       {{-- Logo --}}
{{-- Logo --}}
<a href="{{ route('home') }}" class="flex items-center">
    <img src="{{ asset('logo.png') }}" alt="Ritesh Tax & Legal Consultant" class="h-20 w-18">
</a>
        {{-- Desktop nav --}}
        <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold">
            @php
                $navLinks = [
                    'home' => 'Home',
                    'about' => 'About Us',
                    'services' => 'Services',
                    'blog.index' => 'Blog',
                    'faqs' => 'FAQs',
                    'contact' => 'Contact Us',
                ];
            @endphp
            @foreach ($navLinks as $route => $label)
                <a href="{{ route($route) }}"
                   class="relative pb-1 {{ request()->routeIs($route) ? 'text-rtc-navy border-b-2 border-rtc-gold' : 'text-rtc-navy/80 hover:text-rtc-gold' }} transition">
                    {{ $label }}
                </a>
            @endforeach
        </nav>
 
        {{-- CTA --}}
        <a href="{{ route('contact') }}" class="hidden lg:inline-flex btn-navy !px-5 !py-2.5 text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            Book Consultation
        </a>
 
        {{-- Mobile toggle --}}
        <button id="mobile-menu-btn" class="lg:hidden text-rtc-navy" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>
 
  
    {{-- Mobile nav --}}
<div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white px-6 py-5 space-y-4">
    <div class="space-y-3">
        @foreach ($navLinks as $route => $label)
            <a href="{{ route($route) }}" class="block text-base font-semibold {{ request()->routeIs($route) ? 'text-rtc-gold' : 'text-rtc-navy' }}">{{ $label }}</a>
        @endforeach
    </div>

    <div class="pt-3 border-t border-gray-100">
        <a href="{{ route('contact') }}" class="btn-navy w-full justify-center !py-3 text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            Book Consultation
        </a>
    </div>
</div>
</header>
 
<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
</script>