<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GoodsCategory
 *
 * @property int $id
 * @property int $parent_id 副标题
 * @property int|null $order 排序
 * @property string|null $title 名称
 * @property string|null $icon 图标
 * @property string|null $uri 路径
 * @property string|null $permission 权限
 * @property \Illuminate\Support\Carbon|null $created_at 生成时间
 * @property \Illuminate\Support\Carbon|null $updated_at 更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GoodsCategory whereUri($value)
 * @mixin \Eloquent
 */
class GoodsCategory extends Model
{
    protected $table = 'goods_category';
}
