<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
</head>
<body>
    <?php
        // The sort function is used to sort an array in ascending order by values
        $num = array(10,30,20,100,2,23);
        echo "<h1>sort()<h1>";
        sort($num);
        print_r($num);

        // The asort function is used to sort an associative array 
        // in ascending order by values while maintaining the association between keys and values.
        $assocArray = array('John' => 25, 'Jane' => 30, 'Bob' => 22);
        echo "<h1>asort()<h1>";
        asort($assocArray);
        print_r($assocArray);

        // The ksort function is used to sort an associative array 
        // in ascending order by keys while maintaining the association between keys and values.
        echo "<h1>ksort()<h1>";
        ksort($assocArray);
        print_r($assocArray);
    ?>
</body>
</html>