<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
 
class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()
            ->when($request->search, fn ($q) => $q->where('title', 'like', '%'.$request->search.'%'))
            ->latest()
            ->paginate(10)
            ->withQueryString();
 
        return view('admin.blog.index', compact('posts'));
    }
 
    public function create()
    {
        return view('admin.blog.create');
    }
 
    public function store(Request $request)
    {
        $data = $this->validateData($request);
 
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }
 
        $data['is_published'] = $request->boolean('is_published');
        $data['published_at'] = $data['is_published'] ? ($request->published_at ?: now()) : null;
 
        Post::create($data);
 
        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully.');
    }
 
    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }
 
    public function update(Request $request, Post $post)
    {
        $data = $this->validateData($request, $post->id);
 
        if ($request->hasFile('featured_image')) {
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }
 
        $data['is_published'] = $request->boolean('is_published');
        $data['published_at'] = $data['is_published'] ? ($request->published_at ?: ($post->published_at ?: now())) : null;
 
        $post->update($data);
 
        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully.');
    }
 
    public function destroy(Post $post)
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();
 
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted.');
    }
 
    private function validateData(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'slug'           => ['nullable', 'string', 'max:255', 'unique:posts,slug,'.$ignoreId],
            'category'       => ['nullable', 'string', 'max:100'],
            'excerpt'        => ['nullable', 'string', 'max:500'],
            'body'           => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:4096'],
            'published_at'   => ['nullable', 'date'],
        ]);
    }
}
