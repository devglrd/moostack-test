<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = "cms_evaluations";
    
    protected $guarded = [];
    
    
    public function getUser()
    {
        return $this->hasOne(User::class, "od", "fK_user_id");
    }
}
