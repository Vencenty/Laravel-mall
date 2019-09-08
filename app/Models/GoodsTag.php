<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GoodsTag
 *
 * @property int $id
 * @property string $title
 * @property int|null $order
 * @property int|null $status 0-禁用 1-正常
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GoodsTag extends Model
{
    protected $table = 'goods_tag';
}
