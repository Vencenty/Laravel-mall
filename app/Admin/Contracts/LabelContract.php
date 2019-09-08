<?php

namespace App\Admin\Contracts;



interface LabelContract
{
    const COMMON_STYLE = [
        1 => 'success',
        0 => 'warning',
        -1 => 'danger',
    ];
}
