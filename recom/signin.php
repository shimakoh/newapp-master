<?php
session_start();


require '../vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));

require('dbconnect.php');

$errors=array();

if (!empty($_POST)) {
  $name=htmlspecialchars($_POST['input_name']);
  $password=htmlspecialchars($_POST['password']);

  if ($name!=''&& $password!='') {
    $sql='SELECT * FROM users WHERE username=$1';
    $data=[$name];
    $result=pg_query_params($sql,$data);
    $record=pg_fetch_array($result,NULL,PGSQL_ASSOC);


      if ($record == false) {
        $errors['signin']='failed';
      }


      if ($password=$record['password']) {
        $_SESSION['recom']['id']=$record['id'];
        $_SESSION['recom']['name']=$record['username'];


        header('Location: recomendation.php');
        exit();
      }else{

        $errors['signin']='failed2';
      }

  }else{
    $errors['signin']='blank';
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
        </header>
        <div class="container">
            <h1 class="theme">サインイン画面！</h1>
            <p class="theme">(21の女優・シチュエーションをコンプリート！)</p>
            <form method="POST" action="signin.php">
                <div class="section">

                    <h3>
                        <label for="name">ユーザー名</label>
                        <input type="text" name="input_name" class="form-control" id="name" placeholder="cote de pablo">
                        <?php if(isset($errors['signin']) && $errors['signin']=='blank') { ?>
                        <p class="text-danger">ユーザー名とパスワードを正しく入力してください</p>
                        <?php } ?>
                        <?php if(isset($errors['signin']) && $errors['signin']=='failed') { ?>
                        <p class="text-danger">サインインに失敗しました!</p>
                        <?php } ?>
                        <?php if(isset($errors['signin']) && $errors['signin']=='failed2') { ?>
                        <p class="text-danger">サインインに失敗しました!!!!</p>
                        <?php } ?>
                    </h3>
                    <h3>
                        <label for="name">パスワード</label>
                        <input type="password" name="password" class="form-control" id="name" placeholder="4~16文字">
                    </h3>

                </div><br>
                <input type="submit" class="btn btn-primary" value="oppai!!">
            </form>


        </div>
        <footer class="header">
            <p>AV only for you!!</p>
        </footer>
    </div>
</body>

</html>