<?php
session_start();
require('./recom/dbconnect.php');

require './vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));

$errors=array();

if (!empty($_POST)) {
    $password= $_POST['password'];
    $name = $_POST['input_name'];
    if ($name=='') {
        $errors['name']='blank';
    }
    if ($password=='') {
        $errors['pass']='blank';
    }

    if (empty($errors)) {
        $_SESSION['recom']['name']=$_POST['input_name'];
        $name=$_SESSION['recom']['name'];
        $_SESSION['recom']['pass']=$_POST['password'];
        $password=$_SESSION['recom']['pass'];
        $sql = 'INSERT INTO users(username,password) VALUES($1,$2)';
        // $sql = 'INSERT INTO users SET username=$1,password=$2';
        $data = array($name,$password);
        // $data = array($name,password_hash($password, PASSWORD_DEFAULT));
        // $stmt = $dbh->prepare($sql);
        // $stmt->execute($data);
        $result=pg_query_params($sql,$data);

        $sql='SELECT id FROM users WHERE username=$1';
        $data = array($name);
        // $stmt = $dbh->prepare($sql);
        // $stmt->execute($data);
        $result=pg_query_params($sql,$data);
        // $record = $stmt->fetch(PDO::FETCH_ASSOC);
        $record=pg_fetch_array($result,NULL,PGSQL_ASSOC);
        $_SESSION['recom']['id']=$record['id'];

        header('LOCATION:./recom/signin.php');
        // exit();
        pg_close($dbh);
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
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="title" href="./recom/recomendation.php">Home</a>
        </header>
        <header class="header">
        </header>
        <div class="container">
            <h1 class="theme">名前を入力してください！</h1>
            <p class="theme">(名前を入力すると、後から履歴を確認できます。)</p>
            <form method="POST" action="index.php">
                <div class="section">

                    <h3>
                        <label for="name">ユーザー名</label>
                        <input type="text" name="input_name" class="form-control" id="name" placeholder="cote de pablo">
                        <?php if (isset($errors['name']) && $errors['name']=='blank') {?>
                          <p class="text-danger">ユーザー名を入力してください</p>
                        <?php } ?>
                    </h3>
                    <h3>
                        <label for="name">パスワード</label>
                        <input type="password" name="password" class="form-control" id="name" placeholder="4~16文字">
                        <?php if (isset($errors['pass']) && $errors['pass']=='blank') {?>
                          <p class="text-danger">パスワードを入力してください</p>
                        <?php } ?>
                    </h3>

                </div><br>
                <input type="submit" class="btn btn-primary" value="チャレンジ!!">
                <a href="./recom/signin.php" style="float: right;padding-top: 6px;" class="text-success">
                    サインイン
                </a>
            </form>


        </div>
        <footer class="header">
            <p>Quiz, PHP practice 2018.</p>
        </footer>
    </div>
</body>

</html>