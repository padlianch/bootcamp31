<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Siswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jenis_kelamin')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
