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
        
        
        input[type="checkbox"] {
            display: none;
        }

        .cspan {
            display: inline-block;
            text-align: center;
            width: 30px;
            height: 30px;
            background-color: #DDD;
            margin: 5px;    
        }

        .blue {
            background-color: #5CD1E5;
        }
    </style> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

    <form action="./lend.php">
    <?php
    // MySQL 서버 접속

    $user = $_POST['user']; 
    $servername = 'localhost';
    $username = 'root';
    $password = '111111';
    $db = 'id10675326_suninsls';

    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
        die("접속 실패: " . mysqli_connect_error() . '<hr><p>관리자에게 문의하세요</p>');
    }
    $query = "UPDATE `sls` SET `user` = '{$user}' WHERE `id` = 1";
    if (mysqli_query($conn, $query)) {
        echo '현재 대여 가능한 노트북'.'<br>';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }

    // 사용 중이 아닌 노트북 리스트 출력'

    echo '<table>';
    $query = 'SELECT `id` FROM `sls` WHERE `c1` = 0';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i ++;
            echo '<input type="checkbox" name="laptop[]" value="' . $i . '" id="c' . $i . '">';
            echo '<label for="c' . $i . '">';
            echo '<span class="cspan">' . $i . '</span>';
            echo '</label>';
        #    echo '<tr>' . '<td> <button class="btn" id="' . $row['id'] . '">' . $row['id'] . '</button></td>';
        }
    }
    echo '</table>'
    ?>

    <input type="submit" value="대여">
    </form>
    <script>
        $(document).ready(function() {
            $('.cspan').click(function(event) {
                $(this).toggleClass('blue');
            });
         });
    </script>
</body>
</html>
