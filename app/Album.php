<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;

    protected $table = "albums";

    protected $fillable = [
        "path",
        "order",
        "post_id",
        "album_id",
    ];

    public function post()
    {
        return $this->belongsTo('Post');
    }

    public function product()
    {
        return $this->belongsTo('Product');
    }
}
