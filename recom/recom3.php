<?php
session_start();

require '../vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));

// $Q3='';
 
if (isset($_POST['answerwho'])) {
    if ($_POST['answerwho']=='a') {
        $_SESSION['recom']['Qwho']=$_POST['answerwho'];

        header('Location: recom4.php');
        excit();
    }elseif ($_POST['answerwho']=='b') {
        $_SESSION['recom']['Qwhoa']=$_POST['answerwho'];

        header('Location: recom4.php');
        excit();
    }elseif ($_POST['answerwho']=='c') {
        $_SESSION['recom']['Qwhob']=$_POST['answerwho'];

        header('Location: answer.php');
        excit();
    }
}

if (isset($_POST['answersatisfy'])) {
    if ($_POST['answersatisfy']=='a' || $_POST['answersatisfy']=='b') {
        $_SESSION['recom']['Qsatisfy']=$_POST['answersatisfy'];

        header('Location: recom4.php');
        excit();
    }elseif ($_POST['answersatisfy']=='c') {
        $_SESSION['recom']['Qsatisfya']=$_POST['answersatisfya'];


        header('Location: answer.php');
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
        </header>
        <div class="container">
            <h1 class="theme">おすすめを紹介！</h1>
            <p class="theme">(いくつかの質問に答えてください)</p>

<?php if ($_SESSION['recom']['Qh']=='a') { ?>
            <form method="POST" action="recom3.php">
                <div class="section">
                    <h3><span>Q3.</span>誰としたの？</h3>
                    <ul>
                        <li>a. 彼女</li>
                        <li>b. セフレ</li>
                        <li>c. ワンナイト</li>
                    </ul>
                    <input type="radio" name="answerwho" value="a" checked>a
                    <input type="radio" name="answerwho" value="b">b
                    <input type="radio" name="answerwho" value="c">c
                </div><br>
                <input type="submit" class="btn btn-primary" value="回答する!">
            </form>
<?php } ?>

<?php if ($_SESSION['recom']['Qha']=='b' || $_SESSION['recom']['Qha']=='c') { ?>
            <form method="POST" action="recom3.php">
                <div class="section">
                    <h3><span>Q3.</span>その頻度で満足してる？</h3>
                    <ul>
                        <li>a. 問題ない！</li>
                        <li>b. もっとしたい...</li>
                        <li>c. 今すぐ出したい！！！！</li>
                    </ul>
                    <input type="radio" name="answersatisfy" value="a" checked>a
                    <input type="radio" name="answersatisfy" value="b">b
                    <input type="radio" name="answersatisfy" value="c">c
                </div><br>
                <input type="submit" class="btn btn-primary" value="回答する!">
            </form>
<?php } ?>

        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>