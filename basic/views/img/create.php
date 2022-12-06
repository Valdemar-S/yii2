<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ImgCount $model */

$this->title = 'Create Img Count';
$this->params['breadcrumbs'][] = ['label' => 'Img Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="img-count-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
