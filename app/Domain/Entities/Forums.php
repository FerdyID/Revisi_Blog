<?php

namespace App\Domain\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forums extends Model
{
//    use SoftDeletes;

    protected $table = 'forums';
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
    ];
//    protected $with = ['jenis_buku','user'];
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
    public function jenis_buku()
    {
        return $this->belongsTo('App\Domain\Entities\JenisBuku', 'jenis_buku_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Domain\Entities\User', 'user_id');
    }

}
