<?php
use yii\helpers\HTML;
use yii\widgets\Activeform;

?>
<div class="product-add">
  <?php $form = Activeform::begin() ?>

  <?php echo $form->field($model, "name_product") ?>

  <?php echo $form->field($model, "referencia") ?>

  <div class="form-group">
    <?php echo HTML::submitButton("Guardar", ["class" => "btn btn-primary"]) ?>
  </div>
<?php $form = Activeform::end()  ?>
</div>
