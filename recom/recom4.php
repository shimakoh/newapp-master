<?php
session_start();

require '../vendor/autoload.php';
\Cloudinary::config(array(
    "cloud_name" => "hb2ekbyxa",
    "api_key" => "935614219356682",
    "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
));

if (!empty($_POST['answerchara'])) {
    $_SESSION['recom']['Qchara']=$_POST['answerchara'];

    header('Location: answer.php');
    excit();
}

if (!empty($_POST['answerwhen'])) {
    $_SESSION['recom']['Qwhen']=$_POST['answerwhen'];

    header('Location: answer.php');
    excit();
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
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="title" href="recomendation.php">Home</a>
        </header>
        <div class="container">
            <h1 class="theme">おすすめを紹介！</h1>
            <p class="theme">(いくつかの質問に答えてください)</p>

<?php if ($_SESSION['recom']['Qwho']=='a' || $_SESSION['recom']['Qba']=='c') { ?>
            <form method="POST" action="recom4.php">
                <div class="section">
                    <h3><span>Q.</span>求める性格は？</h3>
                    <ul>
                        <li>a. 従順/おとなしめ</li>
                        <li>b. Sっ気強め</li>
                        <li>c. 普通</li>
                    </ul>
                    <input type="radio" name="answerchara" value="a" checked>a
                    <input type="radio" name="answerchara" value="b">b
                    <input type="radio" name="answerchara" value="c">c
                </div><br>
                <input type="submit" class="btn btn-primary" value="回答する!">
            </form>
<?php } ?>

<?php if ($_SESSION['recom']['Qwhoa']=='b' || $_SESSION['recom']['Qsatisfy']=='a' ||
             $_SESSION['recom']['Qsatisfy']=='b' || $_SESSION['recom']['Qsatisfy']=='c') { ?>
            <form method="POST" action="recom4.php">
                <div class="section">
                    <h3><span>Q.</span>好みのシチュエーションは？</h3>
                    <ul>
                        <li>a. 背徳</li>
                        <li>b. イチャラブ</li>
                        <li>c. コスプレ</li>
                        <li>d. 何を見ても性欲が湧かない</li>
                    </ul>
                    <input type="radio" name="answerwhen" value="a" checked>a
                    <input type="radio" name="answerwhen" value="b">b
                    <input type="radio" name="answerwhen" value="c">c
                    <input type="radio" name="answerwhen" value="d">d
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