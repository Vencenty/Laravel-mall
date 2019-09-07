<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tests\Models\Profile;

class User extends Model
{
    protected $table = 'user';

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
}
