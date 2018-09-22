<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OauthToken extends Model
{
    protected $table = "oauth_access_tokens";
    protected $guarded = [];
    
    public function getOauth()
    {
    
    }
}
