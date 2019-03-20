<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Albums::class, 10)->create()->each(function ($album) {
            // Seed the relation with one artist
            $artist = factory(App\Artists::class)->make();
            $album->artists()->save($artist);

            // Seed the relation with 15 songs
            $songs = factory(App\Songs::class, 15)->make();
            $album->songs()->saveMany($songs);
        });
    }
}
