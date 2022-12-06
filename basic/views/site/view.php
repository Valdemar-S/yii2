<?php

use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'date',
        'img_count',
        'id_img_url'
    ],
]);
