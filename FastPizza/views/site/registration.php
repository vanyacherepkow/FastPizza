<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-registration">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'reg-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'Email')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'Password')->passwordInput() ?>

        <?= $form->field($model, 'Password1')->passwordInput() ?>

        <?= $form->field($model, 'Firstname')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'SecondName')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'LastName')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'Tel')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '8-(***)-***-**-**',])?>

        <?= $form->field($model, 'BDay')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'Adres')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'FlatKey')->textInput(['autofocus' => true]) ?>



        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
