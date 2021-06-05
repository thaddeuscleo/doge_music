<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $generation20_2 = [
            'Lionel Ritchie',
            'Clarissa Chuardi',
            'Stanley Dave Teherag',
            'Brandon Julio Thenaro',
            'Thaddeus Cleo',
            'Skolastika Gabriella Theresandia Prasetyo',
            'Johanes Peter Vincentius',
            'Vincent Benedict',
        ];

        return [
            'name' => $this->faker->name(),
            'album_art' => "test",
            'price' => $this->faker->randomFloat(NULL, $min = 5, $max = 20),
            'artist_name' => $this->faker->randomElement($generation20_2)
        ];
    }
}
