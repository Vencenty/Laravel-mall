<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'id');
    }

    public function address()
    {
        return $this->hasMany(UserAddress::class, 'user_id', 'id');
    }

    public function goodsComments()
    {
        return $this->hasMany(GoodsComments::class, 'user_id', 'id');
    }

    public function groups()
    {
        return $this->belongsToMany(UserGroup::class, 'user_group_map', 'user_id', 'group_id');
    }


}
