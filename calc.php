<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>

    <form method="GET">
        <input type="number" name="num1" id="num1" placeholder="number1">
        <input type="number" name="num2" id="num2" placeholder="number2">
        <select name="operator" id="operator">
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    
    <?php
        if (isset($_GET['submit'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch($operator){
                case 'Add' : 
                    echo "<h2 style= 'display: inline;'>The Answer is : </h2>".$num1 + $num2;
                    break;
                case 'Subtract' :
                    echo "<h2>The Answer is : </h2>".$num1 - $num2;
                    break;
                case 'Multiply' : 
                    echo "<h2>The Answer is : </h2>".$num1 * $num2;
                    break;
                case 'Divide' :
                    echo "<h2>The Answer is : </h2>".$num1 / $num2;
                    break;  

            }

        }

    ?>
    
</body>
</html>