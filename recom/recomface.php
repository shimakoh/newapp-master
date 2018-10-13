<?php
session_start();

require '../vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));
$_SESSION['recom']['error1']=1;
$Q1='';

if(!empty($_SESSION['recom']['error2'])){
    header('Location: error.php');
    excit();
}

if (isset($_POST['answer_f'])) {
    if ($_POST['answer_f']=='a' || $_POST['answer_f']=='b') {
        $_SESSION['recom']['Qf']=$_POST['answer_f'];


    header('Location: recombody.php');
    excit();
    }elseif ($_POST['answer_f']=='c') {
        $_SESSION['recom']['Qfa']=$_POST['answer_f'];



    header('Location: recomHhow.php');
    excit();
    }
}


if (isset($_POST['answerc'])) {
    if ($_POST['answerc']=='a' || $_POST['answerc']=='b' || $_POST['answerc']=='c') {
        $_SESSION['recom']['Qc']=$_POST['answerc'];

        header('Location: recombody.php');
        excit();
    }

}

if (isset($_POST['answer_b'])) {
    if ($_POST['answer_b']=='a' || $_POST['answer_b']=='b') {
        $_SESSION['recom']['Qb']=$_POST['answer_b'];
 


        header('Location: recomHhow.php');
        excit();
    }elseif ($_POST['answer_b']=='c') {
        $_SESSION['recom']['Qba']=$_POST['answer_b'];


        header('Location: recom4.php');
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

<?php if ($_SESSION['recom']['Q1']=='a') { ?>
            <form method="POST" action="recomface.php">
                <div class="section">
                    <h3><span>Q1.</span>理想の顔は？</h3>
                    <ul>
                        <li>a. かわいい</li>
                        <li>b. 綺麗</li>
                        <li>c. ブス</li>
                    </ul>
                    <input type="radio" name="answer_f" value="a" checked>a
                    <input type="radio" name="answer_f" value="b">b
                    <input type="radio" name="answer_f" value="c">c
                </div><br>
                <input type="submit" class="btn btn-primary" value="次へ!">
            </form>
<?php } ?>

<?php if ($_SESSION['recom']['Q1']=='b' ){ ?>
            <form method="POST" action="recomface.php">
                <div class="section">
                    <h3><span>Q2.</span>理想の体型は？</h3>
                    <ul>
                        <li>a. ぽっちゃり</li>
                        <li>b. ガリ/普通</li>
                        <li>c. ヤれればそれで良い</li>
                    </ul>
                    <input type="radio" name="answer_b" value="a" checked>a
                    <input type="radio" name="answer_b" value="b">b
                    <input type="radio" name="answer_b" value="c">c
                </div><br>
                <input type="submit" class="btn btn-primary" value="回答する!">
            </form>
<?php } ?>


<?php if ($_SESSION['recom']['Q1']=='c') { ?>
            <form method="POST" action="recomface.php">
                <div class="section">
                    <h3><span>Q1.</span>大きさの好みは？</h3>
                    <ul>
                        <li>a. 巨乳</li>
                        <li>b. 貧乳</li>
                        <li>c. 普通</li>
                    </ul>
                    <input type="radio" name="answerc" value="a" checked>a
                    <input type="radio" name="answerc" value="b">b
                    <input type="radio" name="answerc" value="c">c
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