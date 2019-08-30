<html> 
    <title>
        출력창
    </title>
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
               border:solid 1.5px black;
               padding: 20px;
               width: 50%;
               font-size: 2rem; /* 1rem = 16px */
           }
           button {
               background-color: white;
           }
       </style> 
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
<?php
    $a=$_POST['user']; 
    $server="localhost";
    $user="root";
    $pw ="asdfasdf";
    $db="sls";

    $conn = mysqli_connect($server, $user, $pw, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query="update sls set user='$a' where id=1";
    if (mysqli_query($conn, $query)) {
        echo "현재 대여 가능한 노트북"."<br>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }






    // 사용중이 아닌 노트북 리스트 호출
    echo '<table>';
    $query="select id from sls where c1=0";
    $result=mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>" . "<td> <button class=\"btn \" id=\"".$row["id"]."\">" . $row["id"] . "</button></td>"; // <button id=1>
        }
    }
    echo '</table>'
    ?>
    <script>
        var count = 0;
         $(document).ready(function(){
            $(".btn").click(function(){
                count = count + 1;
                if (count % 2 == 0){
                    $(this).css('background-color','white');}
                else {$(this).css('background-color','#5CD1E5');}
            });
         });
    </script>
</body>
</html>
