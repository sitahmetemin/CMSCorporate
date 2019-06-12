<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $table = "comments";

    protected $fillable = [
        "name",
        "mail",
        "comment",
        "status",
        "user_id",
    ];
}
