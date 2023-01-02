<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Nilai
 * @package App\Models
 * @version December 30, 2022, 6:28 am UTC
 *
 * @property string $nis
 * @property string $nama_siswa
 * @property string $kelas
 * @property string $wali_kelas
 * @property string $mata_pelajaran
 * @property integer $nilai
 * @property string $predikat
 * @property string $keterangan
 */
class Nilai extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'nilais';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nis' => 'string',
        'nama_siswa' => 'string',
        'kelas' => 'string',
        'wali_kelas' => 'string',
        'mata_pelajaran' => 'string',
        'nilai' => 'integer',
        'predikat' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nis' => 'required|max:25',
        'nama_siswa' => 'required|max:50',
        'kelas' => 'required',
        'wali_kelas' => 'required|max:50',
        'mata_pelajaran' => 'required',
        'nilai' => 'required|max:100',
        'predikat' => 'required',
        'keterangan' => 'required'
    ];

    
}
