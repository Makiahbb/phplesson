<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <input type="text" name="num1" placeholders="Number 1">
    <input type="text" name="num2" placeholders="Number 2">
    <select name ="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
<br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>If the answer is:</p>
    <?php
        if (isset($_GET['submit'])) {
            $result1= $_GET['num1'];
            $result2= $_GET['num2'];
            $operator= $_GET['operator'];
            switch ($operator) {
                case "None":
                    echo "You need to select a method";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                        echo $result1 * $result2;
                break;
                case "Divide":
                        echo $result1 / $result2;
            }
        }
    ?>
</body>
</html>