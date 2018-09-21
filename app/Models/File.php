<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = "files";
    protected $guarded = [];
    public function getUser()
    {
        return $this->hasOne(User::class, "od", "fK_user_id");
    }
}
