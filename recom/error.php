<?php 
session_start();


require '../vendor/autoload.php';


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AVメイカー</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="special">
    <div class="wrapper">
        <header class="header">
            <a class="title" href="recomendation.php">Home</a>
        </header>
        <div class="container">
            <h1 class="theme">人生で巻き戻しは出来ないよ！</h1>
            <p class="theme">もう一回最初からやり直してね</p>
            <img src="http://res.cloudinary.com/hoqcb5m25/image/upload/v1539358081/avimg/error.gif">
        </div>
        <footer class="header">
            <p>AV only for you!!</p>
        </footer>
    </div>
</body>

</html>

<?php
session_destroy();
?>

