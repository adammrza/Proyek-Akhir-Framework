<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Guru
 * @package App\Models
 * @version December 30, 2022, 1:39 am UTC
 *
 * @property string $no_keg
 * @property string $foto_profil
 * @property string $nama_guru
 * @property string $alamat
 * @property string $email
 * @property string $no_telp
 * @property string $mapel_yang_diampu
 */
class Guru extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gurus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'no_keg',
        'foto_profil',
        'nama_guru',
        'alamat',
        'email',
        'no_telp',
        'mapel_yang_diampu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_keg' => 'string',
        'foto_profil' => 'string',
        'nama_guru' => 'string',
        'alamat' => 'string',
        'email' => 'string',
        'no_telp' => 'string',
        'mapel_yang_diampu' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_keg' => 'required|max:25',
        'foto_profil' => 'required',
        'nama_guru' => 'required|max:50',
        'alamat' => 'required|max:255',
        'email' => 'required',
        'no_telp' => 'required|max:15',
        'mapel_yang_diampu' => 'required'
    ];

    
}
