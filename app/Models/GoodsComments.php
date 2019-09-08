<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GoodsComments
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $order_id
 * @property int|null $star
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereStar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsComments whereUserId($value)
 * @mixin \Eloquent
 */
class GoodsComments extends Model
{
    protected $table = 'goods_comments';
}
