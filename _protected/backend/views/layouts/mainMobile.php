<?php
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <?= Html::csrfMetaTags() ?>

        <link rel="apple-touch-icon" sizes="57x57" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=Yii::getAlias("@themes")?>/img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?=Yii::getAlias("@themes")?>/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?=Yii::getAlias("@themes")?>/img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?=Yii::getAlias("@themes")?>/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?=Yii::getAlias("@themes")?>/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?=Yii::getAlias("@themes")?>/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="<?=Yii::getAlias("@themes")?>/img/favicons/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::t('app', Yii::$app->name),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default navbar-fixed-top',
            ],
        ]);

        // display Account and Users to admin+ roles
        if (Yii::$app->user->can('admin'))
        {
            $menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];
            $menuItems[] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/index']];
        }

        // display Login page to guests of the site
        if (Yii::$app->user->isGuest)
        {
            $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
        }
        // display Logout to all logged in users
        else
        {
            $menuItems[] = [
                'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);

        NavBar::end();
        ?>


            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>

    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>