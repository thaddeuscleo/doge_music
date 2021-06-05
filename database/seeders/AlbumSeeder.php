<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::factory()->count(200)
            ->has(Song::factory()
                ->count(4)
            )
            ->create();
    }
}
