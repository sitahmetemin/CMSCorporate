<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = "posts";

    protected $fillable = [
        "name",
        "desc",
        "content",
        "slug",
        "status",
        "cover",
        "video",
        "startDate",
        "endDate",
        "menu_id",
        "user_id",
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function album()
    {
        return $this->hasMany('App\Album');
    }
}
