<?php
require_once("config/config.php");
?>
<!Doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Мой сайт</title>
    <meta name='descripshion' content='/-2-3'>
    <meta name='keywords' content='..,..,'>
    <meta name='author' content='...'>
    <link type='text/css' rel='stylesheet' href='media/bootstrap/css/bootstrap.min.css'/>
    <link type='text/css' rel='stylesheet' href='media/css/style.css'/>
</head>
<body>
<div class='header'>
    <div class='container'>
        <div class="logo-wrapper">
            <img src='./media/img/log.jpeg' class='logo'/>
        </div>
        <div class='site-name'>
            <h2>Prokop company</h2>

            <div class='authorization-menu'>
                <h4><a href='#'>Вход</a></h4>
                <h4><a href='#'>Регистрация </a></h4>
            </div>
        </div>
    </div>
</div>
<div class='top-menu'>
    <a href='index.php?url=main'>Главная</a>
    <a href='index.php?url=services'>Услуги</a>
    <a href='index.php?url=vacancies'>Ваканси</a>
    <a href='index.php?url=contacts'>Контакты</a>
</div>
<div class='container'>


    <div class='col-md-2'>
        <div class='menu-left'>
            <div class='menu-head'>
                <h2>Услуги</h2>
            </div>
            <div class='menu-link'>
                <a href='index.php?url=development' class='btn btn-success'>Разработка сайтов</a>
                <a href='index.php?url=testing' class='btn btn-default'>Тестирование ПО</a>
                <a href='index.php?url=service1' class='btn btn-default'>Услуга 3</a>
                <a href='index.php?url=service2' class='btn btn-default'>Услуга 4</a>
                <a href='index.php?url=service3' class='btn btn-default'>Услуга 5</a>
            </div>
        </div>
    </div>
    <div class='col-md-8'>