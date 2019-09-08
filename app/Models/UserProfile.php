<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserProfile
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $age 年龄
 * @property int|null $gender 性别
 * @property string|null $avatar 头像
 * @property string|null $birthday 生日
 * @property string|null $nickname 昵称
 * @property string|null $real_name 真实姓名
 * @property \Illuminate\Support\Carbon|null $created_at 创建时间
 * @property \Illuminate\Support\Carbon|null $updated_at 更新时间
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserProfile whereUserId($value)
 * @mixin \Eloquent
 */
class UserProfile extends Model
{
    protected $table = 'user_profile';

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
