<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>none</option>
            <option>add</option>
            <option>subtract</option>
            <option>multiply</option>
            <option>divide</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">Calculate</button>
    </form>
    <p>The answer is: </p>

    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case 'none': 
                    echo 'select a method!';
                    break;
                case 'add': 
                    echo $result1 + $result2;
                    break;
                case 'subtract': 
                    echo $result1 - $result2;
                    break;
                case 'multiply': 
                    echo $result1 * $result2;
                    break;
                case 'divide': 
                    echo $result1 / $result2;
                    break;
            }
        }

    ?>
</body>
</html>