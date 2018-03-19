<?php

namespace Bantenprov\Sekolah\Models\Bantenprov\Sekolah;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sekolah extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'sekolahs';
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'label',
        'user_id',
        'jenis_sekolah_id',
        'npsn',
        'alamat',
        'logo',
        'foto_gedung',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

        public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

       public function jenis_sekolah()
    {
        return $this->belongsTo('Bantenprov\Sekolah\Models\Bantenprov\Sekolah\JenisSekolah','jenis_sekolah_id');
    }

}
