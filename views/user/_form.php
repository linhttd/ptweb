<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\base\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    



    <div class="logo"></div>
    <div class="login-block">
        <h1>Tạo mới người dùng</h1>
        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'role')->dropDownList(\app\models\User::getRoles(), ['prompt' => 'Select']) ?>

        <div class="form-group">
            <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end();?>

    <style>
        body {
            /* background: url('../image/trungnguyen.jpg') no-repeat fixed center center; */
            background-size: cover;
            font-family: Montserrat;
            style="filter: blur(10px)"
        }

        .logo {
            width: 213px;
            height: 36px;
            /* background: url('http://i.imgur.com/fd8Lcso.png') no-repeat; */
            margin: 30px auto;
        }

        .login-block {
            width: 627px;
            padding: 20px;
            background: #d5c8c8;
            border-radius: 5px;
            border-top: 5px solid #625c5c;
            margin: 0 auto;
        }

        .login-block h1 {
            text-align: center;
            color: #000;
            font-size: 18px;
            text-transform: uppercase;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .login-block input {
            width: 100%;
            height: 42px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 14px;
            font-family: Montserrat;
            padding: 0 20px 0 50px;
            outline: none;
        }

        .login-block input#username {
            /* background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat; */
            background-size: 16px 80px;
        }

        .login-block input#username:focus {
            /* background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat; */
            background-size: 16px 80px;
        }

        .login-block input#password {
            /* background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat; */
            background-size: 16px 80px;
        }

        .login-block input#password:focus {
            /* background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat; */
            background-size: 16px 80px;
        }

        .login-block input:active,
        .login-block input:focus {
            border: 1px solid #ff656c;
        }

        .login-block button {
            width: 100%;
            height: 40px;
            background: #ff656c;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #e15960;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            font-family: Montserrat;
            outline: none;
            cursor: pointer;
        }

        .login-block button:hover {
            background: #ff7b81;
        }
    </style>

</div>