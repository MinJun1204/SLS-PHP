<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>선인고 노트북 관리 시스템</title>
    
    <link rel="stylesheet" href="./src/css/style.css">
    
    <!--    jQuery 3.4.1    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#booking, #using').click(function() {
                location.href = './lend.php';
            });
            
            $('#return').click(function() {
                location.href = './return.php';
            });
        })
    </script>

    <style>
        #version {
             margin-top: 35%;

        }
        footer {
            color: aquamarine;
            font-size: 1.2rem;
        }

        input[type="text"] {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>선인고 노트북 관리 시스템</h1>

    <form action="./process.php" method="post"> 
        <input type="text" name="user" placeholder="이름">
        <br>
        <input type="submit" name="todo" value="대여">
        <input type="submit" name="todo" value="반납">
    </form>
   
    <!--
    <span id="time">
        <select id="select1">
            <optgroup label="사용 시간">
                <option value="2">1교시</option>
                <option value="3">2교시</option>
                <option value="4">3교시</option>
                <option value="5">4교시</option>
                <option value="6">5교시</option>
                <option value="7">6교시</option>
                <option value="8">7교시</option>
            </optgroup>
        </select>
        <span>부터</span>
        
        <select id="select2">
            <optgroup label="사용 시간">
                <option value="1">1교시</option>
                <option value="2">2교시</option>
                <option value="3">3교시</option>
                <option value="4">4교시</option>
                <option value="5">5교시</option>
                <option value="6">6교시</option>
                <option value="7">7교시</option>
            </optgroup>
        </select>
        <span>까지</span>
    </span>
    -->
    
    <!-- <span id="process">
        <button id="booking">예약</button>
        <button id="using">사용</button>
    <button id="return">반납</button>
    </span> -->

    <footer>
        <p id="version">SLS Aquamarine<br>Build 56401</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
</body>
</html>