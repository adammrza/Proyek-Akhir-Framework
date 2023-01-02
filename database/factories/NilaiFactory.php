<?php

namespace Database\Factories;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nilai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->word,
        'nama_siswa' => $this->faker->word,
        'kelas' => $this->faker->word,
        'wali_kelas' => $this->faker->word,
        'mata_pelajaran' => $this->faker->word,
        'nilai' => $this->faker->randomDigitNotNull,
        'predikat' => $this->faker->word,
        'keterangan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
