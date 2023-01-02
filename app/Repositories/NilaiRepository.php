<?php

namespace App\Repositories;

use App\Models\Nilai;
use App\Repositories\BaseRepository;

/**
 * Class NilaiRepository
 * @package App\Repositories
 * @version December 30, 2022, 6:28 am UTC
*/

class NilaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nis',
        'nama_siswa',
        'kelas',
        'wali_kelas',
        'mata_pelajaran',
        'nilai',
        'predikat',
        'keterangan'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nilai::class;
    }
}
