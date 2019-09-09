@if($model->status === 0)
    <span class="label label-success">下架</span>
@elseif($model->status === 1)
    <span class="label label-warning">上架</span>
@endif
