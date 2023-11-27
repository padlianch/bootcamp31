<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */
?>
<div class="siswa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'alamat:ntext',
            'jenis_kelamin:boolean',
        ],
    ]) ?>

</div>
