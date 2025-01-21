<?php

if(isset($_POST['submit'])){
    header('Location:read.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read PDFs using PHP</title>
</head>
<style type="text/css">
    *{
        font-family: sans-serif;
    }
    .container{
        height: 34rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    button{
        height: 50px;
        width: 220px;
        background-color: crimson;
        border: 1px solid black;
        outline: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
    }
    .hero{
        padding-top: 90px;
    }
</style>
<body>
    <div class="container">
        <div class="wrapped">
            <h1 class="hero">Read PDFs using PHP scrit</h1>
        </div>
        <br><br><br><br>
        <div class="wrapper">
            <img src="git.png" class="image" height="300px" width="200px"/>
        </div>
        <br><br><br>
        <div class="wrapper">
            <form method="POST">
                <button type="submit" name="submit" value="submit">Read Pdf</button>
            </form>
        </div>
        <div class="wrapper">
            <h3>Made by <span>Vânia Morais</span></h3>
        </div>
    </div>
</body>
</html>