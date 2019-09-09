<?php

print_r($_GET['laptop']);
echo '<br>';

for($i=0;$i<sizeof($_GET['laptop']);$i++){
    $id = $_GET['laptop'][$i];
    $query="update sls set c1 = 1 where id=$id";
    echo $query . '<br>';

}


?>