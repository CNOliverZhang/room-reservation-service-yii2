<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Admin */

/* @author 钟震宇 <nczzy1997@gmail.com> */

$this->title = '修改管理员资料：' . $model->admin_name;
$this->params['breadcrumbs'][] = ['label' => '管理员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->admin_id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>

<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row col-lg-5">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'admin_id')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'admin_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
