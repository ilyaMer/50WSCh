<?php
echo "<pre>/n";
$pdo = new PDO ('mysql:host=lockalhost;port=8889;dbname=members', 'ilya', 'zap');
$stmt = $pdo -> query("SELECT * FROM users");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  print_r($row);
}
echo "<pre>/n";

 ?>

//Эта форма делает вызов из базы данных 
