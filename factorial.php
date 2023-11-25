<!-- Write an embedded php script for displaying the factorial of numbers from 1 to 10 in a table in the
web page. Factorial should be calculated and returned from a function. The table headings should be
"Number" and "Factorial" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <table border="2">

        <thead>
            <tr>
                <th>Number</th>
                <th>Factorial</th>
            </tr>
        </thead>

        <tbody>
            <?php
                function fact($num){
                    $fact=1;
                    while($num > 0){
                        $fact = $fact * $num;
                        $num--;
                    }
                    return $fact;
                }

                for($i= 0; $i <= 10; $i++){
                    echo "<tr>";
                    echo "<td> $i </td>";
                    echo "<td>". fact($i) ."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        
    </table>
    
</body>
</html>