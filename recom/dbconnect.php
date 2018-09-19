<?php
// $dsn='mysql:dbname=newapp;host=localhost';
// $user='root';
// $password='';
// $dbh=new PDO($dsn,$user,$password);


// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $dbh->query('SET NAMES utf8');

$dbh=pg_connect("host=ec2-107-21-233-72.compute-1.amazonaws.com
  dbname=d8d4vfvq90vt9l
  user=vtbrdmdmgqyrnf
  password=0b8a98efa8ce4bdef3e2b194c26f8c63faabcd8f07c35b6879c62dc91ab806ed");

// require '../vendor/autoload.php';
// \Cloudinary::config(array(
//     "cloud_name" => "hb2ekbyxa",
//     "api_key" => "935614219356682",
//     "api_secret" => "3tTB_g7_AP4j4hRkReEWhm9zHu0"
// ));

?>