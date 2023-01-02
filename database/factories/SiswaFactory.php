<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->word,
        'foto_profil' => $this->faker->word,
        'nama_siswa' => $this->faker->word,
        'umur' => $this->faker->randomDigitNotNull,
        'kelas' => $this->faker->word,
        'alamat' => $this->faker->text,
        'email' => $this->faker->word,
        'no_telp' => $this->faker->word,
        'nama_ortu' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
