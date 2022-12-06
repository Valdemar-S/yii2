<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ImgCount $model */
foreach ($model as $mod) {
    $this->title = $mod->id;
    $this->params['breadcrumbs'][] = ['label' => 'Img Counts', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
    \yii\web\YiiAsset::register($this);
}
?>
<div class="img-count-view">

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
    <?= DetailView::widget([
        'model' => $mod,
        'attributes' => [
            'id',
            'url:url',
        ],
    ]) ?>

</div>