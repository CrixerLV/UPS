<?php

/** @var yii\web\View $this */

$this->title = 'UPS - uzdevumu pārvaldības sistēma';
?>

<div class="site-index">

    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/images/firstimage.jpg" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="/assets/images/secondimage.jpg" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="/assets/images/thirdimage.jpg" class="d-block w-100" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="hero-content text-center text-black mt-5">
        <h1 class="display-1">Sveicināts UPS!</h1>
        <p class="fs-5">Uzdevumu pārvaldības sistēma</p>
        <?php if (Yii::$app->user->isGuest): ?>
            <div>
                <?= \yii\helpers\Html::a('Autorizēties', ['/site/login'], ['class' => 'btn btn-dark']) ?>
                <?= \yii\helpers\Html::a('Reģistrēties', ['/site/signup'], ['class' => 'btn btn-outline-dark']) ?>
            </div>
            <?php else: ?>
                <?= \yii\helpers\Html::a('Apskatīt uzdevumus', ['/uzdevums'], ['class' => 'btn btn-outline-dark']) ?>
        <?php endif; ?>
    </div>

</div>
