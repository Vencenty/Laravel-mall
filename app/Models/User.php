<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $username 用户名
 * @property string|null $password 密码
 * @property string|null $mobile 手机号
 * @property string|null $email 用户邮箱
 * @property string|null $last_login_time 最后登录时间
 * @property string|null $last_login_ip 最后登录IP
 * @property int|null $status 0-封禁 1-正常
 * @property \Illuminate\Support\Carbon|null $created_at 用户注册时间
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserAddress[] $address
 * @property-read int|null $address_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GoodsComments[] $goodsComments
 * @property-read int|null $goods_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserGroup[] $groups
 * @property-read int|null $groups_count
 * @property-read \App\Models\UserProfile $profile
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLastLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsername($value)
 * @mixin \Eloquent
 */
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
