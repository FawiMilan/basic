<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<h1>Komentar</h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'nama')->label('Nama Anda') ?>
<?= $form->field($model, 'pesan') ?>
<?= Html::submitButton('simpan', ['class'=>'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>