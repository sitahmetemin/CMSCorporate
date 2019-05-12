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
        "product_id",
        "section_id",
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
