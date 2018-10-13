<?php
session_start();
var_dump($_SESSION['recom']['id']);


require '../vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));



echo  $_SESSION['recom']['name'];
        $_SESSION['recom']['Q1']='';
        $_SESSION['recom']['Qa']='';
        $_SESSION['recom']['Qfa']='';
        $_SESSION['recom']['Qc']='';
        $_SESSION['recom']['Qf']='';
        $_SESSION['recom']['Qba']='';
        $_SESSION['recom']['Qb']='';
        $_SESSION['recom']['Qchara']='';
        $_SESSION['recom']['Qwhen']='';
        $_SESSION['recom']['Qba']='';
        $_SESSION['recom']['Qb']='';
        $_SESSION['recom']['Qha']='';
        $_SESSION['recom']['Qh']='';
        $_SESSION['recom']['Qwhoa']='';
        $_SESSION['recom']['Qwhob']='';
        $_SESSION['recom']['Qsatisfy']='';
        $_SESSION['recom']['Qsatisfya']='';
        $_SESSION['recom']['Qwho']='';
$_SESSION['recom']['error1']='';
$_SESSION['recom']['error2']='';
$_SESSION['recom']['error3']='';
$_SESSION['recom']['error4']='';
$_SESSION['recom']['error5']='';
$_SESSION['recom']['error6']='';

if(!empty($_SESSION['recom']['error1'])){
    header('Location: error.php');
    excit();
}


if (!empty($_POST['answer'])) {
    if ($_POST['answer']=='a' || $_POST['answer']=='b' || $_POST['answer']=='c') {
        $_SESSION['recom']['Q1']=$_POST['answer'];
        $_SESSION['recom']['Qa']='';
        $_SESSION['recom']['Qfa']='';
        $_SESSION['recom']['Qc']='';
        $_SESSION['recom']['Qf']='';
        $_SESSION['recom']['Qba']='';
        $_SESSION['recom']['Qb']='';
        $_SESSION['recom']['Qchara']='';
        $_SESSION['recom']['Qwhen']='';
        $_SESSION['recom']['Qba']='';
        $_SESSION['recom']['Qb']='';
        $_SESSION['recom']['Qha']='';
        $_SESSION['recom']['Qh']='';
        $_SESSION['recom']['Qwhoa']='';
        $_SESSION['recom']['Qwhob']='';
        $_SESSION['recom']['Qsatisfy']='';
        $_SESSION['recom']['Qsatisfya']='';
        $_SESSION['recom']['Qwho']='';


    header('Location: recomface.php');
    excit();
    }elseif ($_POST['answer']=='d') {
        $_SESSION['recom']['Qa']=$_POST['answer'];
        $_SESSION['recom']['Q1']='';
        $_SESSION['recom']['Qfa']='';
        $_SESSION['recom']['Qc']='';
        $_SESSION['recom']['Qf']='';
        $_SESSION['recom']['Qba']='';
        $_SESSION['recom']['Qb']='';
        $_SESSION['recom']['Qchara']='';
        $_SESSION['recom']['Qwhen']='';
        $_SESSION['recom']['Qba']='';
        $_SESSION['recom']['Qb']='';
        $_SESSION['recom']['Qha']='';
        $_SESSION['recom']['Qh']='';
        $_SESSION['recom']['Qwhoa']='';
        $_SESSION['recom']['Qwhob']='';
        $_SESSION['recom']['Qsatisfy']='';
        $_SESSION['recom']['Qsatisfya']='';
       $_SESSION['recom']['Qwho']='';

    header('Location: recomHhow.php');
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
            <a class="title" href="/index.php">Home</a>
            <a class="title" href="itiran.php">嬢一覧</a>
        </header>
        <div class="container">
            <h1 class="theme">おすすめを紹介！</h1>
            <p class="theme">(いくつかの質問に答えてください)</p>

            <form method="POST" action="recomendation.php">
                <div class="section">

                    <h3>
                        <span>Q.</span>何で選ぶ？
                    </h3>
                    <ul>
                        <li>a. 顔</li>
                        <li>b. 体型</li>
                        <li>c. 乳</li>
                        <li>d. ヤれればそれで良い</li>
                    </ul>
                    <input type="radio" name="answer" value="a" checked>a
                    <input type="radio" name="answer" value="b">b
                    <input type="radio" name="answer" value="c">c
                    <input type="radio" name="answer" value="d">d
                </div><br>
                <input type="submit" class="btn btn-primary" value="次へ!">
            </form>


        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>