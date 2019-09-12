<?php

$user = $_POST['user'];

function lend() {           // 사용 중이 아닌 노트북 리스트 출력'
    include './connect.php';
    
    echo '현재 대여 가능한 노트북' . '<br>';
    $query = 'SELECT `id`, `c1` FROM `sls`';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i ++;
            echo '<input type="checkbox" name="laptop[]" value="' . $i . '" id="c' . $i . '">';
            echo '<label for="c' . $i . '">';
            if ($row['c1'] == 1) {
                echo '<span class="cspan disabled">' . $i . '</span>';
            } else {
                echo '<span class="cspan">' . $i . '</span>';
            }
            echo '</label>';
        }
    }
    echo '<input type="submit" name="todo" value="대여">';
}

function turnIn() {         // 대여된 노트북 리스트 출력'
    include './connect.php';
    global $user;

    echo '노트북 목록' . '<br>';
    $query = 'SELECT `id`, `c1`, `user` FROM `sls`';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i ++;
            echo '<input type="checkbox" name="laptop[]" value="' . $i . '" id="c' . $i . '">';
            echo '<label for="c' . $i . '">';
            if ($row['user'] != $user) {
                echo '<span class="cspan disabled">' . $i . '</span>';
            } else {
                echo '<span class="cspan">' . $i . '</span>';
            }
            echo '</label>';
        }
    }
    echo '<input type="submit" name="todo" value="반납">';
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>선인고 노트북 관리 시스템</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

        .burlywood {
            background-color: BurlyWood;
        }

        .disabled {
            background-color: #F5F5F5;
        }

        * {
            user-select: none;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.cspan').click(function(event) {
                <?php

                if ($_POST['todo'] == "대여") {
                    echo "$(this).toggleClass('blue');";
                } else {
                    echo "$(this).toggleClass('burlywood');";
                }
                ?>
            });
            $('#user').val('<?= $user ?>');
        });
    </script>
</head>
<body>
    <form action="./query.php" method="post">
        <input type="hidden" name="user" id="user">
        <?php
            if ($_POST['todo'] == '대여') {
                lend();
            } else {
                turnIn();
            }
        ?>
    </form>
</body>
</html>