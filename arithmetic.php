<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation</title>
    <style>
        
form{
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    padding-right:10px ;
    gap: 10px;
}
.form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: left;
    gap: 10px;
    background-color: bisque;
    width: 30%;
    height: 45vh;
    border-radius: 20px;
}
</style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Simple Calculation</h2>
            <form action="" method="post">
                <label for="num1">Input 1</label>
                <input type="number" name="num1" id="num1" required>
                <label for="num2">Input 2</label>
                <input type="number" name="num2" id="num2" required>
                <select name="option" id="">
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="divide">Division</option>
                </select>
                <input type="submit" name="submit" id="">
            </form>
        </div>

<?php
if(isset($_POST['submit'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['option'];

    switch($ch){
        case 'add':
            $r = $a + $b;
            echo "Addition: " . $r;
            break;
        case 'sub':
            $r = $a - $b;
            echo "Subtraction: " . $r;
            break;
        case 'mul':
            $r = $a * $b;
            echo "Multiplication: " . $r;
            break;
        case 'divide':
            if ($b == 0) {
                echo "Error: Division by zero is not allowed.";
            } else {
                $r = $a / $b;
                echo "Division: " . $r;
            }
            break;
        default:
            echo "Invalid input.";
    }
}
?>
    </div>
</body>
</html>
 


