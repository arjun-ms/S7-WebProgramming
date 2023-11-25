<?php
    $number = $_POST['numval'];
    if($number%2==0){
        echo "<h1>$number is Even</h1>";
    }
    else{
        echo "<h1>$number is Odd</h1>";
    }
    
?>