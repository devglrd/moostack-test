<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $table = "cms_events";
    
    protected $guarded = [];
    
    
    public function getFile()
    {
        return $this->hasOne(File::class, "id", "fk_file_id");
    }
    
    
    public function getUser()
    {
        return $this->hasOne(User::class, "id", "fk_user_id");
    }
}
