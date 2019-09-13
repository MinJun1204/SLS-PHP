<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>선인고 노트북 관리 시스템</title>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./src/css/style.css">
    
    <!-- jQuery 3.4.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Table Export -->
    <!-- <script type="text/javascript" src="./src/extension/tableExport/libs/js-xlsx/xlsx.core.min.js"></script> -->

    <script>
        $(document).ready(function() {
            $('#export').click(function() {
                location.href = './export.php';
            });
        })
    </script>
</head>
<body>
    <main>
        <button id="export">Excel 파일 다운로드</button>
        <table>
            <thead>
                <tr>
                    <th>순번</th>
                    <th>구분</th>
                    <th>사용자</th>
                    <th>노트북 번호</th>
                    <th>시각</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './connect.php';

                $query = 'SELECT * FROM `list`';
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['type'] == '대여') {
                            echo '<tr><td>' . $row['id'] . '</td><td class="aquamarine">' . $row['type'] . '</td><td>' . $row['user'] . '</td><td>' . $row['laptop'] . '</td><td>' . $row['time'] . '</td></tr>';
                        } else {
                            echo '<tr><td>' . $row['id'] . '</td><td class="burlywood">' . $row['type'] . '</td><td>' . $row['user'] . '</td><td>' . $row['laptop'] . '</td><td>' . $row['time'] . '</td></tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>