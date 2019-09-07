<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Goods
 *
 * @property int $id
 * @property string|null $title 商品名称
 * @property string|null $desc 描述
 * @property int|null $stock 库存
 * @property string|null $thumb 缩略图
 * @property float|null $max_price 最大价格
 * @property float|null $min_price 最小价格
 * @property float|null $real_price 真实价格
 * @property float|null $price 价格
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereMinPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereRealPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Goods extends Model
{
    protected $table = 'goods';

    public function tags()
    {
        return $this->hasMany(GoodsTag::class, 'id', 'tag_id');
    }

}
