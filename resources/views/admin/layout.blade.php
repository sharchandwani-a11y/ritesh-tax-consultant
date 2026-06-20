<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Console') | RTC Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-rtc-cream min-h-screen">
 
    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        <aside class="w-64 bg-rtc-navy text-white hidden md:flex flex-col">
            <div class="px-6 py-6 border-b border-white/10">
                <span class="font-heading text-2xl font-extrabold">RTC<span class="text-rtc-gold">+</span></span>
                <p class="text-xs text-white/60 mt-1">Admin Console</p>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-1 text-sm">
                <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg {{ request()->routeIs('admin.blog.*') ? 'bg-rtc-gold text-rtc-navy font-semibold' : 'text-white/80 hover:bg-white/10' }}">
                    📝 Blog Posts
                </a>
                <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-white/80 hover:bg-white/10">
                    🌐 View Website
                </a>
            </nav>
            <div class="px-4 py-6 border-t border-white/10">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-sm text-white/70 hover:text-white">
    Logout ({{ auth()->user()?->name }})
</button>
                    </form>
                @endauth
            </div>
        </aside>
 
        {{-- Main --}}
        <div class="flex-1">
            <header class="bg-white border-b border-gray-100 px-6 py-4 flex items-center justify-between">
                <h1 class="font-heading text-xl font-bold text-rtc-navy">@yield('heading', 'Blog Posts')</h1>
            </header>
 
            <main class="p-6">
                @if (session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg px-4 py-3 mb-6">
                        {{ session('success') }}
                    </div>
                @endif
 
                @yield('content')
            </main>
        </div>
    </div>
 
</body>
</html>
 