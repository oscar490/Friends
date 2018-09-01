<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Inicio de sesión';
$this->params['breadcrumbs'][] = $this->title;

$js = <<<EOT
    
    $("#formulario").fadeIn();

EOT;

$this->registerJs($js);
?>
<div class="site-login">
    <div class="row centrado">
        <div id="formulario" class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="centrado">
                        <strong>
                            Friends
                        </strong>
                    </span>
                </div>

                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                    ]); ?>

                        <?= 
                            $form->field($model, 'email')->textInput([
                                'autofocus' => true,
                                'placeholder'=>'Dirección de correo electrónico'
                            ])->label(false)
                        ?>
                        
                        <?= 
                            $form->field($model, 'password')->passwordInput([
                                'placeholder' => 'Contraseña',
                            ])->label(false)
                        ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <?= Html::submitButton(
                            Html::tag(
                                'span',
                                '',
                                ['class'=>'glyphicon glyphicon-log-in']
                            ), 
                            ['class' => 'btn btn-success btn-block', 'name' => 'login-button']
                        ) ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
