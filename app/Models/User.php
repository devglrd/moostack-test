<?php

namespace App\Models;

use App\Models\Evaluation;
use App\Models\Event;
use App\Models\File;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function getEvents()
    {
        return $this->hasMany(Event::class, "fk_user_id", "id");
    }
    
    public function getFiles()
    {
        return $this->hasMany(File::class, "fk_user_id", "id");
    }
    
    public function getNotes()
    {
        return $this->hasMany(Evaluation::class, "fk_user_id", "id");
    }
    
}
