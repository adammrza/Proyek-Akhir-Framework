<?php

namespace Database\Factories;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guru::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_keg' => $this->faker->word,
        'foto_profil' => $this->faker->word,
        'nama_guru' => $this->faker->word,
        'alamat' => $this->faker->text,
        'email' => $this->faker->word,
        'no_telp' => $this->faker->word,
        'mapel_yang_diampu' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
