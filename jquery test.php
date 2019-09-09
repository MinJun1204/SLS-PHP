<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
    #a{
        border: 2px solid green;
    }
</style>
</head>
<body>
    <div id="a">이 태그의 이름을 a라고 붙여준것 뿐이야</div>
    <button id="hide">보이기</button>
    <button id="show">숨기기</button>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#a").hide();    
            });
            $("#show").click(function(){
                $("#a").show();
            });
        });
    </script>
</body>
</html>