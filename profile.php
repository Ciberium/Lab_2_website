<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Грищук Е. О.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="col-3 nav_logo"></div>
            <div class="col-9"><div class="nav_text">Общая информация обо мне</div></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8"><h2>Егор Грищук, студент Дальневосточного федерального университета, увлекаюсь программированием. <br>
                <br>
                IT — это область, которая постоянно развивается и предлагает новые <br> возможности для роста. Это поле для творческих и любознательных людей, <br> которые стремятся сделать мир лучше с помощью технологий.<br></h2></div>
            <div class="col-4">
                <div class="row my_photo"></div>
                <div class="row title_photo">
                    <p>Грищук Е.О.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method= "POST" action="profile.php">
                    <input type="text" class="form" type="text" name="title" placeholder="Заголовок Вашего поста!">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст Вашего поста ..."></textarea>
                    <button type="submit" class="btn_red" name="submit">Сохранить пост!</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>


<?php

require_once('db.php');


$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ('Пожалуйста введите все значения!');

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");


}


?>