<?php

namespace App\Models;

use App\Models\Evaluation;
use App\Models\Event;
use App\Models\File;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    
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
    
    public function getSkills()
    {
        return $this->belongsToMany(Skill::class, 'skills_users', 'fk_user_id', 'fk_skill_id');
    }
    
    public function getOauth()
    {
        return $this->hasOne(OauthClient::class, "user_id", "id");
    }
    
}
