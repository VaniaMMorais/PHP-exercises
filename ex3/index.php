<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator App</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        form input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-bottom: 2px solid crimson;
            font-size: 16px;
            outline: none;
        }
        form input[type="text"]:hover {
            border-bottom: 2px solid green;
        }
        select {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: crimson;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        button:hover {
            background-color: darkred;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
        .answer {
            color: green;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <h1 class="hero">PHP Calculator app</h1>
    <div class="container">
        <form action="" method="GET">
            <div class="answer">

                <?php
                    if(isset($_GET['submit'])){
                        $result1= $_GET['num1'];
                        $result2= $_GET['num2'];
                        $operator= $_GET['operator'];

                        switch($operator){
                            case "None":
                                echo"you need to select a method!!❌";
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
                            break;
                
                
                        }
                    }
                ?>

            </div>
        <br><br>
        <input type="text" name="num1" placeholder="Enter first number">
        <br><br>
        <input type="text" name="num2" placeholder="Enter second number">
        <br><br>
        <select name="operator" id="">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br><br><br>
        <button type="submit" value="submit" name="submit">Calculate</button>
        </form>
    </div>
    <h4 class="footer">Made By Vânia Morais</h4>
</body>
</html>
