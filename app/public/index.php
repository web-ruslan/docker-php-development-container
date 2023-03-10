<?php
phpinfo();
try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'host.docker.internal';
    $dbname = $_ENV['DB_DATABASE'];
    $user = $_ENV['DB_USERNAME'];
    $pass = $_ENV['DB_PASSWORD'];
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
}
