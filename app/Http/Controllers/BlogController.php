<?php
 
namespace App\Http\Controllers;
 
use App\Models\Post;
 
class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest('published_at')->paginate(9);
        return view('blog.index', compact('posts'));
    }
 
    public function show(Post $post)
    {
        abort_unless($post->is_published, 404);
 
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->when($post->category, fn ($q) => $q->where('category', $post->category))
            ->latest('published_at')
            ->take(3)
            ->get();
 
        return view('blog.show', compact('post', 'relatedPosts'));
    }
}