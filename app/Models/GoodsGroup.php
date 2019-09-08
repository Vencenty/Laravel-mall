<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GoodsGroup
 *
 * @property int $id
 * @property string $title
 * @property int|null $order
 * @property int $status 1 正常 0 禁用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GoodsGroup extends Model
{
    protected $table = 'goods_group';
}
