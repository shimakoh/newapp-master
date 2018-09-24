<?php 
session_start();

$_SESSION['recom']['Qf'];

require '../vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));


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
    <title>Avメイカー</title>
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

<?php if ($_SESSION['recom']['Qf']=='a' || $_SESSION['recom']['Qf']=='b' ||
           isset($_SESSION['recom']['Qc'])){ ?>
            <form method="POST" action="recombody.php">
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


        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>