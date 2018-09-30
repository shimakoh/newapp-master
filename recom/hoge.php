<?php 
require '../vendor/autoload.php';
require('dbconnect.php');


// \Cloudinary::config(array(
//     "cloud_name" => "hoqcb5m25",
//     "api_key" => "867285216379377",
//     "api_secret" => "kWv8Z3zei67qmqlOpmtiqLzxL5g"
// ));



$sql='SELECT j_file FROM actresses WHERE id=20';
$result=pg_query($sql);
$record=pg_fetch_array($result,NULL,PGSQL_ASSOC);


echo '<pre>';
var_dump($record);
echo '</pre>';

 ?>




<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
  <title>test</title> 
</head>
<body>
<header>練習</header>
<h1>
   <img src="http://res.cloudinary.com/hoqcb5m25/image/upload/v1538030778/avimg/abemi.jpg" >
<img src="<?php $record['j_file']; ?>">


</h1>
</body>
</html>