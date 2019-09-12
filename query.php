<?php

include './connect.php';

$arr = $_POST['laptop'];
$user = $_POST['user'];

if ($_POST['todo'] == '대여') {
    $todo = 1;
} else {
    $todo = 0;
    $user = '';
}

$query = "UPDATE sls SET user = '$user', c1 = $todo WHERE id = $arr[0]";
for ($i = 1; $i < sizeof($arr); $i ++){
    $query .= " OR id = $arr[$i]";
}

if (mysqli_query($conn, $query)) {
    echo '처리되었습니다' . '<br>';
} else {
    echo 'Error updating record: ' . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5;url=/" />
    <title>선인고 노트북 관리 시스템</title>
</head>
<body>
    <p>5초 후 초기 화면으로 이동합니다</p>
</body>
</html>