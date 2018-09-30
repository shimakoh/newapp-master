<?php 
require '../vendor/autoload.php';
require('dbconnect.php');


// \Cloudinary::config(array(
//     "cloud_name" => "hoqcb5m25",
//     "api_key" => "867285216379377",
//     "api_secret" => "kWv8Z3zei67qmqlOpmtiqLzxL5g"
// ));
 ?>

<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
  <title>test</title>
  <link href="<?php echo  cloudinary_url('https://res.cloudinary.com/hoqcb5m25', array('type' => 'fetch'));?>">
</head>
<body>
<header>練習</header>
<h1>
   <img src="http://res.cloudinary.com/hoqcb5m25/image/upload/v1538030778/avimg/abemi.jpg" >
</h1>
</body>
</html>