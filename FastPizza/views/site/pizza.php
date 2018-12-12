<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Главная';
?>
        <?php $form = ActiveForm::begin([]); ?>
<div class="main_order">

  <div class="pizza_main">
    <div class="container">
    <h2 class="product_title">Пицца</h2>
    <?php foreach($Pizza as $val)
    {?>
      <div class="pizza_box">
          <div scope ="row" class="pizza_img_blud"><?php echo ($val->image_blud) ? Html::img('/images/' . $val->image_blud,['width' => '100%', 'height' => 200]) : null ?></div>
          <?=Html::a(Html::tag('h2',$val->Naim_blud,['class' => 'pizza_nazv_blud']), Url::toRoute('/site/pizza_page'));?>
          <h2 scope="row" class="pizza_razm_blud"><?=$val->razm_blud ;?></h2>
          <h3 scope="row" class="pizza_ing_blud"><?=$val->ing_blud ;?></h3>
          <div class="col-md-6"><h4 scope="row" class="pizza_price_blud"><?=$val->price_blud;?> ₽</h4></div>
          <div class="col-md-6"><h4><?= Html::submitButton('В корзину', ['class' => 'btn btn-primary btn-order', 'name' => 'login-button']) ?></h4></div>
      </div>
    <?php } ?>
  </div>
</div>
  <div class="eda_main">
<div class="container">
    <h2 class="product_title">Еда</h2>
    <?php foreach($Eda as $val)
    {?>
      <div class="eda_box">
          <div scope ="row" class="eda_img_blud"><?php echo ($val->image_blud) ? Html::img('/images/' . $val->image_blud,['width' => '100%', 'height' => 200]) : null ?></div>
          <h2 scope="row" class="eda_nazv_blud"><?=$val->Naim_blud ;?></h2>
          <h2 scope="row" class="eda_razm_blud"><?=$val->razm_blud ;?></h2>
          <h3 scope="row" class="eda_ing_blud"><?=$val->ing_blud ;?></h3>
          <div class="col-md-6"><h4 scope="row" class="eda_price_blud"><?=$val->price_blud;?> ₽</h4></div>
          <div class="col-md-6"><h4><?= Html::submitButton('В корзину', ['class' => 'btn btn-primary btn-order', 'name' => 'login-button']) ?></h4></div>
      </div>
    <?php } ?>
</div>
</div>
  <div class="napitok_main">
    <div class="container">
    <h2 class="product_title">Напитки</h2>
    <?php foreach($Napitok as $val)
    {?>
      <div class="napitok_box">
          <div scope ="row" class="napitok_img_blud"><?php echo ($val->image_blud) ? Html::img('/images/' . $val->image_blud,['width' => '200px', 'height' => 200]) : null ?></div>
          <h2 scope="row" class="napitok_nazv_blud"><?=$val->Naim_blud ;?></h2>
          <h2 scope="row" class="napitok_razm_blud"><?=$val->razm_blud ;?></h2>
          <div class="col-md-6"><h4 scope="row" class="napitok_price_blud"><?=$val->price_blud;?> ₽</h4></div>
          <div class="col-md-6"><h4><?= Html::submitButton('В корзину', ['class' => 'btn btn-primary btn-order', 'name' => 'login-button']) ?></h4></div>
      </div>
    <?php } ?>
</div>
</div>
</div>
  <?php ActiveForm::end(); ?>
