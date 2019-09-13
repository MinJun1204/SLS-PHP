<?php

function query() {
    include './connect.php';

    $arr = $_POST['laptop'];
    $user = $_POST['user'];
    $type = $_POST['todo'];
    $time = date("Y-m-d H:i:s");
    $arr2 = implode(' | ', $arr);

    $query = "INSERT INTO list VALUES (NULL, '$type', '$user', '$arr2', '$time');";

    if ($type == '대여') {
        $type = 1;
    } else {
        $type = 0;
        $user = '';
    }

    $query .= "UPDATE sls SET user = '$user', c1 = $type WHERE id = $arr[0]";
    for ($i = 1; $i < sizeof($arr); $i ++) {
        $query .= " OR id = $arr[$i]";
    }

    if (mysqli_multi_query($conn, $query)) {
        echo '처리되었습니다' . '<br>';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
        echo '<hr><p>오류가 발생하였습니다. 다시 시도해 주십시오.</p>';
    }
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

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <main>
        <?php query(); ?>
        <p>5초 후 초기 화면으로 이동합니다</p>
    </main>
</body>
</html>