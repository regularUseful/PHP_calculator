<DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br />
        <button type="submit" value="submit" name="submit">Submit</button>
    </form>
    <p>The answer is:</p>
    <?php
        if(isset($_GET["submit"])){
            $operator = $_GET["operator"];
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            switch($operator){
                case "None":
                    echo "Please pick an operator";
                break;
                case "Add":
                    echo $num1 + $num2;
                break;
                case "Subtract":
                    echo $num1 - $num2;
                break;
                case "Multiply":
                    echo $num1 * $num2;
                break;
                case "Divide":
                    echo $num1 / $num2;
                break;
            }
        };
    ?>
</body>