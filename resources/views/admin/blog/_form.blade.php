@php $post = $post ?? null; @endphp
 
<div class="grid lg:grid-cols-3 gap-6">
 
    <div class="lg:col-span-2 space-y-5">
        <div>
            <label class="text-sm font-medium text-rtc-navy">Title</label>
            <input type="text" name="title" value="{{ old('title', $post?->title) }}"
                   class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
            @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
 
        <div>
            <label class="text-sm font-medium text-rtc-navy">Slug <span class="text-rtc-gray text-xs">(leave blank to auto-generate)</span></label>
            <input type="text" name="slug" value="{{ old('slug', $post?->slug) }}"
                   class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
            @error('slug') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
 
        <div>
            <label class="text-sm font-medium text-rtc-navy">Excerpt <span class="text-rtc-gray text-xs">(short summary shown on listing)</span></label>
            <textarea name="excerpt" rows="2" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">{{ old('excerpt', $post?->excerpt) }}</textarea>
            @error('excerpt') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
 
        <div>
            <label class="text-sm font-medium text-rtc-navy">Content</label>
            <textarea name="body" id="body-editor" rows="14" class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">{{ old('body', $post?->body) }}</textarea>
            <p class="text-xs text-rtc-gray mt-1">Tip: install a WYSIWYG editor (e.g. TinyMCE/CKEditor) here later for rich formatting. Plain HTML is supported now.</p>
            @error('body') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
    </div>
 
    <div class="space-y-5">
        <div class="bg-rtc-cream rounded-xl p-5">
            <label class="text-sm font-medium text-rtc-navy">Category</label>
            <input type="text" name="category" value="{{ old('category', $post?->category) }}" placeholder="e.g. Tax Tips, GST"
                   class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-rtc-gold">
            @error('category') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
 
        <div class="bg-rtc-cream rounded-xl p-5">
            <label class="text-sm font-medium text-rtc-navy">Featured Image</label>
            <input type="file" name="featured_image" accept="image/*" class="mt-2 text-sm w-full">
            @if($post?->featured_image)
                <img src="{{ asset('storage/'.$post->featured_image) }}" class="mt-3 rounded-lg h-32 object-cover w-full">
            @endif
            @error('featured_image') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
 
        <div class="bg-rtc-cream rounded-xl p-5 space-y-3">
            <label class="flex items-center gap-2 text-sm font-medium text-rtc-navy">
                <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post?->is_published) ? 'checked' : '' }} class="rounded text-rtc-gold focus:ring-rtc-gold">
                Publish this post
            </label>
            <div>
                <label class="text-sm font-medium text-rtc-navy">Publish Date</label>
                <input type="datetime-local" name="published_at"
                       value="{{ old('published_at', $post?->published_at?->format('Y-m-d\TH:i')) }}"
                       class="mt-1 w-full border border-gray-200 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-rtc-gold">
            </div>
        </div>
 
        <button type="submit" class="btn-navy w-full justify-center">{{ $post ? 'Update Post' : 'Create Post' }}</button>
        <a href="{{ route('admin.blog.index') }}" class="btn-outline w-full justify-center">Cancel</a>
    </div>
</div>