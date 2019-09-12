<?php

// MySQL 서버 접속

$servername = 'localhost';
$username = 'root';
$password = '111111';
$db = 'id10675326_suninsls';

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("접속 실패: " . mysqli_connect_error() . '<hr><p>관리자에게 문의하세요</p>');
}

?>