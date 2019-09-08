<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
