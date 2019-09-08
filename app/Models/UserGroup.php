<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserGroup
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserGroup[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserGroup extends Model
{
    protected $table = 'user_group';

    public function users()
    {
        return $this->belongsToMany(UserGroup::class, 'user_group_map', 'group_id', 'user_id');
    }
}
