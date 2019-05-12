<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;

    protected $table = "sections";

    protected $fillable = [
        "name",
        "content",
        "html",
        "cover",
        "status",
        "menu_id",
    ];

    public function album()
    {
        return $this->hasMany("App\Album");
    }

    public function menu()
    {
        return $this->hasOne("App\Menu");
    }
}
