<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model api2\modules\api\models\ApiUser */
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo '<strong>View</strong> Api User'; ?></div>
    <div class="panel-body">
        <p />

        <?php $form = \yii\widgets\ActiveForm::begin(); ?>
        <?php echo $hForm->render($form); ?>
        <?php \yii\widgets\ActiveForm::end(); ?>

    </div>
</div>
