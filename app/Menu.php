<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $table = 'menus';

    protected $fillable = [
        "name",
        "slug",
        "icon",
        "cover",
        "order",
        "type",
        "status",
        "lock",
        "parent_id",
    ];

    public function children()
    {
        return $this->hasMany('App\Menu');
    }

    public function parent()
    {
        return $this->belongsTo('App\Menu', 'parent_id');
    }

    public function section()
    {
        return $this->hasMany('App\Menu');
    }
}
