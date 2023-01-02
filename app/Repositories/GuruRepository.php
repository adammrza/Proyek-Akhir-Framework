<?php

namespace App\Repositories;

use App\Models\Guru;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class GuruRepository
 * @package App\Repositories
 * @version December 30, 2022, 1:39 am UTC
*/

class GuruRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_keg',
        'foto_profil',
        'nama_guru',
        'alamat',
        'email',
        'no_telp',
        'mapel_yang_diampu'
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
        return Guru::class;
    }

    public function createGuru(Request $request) {
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
