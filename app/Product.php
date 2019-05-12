<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = "products";

    protected $fillable = [
        "name",
        "desc",
        "content",
        "information",
        "cover",
        "price",
        "discount",
        "piece",
    ];

    public function album() {
        return $this->hasMany("App\Album");
    }
}
