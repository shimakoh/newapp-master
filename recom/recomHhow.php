<?php
session_start();

require '../vendor/autoload.php';

require '../vendor/autoload.php';

if(!empty($_SESSION['recom']['error4'])){
    header('Location: error.php');
    excit();
}

$_SESSION['recom']['error1']=1;
$_SESSION['recom']['error2']=1;
$_SESSION['recom']['error3']=1;

$Q1='';
if (isset($_POST['answer_h'])) {
    if ($_POST['answer_h']=='a') {
        $_SESSION['recom']['Qh']=$_POST['answer_h'];

    header('Location: recom3.php');
    excit();
    }elseif ($_POST['answer_h']=='b' || $_POST['answer_h']=='c') {
        $_SESSION['recom']['Qha']=$_POST['answer_h'];


    header('Location: recom3.php');
    excit();
    }

}



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

<body>
    <div class="wrapper">
        <header class="header">
            <a class="title" href="recomendation.php">Home</a>
            <a class="title" href="itiran.php">嬢一覧</a>
        </header>
        <div class="container">
            <h1 class="theme">おすすめを紹介！</h1>
            <p class="theme">(いくつかの質問に答えてください)</p>


            <form method="POST" action="recomHhow.php">
                <div class="section">
                    <h3><span>Q2.</span>どれくらいの頻度でHできてる？</h3>
                    <ul>
                        <li>a. 毎日</li>
                        <li>b. 週2.3</li>
                        <li>c. 月1くらい</li>
                    </ul>
                    <input type="radio" name="answer_h" value="a" checked>a
                    <input type="radio" name="answer_h" value="b">b
                    <input type="radio" name="answer_h" value="c">c
                </div><br>
                <input type="submit" class="btn btn-primary" value="回答する!">
            </form>




        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>