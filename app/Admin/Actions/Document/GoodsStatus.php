<?php

namespace App\Admin\Actions\Document;

use App\Models\Goods;
use Encore\Admin\Actions\RowAction;

class GoodsStatus extends RowAction
{
    public $name = 'status';

    public function handle(Goods $goods)
    {
        $goods->status = !(int)$goods->status;
        $goods->save();
        $html = $goods->status ? "<span class='label label-success'>上架</span>" : "<span class='label label-danger'>下架</span>";
        return $this->response()->html($html);
    }

    public function display($status)
    {
        return $status ? "<span class='label label-success'>上架</span>" : "<span class='label label-danger'>下架</span>";
    }
}
