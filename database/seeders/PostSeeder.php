<?php
 
namespace Database\Seeders;
 
use App\Models\Post;
use Illuminate\Database\Seeder;
 
class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title'        => 'Latest Income Tax Updates You Should Know',
            'category'     => 'Tax Tips',
            'excerpt'      => 'Stay updated with the latest income tax rules and notifications.',
            'body'         => '<p>Stay updated with the latest income tax rules and notifications affecting individual and business taxpayers this financial year.</p>',
            'is_published' => true,
            'published_at' => now(),
        ]);
 
        Post::create([
            'title'        => 'GST Changes in 2024: What Businesses Need to Know',
            'category'     => 'GST',
            'excerpt'      => 'Key updates in GST rules and how they impact your business.',
            'body'         => '<p>Key updates in GST rules and how they impact your business compliance and filing process.</p>',
            'is_published' => true,
            'published_at' => now()->subDays(5),
        ]);
 
        Post::create([
            'title'        => 'Top Tax Saving Tips for Financial Year 2024-25',
            'category'     => 'Tax Tips',
            'excerpt'      => 'Smart ways to save tax and maximize your savings.',
            'body'         => '<p>Smart, legal ways to save tax and maximize your savings this financial year.</p>',
            'is_published' => true,
            'published_at' => now()->subDays(10),
        ]);
    }
}