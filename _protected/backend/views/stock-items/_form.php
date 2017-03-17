<?php

use richardfan\widget\JSRegister;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-items-form">

    <?php $form = ActiveForm::begin(['method' => 'post',
        'action' => ['/stock-items/update?id='.$model->id],
        'id' => $model->id,
        'options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'id')->textInput(['maxlength' => true, 'value'=>$model->id]) ?>
    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->hiddenInput(['maxlength' => true]) ?>
    <?php $url = Yii::getAlias("@frontimgurl");?>
    <?=Html::img($url."/".$model->image)?>
    <?= $form->field($model, 'file')->fileInput([
        'maxlength' => true,
        'accept' => 'image/*',
        'capture' => 'camera',

    ]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discountprice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instock')->textInput() ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php JSRegister::begin();?>
<script>
    $(function(){
        $("#stockitems-file").on("change", function(){

        });
    });
</script>
<?php JSRegister::end();?>
