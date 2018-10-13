<?php 

session_start();

require '../vendor/autoload.php';
require('dbconnect.php');

$_SESSION['recom']['error6']=1;
if ($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qwho']=='a' &&
     $_SESSION['recom']['Qwhen']=='b' ||
         $_SESSION['recom']['Qc']=='b' && $_SESSION['recom']['Qwho']=='a' &&
     $_SESSION['recom']['Qwhen']=='b'){
    $sql='SELECT name,j_file FROM actresses WHERE id=2';
}elseif($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qb']=='b' &&
                              $_SESSION['recom']['Qwhen']=='c'){
    $sql='SELECT name,j_file FROM actresses WHERE id=6';
}elseif($_SESSION['recom']['Qf']=='a' && $_SESSION['recom']['Qba']=='c' &&
                            $_SESSION['recom']['Qchara']=='b' ){
    $sql='SELECT name,j_file FROM actresses WHERE id=7';
}elseif($_SESSION['recom']['Qfa']=='c' && $_SESSION['recom']['Qh']=='a' &&
                             $_SESSION['recom']['Qwho']=='a' && $_SESSION['recom']['Qchara']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=8';
}elseif($_SESSION['recom']['Qfa']=='c' && $_SESSION['recom']['Qb']=='a' &&
                             $_SESSION['recom']['Qwhen']='c'){
    $sql='SELECT name,j_file FROM actresses WHERE id=9';
}elseif($_SESSION['recom']['Qc']=='a' && $_SESSION['recom']['Qb']=='a' &&
                             $_SESSION['recom']['Qwhen']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=10';
}elseif($_SESSION['recom']['Qba']=='c' && $_SESSION['recom']['Qchara']=='c'){
    $sql='SELECT name,j_file FROM actresses WHERE id=11';
}elseif($_SESSION['recom']['Qc']=='a' && $_SESSION['recom']['Qb']=='a'&&
                           $_SESSION['recom']['Qchara']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=15';
}elseif($_SESSION['recom']['Qwhen']=='d'){
    $sql='SELECT name,j_file FROM actresses WHERE id=17';
}elseif($_SESSION['recom']['Qchara']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=19';
}elseif($_SESSION['recom']['Qwhen']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=21';
}else{
    $sql='SELECT name,j_file FROM actresses WHERE id=20';
}

$result=pg_query($sql);
$record=pg_fetch_array($result,NULL,PGSQL_ASSOC);
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
            <a class="title" href="itiran.php">嬢一覧</a>
        </header>
        <div class="container">
            <h1 class="theme">結果！</h1>
            <h1 class="theme">
                <h2>
                  <?php echo $record['name']; ?>
                </h2>
                  <img src="<?php echo $record['j_file']; ?>" width="80%">
            </h1>
        </div>
    </div>
</body>
</html>



<?php 
$sql = 'INSERT INTO itiran(jname,user_id) VALUES($1,$2)';
$data = array($record['name'], $_SESSION['recom']['id']);
$result=pg_query_params($sql,$data);

pg_close($dbh);

 ?>


<?php 
$_SESSION['recom']['error1']='';
$_SESSION['recom']['error2']='';
$_SESSION['recom']['error3']='';
$_SESSION['recom']['error4']='';
$_SESSION['recom']['error5']='';
$_SESSION['recom']['error6']='';

 ?>