<?php

namespace Database\Factories;

use App\Models\GameList;
use App\Models\Post; //dikarenakan nama model berbeda dengan factory
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GameListFactory extends Factory
{
    protected $model = GameList::class; //ingat ini untuk menghubungkan factory dengan model yang benar, jika nama model dengan factory berbeda

    protected $namePatt = [
        '{prefix} {noun}',
        '{prefix} {adjective} {noun}',
        '{prefix} {series}',
        '{prefix} {edisi}',
        '{prefix} {adjective} {noun} {series}',
        '{prefix} {adjective} {noun} {edisi}'
    ];

    protected $prefix = ['Rally','Shadow','Bending','Gather','Motorsport','Slice','Number'];
    protected $noun = ['Souls', 'Ring', 'Punk', 'Warrior', 'Legend', 'Quest', 'Ninja', 'Dragon', 'Knight', 'Hunter'];
    protected $adjective = ['Last', 'Elder', 'Wild', 'Divine', 'Ancient', 'Forgotten', 'Sacred', 'Damned'];
    protected $series = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'];
    protected $edisi = ['Standart','Deluxe','Remastered','GOTY','Origin'];


    /**
     * Define the model's default state.

     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pattern = fake()->randomElement($this->namePatt);//ditaruh dalam func karena akan dieksekusi berkali kali
        $gameName = str_replace(['{prefix}','{noun}','{adjective}','{edisi}','{series}'],
        [
            fake()->randomElement($this->prefix),
            fake()->randomElement($this->noun),
            fake()->randomElement($this->adjective),
            fake()->randomElement($this->edisi),
            fake()->randomElement($this->series),
        ],
        $pattern
        );
        return [
            'id' => fake()->unique()->numberBetween(1, 1000),
            'gamename' => $gameName,
            'genre' => fake()->randomElement(['Action', 'Adventure', 'RPG', 'Simulation', 'Open World']),
            'desc'=> fake()->paragraph(3),
            'price' => fake()->numberBetween(10000,500000),
            'version' => fake()->randomElement(['1.0','1.1','0.7','Beta Testing', 'Demo', 'Early Access']),
            'uploaded_at' => fake()->dateTimeThisDecade()

        ];
    }
}
