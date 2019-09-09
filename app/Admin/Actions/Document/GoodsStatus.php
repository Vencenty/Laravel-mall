<?php

namespace App\Admin\Actions\Document;

use App\Models\Goods;
use Encore\Admin\Actions\RowAction;

class GoodsStatus extends RowAction
{
    // 在页面点击这一列的图表之后，发送请求到后端的handle方法执行
    public function handle(Goods $goods)
    {
        // 切换`star`字段的值并保存
        $goods->status = !(int)$goods->status;

        $goods->save();
        
        // 保存之后返回新的html到前端显示
        $html = $goods->status ? "<i class=\"fa fa-star-o\"></i>" : "<i class=\"fa fa-star\"></i>";

        return $this->response()->html($html);
    }

    // 这个方法来根据`star`字段的值来在这一列显示不同的图标
    public function display($star)
    {
        return $star ? "<i class=\"fa fa-star-o\"></i>" : "<i class=\"fa fa-star\"></i>";
    }
}
