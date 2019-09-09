<?php

namespace App\Admin\Contracts;

interface GoodsContract
{
    const COMMON_STATUS = [
        1 => '上架',
        0 => '下架',
        -1 => '失效',
    ];
    const REDUCE_STOCK_MODE  = [
        0 => '下单减库存',
        1 => '付款减库存',
        2 => '永不减库存'
    ];
}
