<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'url',
        ['class' => 'yii\grid\ActionColumn']
    ]
]);
