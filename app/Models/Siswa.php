<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Siswa
 * @package App\Models
 * @version December 30, 2022, 1:43 am UTC
 *
 * @property string $nis
 * @property string $foto_profil
 * @property string $nama_siswa
 * @property integer $umur
 * @property string $kelas
 * @property string $alamat
 * @property string $email
 * @property string $no_telp
 * @property string $nama_ortu
 */
class Siswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'siswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nis' => 'string',
        'foto_profil' => 'string',
        'nama_siswa' => 'string',
        'umur' => 'integer',
        'kelas' => 'string',
        'alamat' => 'string',
        'email' => 'string',
        'no_telp' => 'string',
        'nama_ortu' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nis' => 'required|max:25',
        'foto_profil' => 'required',
        'nama_siswa' => 'required|max:50',
        'umur' => 'required',
        'kelas' => 'required',
        'alamat' => 'required|max:255',
        'email' => 'required',
        'no_telp' => 'required|max:15',
        'nama_ortu' => 'required|max:50'
    ];

    
}
