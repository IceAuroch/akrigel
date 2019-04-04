<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>

    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>

</head>

<body>

<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-9 col-sm-3 col-lg-2">
                <a href="<?= site_url(); ?>" class="logo">
                    <img src="<?= get_theme_file_uri('images/icon/logo/logo.png'); ?>" alt="logo">
                </a>
            </div>
            <div class="col-3 col-sm-4 col-lg-3">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="d-none d-sm-flex btn btn-outline-primary open-singup">
                        Записаться
                    </a>
                    <div class="burger-menu d-flex flex-column justify-content-center align-items-center">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="menu">
        <ul class="menu-list list-unstyled">
            <li><a href="#for-who" class="scroll-link">Вы получите</a></li>
            <li><a href="#program" class="scroll-link">Программа</a></li>
            <li><a href="#speakers" class="scroll-link">Наши спикеры</a></li>
            <li><a href="#singup" class="scroll-link">Записаться</a></li>
            <li><a href="#contacts" class="scroll-link">Контакты</a></li>
        </ul>
    </nav>
</header>

<?php
    require_once('template-parts/modal.php');
?>

<main>

           