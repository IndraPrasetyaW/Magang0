<?php

use yii\helpers\Html;

$this->title = 'Landing Page';
?>

<div class="landing-page">
    <div class="jumbotron text-center">
        <h1>Selamat Datang di Website Kami</h1>
        <p class="lead">Kami menyediakan solusi terbaik untuk bisnis Anda.</p>
        <p><?= Html::a('Mulai Sekarang', ['site/signup'], ['class' => 'btn btn-success btn-lg']) ?></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Fitur 1</h2>
                <p>Deskripsi singkat mengenai fitur pertama yang ditawarkan oleh bisnis Anda.</p>
            </div>
            <div class="col-lg-4">
                <h2>Fitur 2</h2>
                <p>Deskripsi singkat mengenai fitur kedua yang ditawarkan oleh bisnis Anda.</p>
            </div>
            <div class="col-lg-4">
                <h2>Fitur 3</h2>
                <p>Deskripsi singkat mengenai fitur ketiga yang ditawarkan oleh bisnis Anda.</p>
            </div>
        </div>

        <hr>

        <div class="text-center">
            <h2>Kenapa Memilih Kami?</h2>
            <p>Kami memiliki pengalaman, keahlian, dan dedikasi untuk memenuhi kebutuhan Anda.</p>
        </div>
    </div>
</div>
