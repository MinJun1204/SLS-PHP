<?php

include './connect.php';

header("Content-type: application/vnd.ms-excel" );   
header("Content-type: application/vnd.ms-excel; charset=utf-8");
$filename = 'SLS-' . date('Ymd') . '.xls';
header("Content-Disposition: attachment; filename = $filename" );   
header("Content-Description: PHP7 Generated Data" );   

$query = 'SELECT * FROM `list`';
$result = mysqli_query($conn, $query);
$table = '<table>';
$table .= '<thead><tr><th>순번</th><th>구분</th><th>사용자</th><th>노트북 번호</th><th>시각</th></tr></thead>';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $table .= '<tr><td>' . $row['id'] . '</td><td>' . $row['type'] . '</td><td>' . $row['user'] . '</td><td>' . $row['laptop'] . '</td><td>' . $row['time'] . '</td></tr>';
    }
}

$table .= '</table>';  
  
echo "<meta content=\"application/vnd.ms-excel; charset=UTF-8\" name=\"Content-type\">";
echo $table;  
?>