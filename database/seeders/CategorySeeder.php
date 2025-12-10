<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Anime',  'slug' => 'anime'],
            ['name' => 'Movie',  'slug' => 'movie'],
            ['name' => 'Berita', 'slug' => 'berita'],
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(
                ['slug' => $cat['slug']],
                $cat
            );
        }
    }
}
