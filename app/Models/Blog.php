<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Blog onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Blog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Blog withoutTrashed()
 * @mixin \Eloquent
 */
class Blog extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    //    protected $table = 'blogs123'; //id database table name beda dg class
    //    public $timestamps = false; //created_at updated_at ga ada
    
    //whitelist
    //    protected $fillable = ['title', 'description'];
    
    //blaclist
    protected $guarded = [];
}
