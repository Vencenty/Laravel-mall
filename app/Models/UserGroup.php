<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'user_group';

    public function users()
    {
        return $this->belongsToMany(UserGroup::class, 'user_group_map', 'group_id', 'user_id');
    }
}
