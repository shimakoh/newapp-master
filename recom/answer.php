<?php
session_start();

require '../vendor/autoload.php';
require('dbconnect.php');


if($_SESSION['recom']['Qc']=='b' && $_SESSION['recom']['Qb']=='b'){
    $sql='SELECT name,j_file FROM actresses WHERE id=1';
}elseif($_SESSION['recom']['Qf']=='b' && $_SESSION['recom']['Qb']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=3';
}elseif($_SESSION['recom']['Qf']=='b' && $_SESSION['recom']['Qb']=='b' &&
                            $_SESSION['recom']['Qwho']=='b'){
    $sql='SELECT name,j_file FROM actresses WHERE id=4';
}elseif($_SESSION['recom']['Qf']=='b' && $_SESSION['recom']['Qha']=='c' &&
                            $_SESSION['recom']['Qsatisfy']=='b' ){
    $sql='SELECT name,j_file FROM actresses WHERE id=5';
}elseif($_SESSION['recom']['Qc']=='c' && $_SESSION['recom']['Qha']=='b' ){
    $sql='SELECT name,j_file FROM actresses WHERE id=12';
}elseif($_SESSION['recom']['Qc']=='c' $_SESSION['recom']['Qwho']=='a'){
    $sql='SELECT name,j_file FROM actresses WHERE id=13';
}elseif($_SESSION['recom']['Qha']=='b' && $_SESSION['recom']['Qsatisfy']=='b'){
    $sql='SELECT name,j_file FROM actresses WHERE id=14';
}elseif($_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qh']=='a' &&
                             $_SESSION['recom']['Qwhob']=='c' ||
                           $_SESSION['recom']['Qa']=='d' && $_SESSION['recom']['Qha']=='c' &&
                             $_SESSION['recom']['Qsatisfy']=='c' ||
                           $_SESSION['recom']['Qfa']=='c' && $_SESSION['recom']['Qwhob']=='c' ){
    $sql='SELECT name,j_file FROM actresses WHERE id=16';
}elseif($_SESSION['recom']['Qha']=='C' && $_SESSION['recom']['Qwhen']=='c'){
    $sql='SELECT name,j_file FROM actresses WHERE id=18';
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

<body>
    <div class="wrapper">
        <header class="header">
            <a class="title" href="recomendation.php">Home</a>
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
session_destroy();
?>
