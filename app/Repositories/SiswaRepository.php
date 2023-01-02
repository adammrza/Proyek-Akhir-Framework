<?php

namespace App\Repositories;

use App\Models\Siswa;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class SiswaRepository
 * @package App\Repositories
 * @version December 30, 2022, 1:43 am UTC
*/

class SiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nis',
        'foto_profil',
        'nama_siswa',
        'umur',
        'kelas',
        'alamat',
        'email',
        'no_telp',
        'nama_ortu'
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
        return Siswa::class;
    }

    public function createSiswa(Request $request) {
        $file = $request->file('foto_profil');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$extension;
        $img = Image::make($file);
        $img->save(public_path($path));

        $input = $request->all();
        $input['foto_profil'] = $path;

        return $this->create($input);
    }
}
