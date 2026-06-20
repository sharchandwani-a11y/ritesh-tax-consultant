@extends('layouts.app')

@section('title', 'Blog | Ritesh Tax & Legal Consultant')

@section('content')

<section class="bg-rtc-cream py-14">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">
        <p class="section-label justify-center">Our Blog</p>
        <h1 class="section-heading">Insights &amp; Updates</h1>
        <p class="mt-3 text-rtc-gray max-w-2xl mx-auto">Latest tax, GST and legal compliance updates to help you stay ahead.</p>
    </div>
</section>

<section class="py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        @if ($posts->isEmpty())
            <p class="text-center text-rtc-gray">No blog posts published yet. Check back soon!</p>
        @else
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', $post) }}" class="block group border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition">
                        <div class="h-44 bg-rtc-cream flex items-center justify-center text-rtc-gray text-xs overflow-hidden">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/'.$post->featured_image) }}" class="w-full h-full object-cover" alt="{{ $post->title }}">
                            @else
                                [ Image ]
                            @endif
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-rtc-gold">{{ $post->published_at?->format('M d, Y') }} &middot; {{ $post->category ?? 'Tax Tips' }}</p>
                            <h3 class="font-heading font-bold text-rtc-navy mt-2 group-hover:text-rtc-gold">{{ $post->title }}</h3>
                            <p class="text-sm text-rtc-gray mt-2 line-clamp-3">{{ $post->excerpt }}</p>
                            <p class="text-xs text-rtc-gray mt-3">{{ $post->readingTime() }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        @endif

    </div>
</section>

@endsection