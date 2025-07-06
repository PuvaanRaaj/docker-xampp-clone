<?php
echo "<h2>Docker-XAMPP-Clone running PHP ".PHP_VERSION."</h2>";
$pdo = new PDO('mysql:host=db;dbname=devdb', 'dev', 'secret');
echo "<p>MariaDB connection OK!.</p>";
