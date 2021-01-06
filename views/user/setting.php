<?php

use yii\helpers\Html;
use yii\bootstrap4\Nav;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $profile app\models\UserProfile */
/* @var $action string */

$this->title = $model->nickname;
// $this->params['breadcrumbs'][] = Yii::t('app', 'Setting');
?>
<div class="user-update">
    <div class="contest-view">
        <?php
        $menuItems = [
            [
                'label' => Yii::t('app', 'Profile'),
                'url' => ['user/setting', 'action' => 'default']
            ],
            [
                'label' => Yii::t('app', 'Security'),
                'url' => ['user/setting', 'action' => 'security']
            ],
            [
                'label' => Yii::t('app', '个人主页'),
                'url' => ['/user/view', 'id' => Yii::$app->user->id],
                'options' => ['class' => 'ml-auto']
            ]
        ];
        echo Nav::widget([
            'items' => $menuItems,
            'options' => ['class' => 'nav nav-pills']
        ]) ?>
    </div>
    <p></p>
    <div>
        <?= $this->render('_' . $action, [
            'model' => $model,
            'profile' => $profile
        ]) ?>
    </div>
</div>
