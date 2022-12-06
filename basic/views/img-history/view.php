<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ImgHistory $model */
/** @var yii\data\ActiveDataProvider $dataProvider */

foreach ($model as $mod) {
    $this->title = $mod->id;
    $this->params['breadcrumbs'][] = ['label' => 'Img Histories', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
    \yii\web\YiiAsset::register($this);
}
?>
<div class="img-history-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?
    foreach ($model as $mod) {
    ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $mod->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $mod->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <? } ?>
    <? foreach ($model as $mod) { ?>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'date',
                'img_count',
                'id_img_url:url',
            ],
        ]); ?>


        <?= DetailView::widget([
            'model' => $mod,
            'attributes' => [
                'id',
                'date',
                'img_count',
                'id_img_url:url',
            ],
        ]) ?>


    <? } ?>
</div>