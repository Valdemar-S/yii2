<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ImgHistory $model */

$this->title = 'Create Img History';
$this->params['breadcrumbs'][] = ['label' => 'Img Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="img-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
