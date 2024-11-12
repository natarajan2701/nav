<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers from 1 to 100</title>
    <style>
        
body{
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #4CAF50;
}
ul {
    list-style-type: none;
    padding: 0;
    width: 300px;
}
li {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 5px 0;
    padding: 10px;
    transition: background-color 0.3s;
}
li:hover {
    background-color: #e0f7fa;
}
    </style>
    </head>
<body>
    <div>
        <h1>Even Numbers from 1 to 100</h1>
        <ul>
            <?php
            // Loop through numbers from 1 to 100
            for ($i = 1; $i <= 100; $i++) {
                // Check if the number is even
                if ($i % 2 == 0) {
                    // Print the even number in a list item
                    echo "<li>$i</li>";
                }
            }
            ?>
        </ul>
    </div>
</body>
</html>


