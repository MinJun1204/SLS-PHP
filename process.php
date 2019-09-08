<html> 
<title>선인고 노트북 관리 시스템</title>
<head>
    <style>
        tr {
            width: 100%;
            height: 10rem;
        }
    
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: solid 1px black;
            padding: 20px;
            width: 50%;
            font-size: 2rem;        /* 1rem = 16px */
        }

        button {
            background-color: white;
        }
    </style> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<?php
    // MySQL 서버 접속

    $user = $_POST['user']; 
    $servername = 'localhost';
    $username = 'root';
    $password = '111111';
    $db = 'id10675326_suninsls';

    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
        die("데이터베이스 접속 실패: " . mysqli_connect_error() . '<hr><h1>관리자에게 문의하세요</h1>');
    }
    $query = "UPDATE `sls` SET `user` = '{$user}' WHERE `id` = 1";
    if (mysqli_query($conn, $query)) {
        echo '현재 대여 가능한 노트북'.'<br>';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }

    // 사용 중이 아닌 노트북 리스트 호출'

    echo '<table>';
    $query = 'SELECT `id` FROM `sls` WHERE `c1` = 0';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>' . '<td> <button class="btn" id="' . $row['id'] . '">' . $row['id'] . '</button></td>';
        }
    }
    echo '</table>'
    ?>

    <script>
        var count = 0;
        $(document).ready(function() {
            $('.btn').click(function() {
                count = count + 1;
                if (count % 2 == 0) {
                    $(this).css('background-color', 'white');
                } else {
                    $(this).css('background-color', '#5CD1E5');
                }
            });
         });
    </script>
</body>
</html>
