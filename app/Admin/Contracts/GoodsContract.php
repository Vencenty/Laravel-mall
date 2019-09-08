<?php

namespace App\Admin\Contracts;

interface GoodsContract
{
    const COMMON_STATUS = [
        1 => '上架',
        0 => '下架',
        -1 => '失效',
    ];
}
