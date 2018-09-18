<!-- Это запускает соединение с базой данных -->
<?php
$pdo = new PDO('mysql:host=127.0.0.1;port=8889;dbname=members', 'ilya', 'zap');
//Устанавливаем режим сообщений об ошибках "выбрасывать исключения"
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
