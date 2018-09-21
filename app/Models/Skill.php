<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "cms_skills";
    
    
    protected $guarded = [];
    
    
    public function getUsers()
    {
        return $this->belongsToMany(User::class, 'skills_users', 'fk_skill_id', 'fk_user_id');
    }
}
