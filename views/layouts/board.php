<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>
        <?= Html::encode($this->title) ?><?php if(Html::encode($this->title) != Yii::$app->setting->get('ojName')) echo " - " . Yii::$app->setting->get('ojName');?>
    </title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/favicon.ico">
    <link href="<?= Yii::getAlias('@web') ?>/css/domjudge.css" rel="stylesheet">
    <script>
    function errorImg(img) {
        img.src = "<?= Yii::getAlias('@web') ?>/images/default.jpg";
        img.onerror = null;
    }
    </script>
</head>

<body>
    <?php $this->beginBody() ?>

    <div>
        <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->setting->get('ojName'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-light bg-light fixed-top',
        ],
        'innerContainerOptions' => ['class' => 'container-fluid']
    ]);
    $menuItemsLeft = [
        // ['label' => Yii::$app->setting->get('ojName'), 'url' => ['/site/index']],
        [
            'label' => Yii::t('app', 'Problems'),
            'url' => ['/problem/index'],
            'active' => Yii::$app->controller->id == 'problem'
        ],
        ['label' => Yii::t('app', 'Status'), 'url' => ['/solution/index']],
        [
            'label' => Yii::t('app', 'Rating'),
            'url' => ['/rating/index'],
            'active' => Yii::$app->controller->id == 'rating'
        ],
        [
            'label' => Yii::t('app', 'Group'),
            'url' => Yii::$app->user->isGuest ? ['/group/index'] : ['/group/my-group'],
            'active' => Yii::$app->controller->id == 'group'
        ],
        [
            'label' => Yii::t('app', 'Contests'), 
            'url' => ['/contest/index'],
            'active' => Yii::$app->controller->id == 'contest'
        ],
        [
            'label' => Yii::t('app', 'Wiki'),
            'url' => ['/wiki/index'],
            'active' => Yii::$app->controller->id == 'wiki'
        ],
        [
            'label' => 'SCNUCPC2020',
            'url' => ['/board/scnucpc2020'],
            'active' => Yii::$app->controller->id == 'board'
        ],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItemsRight[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
        $menuItemsRight[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
    } else {
        if (Yii::$app->user->identity->isAdmin()) {
            $menuItemsRight[] = [
                'label' => Yii::t('app', 'Backend'),
                'url' => ['/admin'],
                'active' => Yii::$app->controller->module->id == 'admin'
            ];
        }
        if  (Yii::$app->user->identity->isVip()) {
            $menuItemsRight[] = [
                'label' => Yii::t('app', 'Backend'),
                'url' => ['/admin/problem'],
                'active' => Yii::$app->controller->module->id == 'admin'
            ];
        }
        $menuItemsRight[] =  [
            'label' => Yii::t('app', 'Setting'),
            'url' => ['/user/setting', 'action' => 'default'],
        ];
        $menuItemsRight[] = [
            'label' => Yii::t('app', 'Logout'),
            'url' => ['/site/logout'],
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mr-auto'],
        'items' => $menuItemsLeft,
        'encodeLabels' => false,
        'activateParents' => true
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItemsRight,
        'encodeLabels' => false,
        'activateParents' => true
    ]);
    NavBar::end();
    ?>

        <?= $content ?>


        <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>