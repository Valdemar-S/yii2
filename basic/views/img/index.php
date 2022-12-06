<?php

use app\models\ImgCount;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Img Counts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="img-count-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Img Count', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ImgCount $model, $key, $index, $column) {
                    if ($action == "view") {
                        return Url::toRoute(["img-history/view", 'id' => $model->id]);
                    }
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>