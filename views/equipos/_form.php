<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Equipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?php
    	echo $form->field($model, 'estado')->widget(Select2::classname(), [
			    'data' => [
			    'Disponible'=>'Disponible',
			    'Reparacion'=>'Reparacion',
			    'Mantenimiento'=>'Mantenimiento',
			    'En Uso'=>'En Uso',
			    'Stock'=>'Stock',
			    'Fuera de Servicio'=>'Fuera de Servicio',
			    'Dañado'=>'Dañado',
			    ],
			    'options' => ['placeholder' => 'Seleccione el Estado del Equipo'],
			    'pluginOptions' => [
			        'allowClear' => true
			    ],
			]);


    ?>

    <?= $form->field($model, 'bien_nacional')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
