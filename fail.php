<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>failed!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap');

*{
    padding: 0;
    margin: 0;
    font-family: "Roboto Mono", serif;
    font-optical-sizing: auto;
    box-sizing: border-box;
}
        body{
            background: #000;
            justify-content: center;
            align-items: center;
            display: flex;
            height: 100vh;
        }
        section{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: #00000033;
            justify-content: center;
            align-items: center;
            display: flex;
            color: #fff;
        }
        .fail{
            height: 500px;
            width: 400px;
            justify-content: center;
            align-items: center;
            display: flex;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            background: #3a393969;
            border-radius: 8px;
            box-shadow: 2px 2px  3px #09d30931,
           -2px -2px  3px #09d30931;
        }
        a{
            text-decoration: none;
            color: #00ff00;
            background: #000000b0;
            width: 100px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;
            box-shadow: 2px 2px  3px #09d30931,
            -2px -2px  3px #09d30931;
            margin-top: 20px;
        }
        h3{
            color: #ff0000;
            position: absolute;
            top: 10px;
        }
        @media(max-width:600px){
            section{
                
                width: 100%;
            }
            .fail{
                top: 200px;
                position: absolute;
                height: 400px;
                width: 300px;
            }
            p{
                font-size: 9px;            }
        }
        strong{
            color:#00ff00;
        }
    </style>
</head>
<body>
    <img src="IMG/758X.gif" alt="">
    <section>
      <div class="fail">
        <h3>Incorrect Flag</h3>
        <?php
          if(isset($_SESSION['message'])){
            
             echo '<strong>'.$_SESSION['message'].'</strong>';

          }
        
        ?>
        <br>
        <br>
        <p>Check Th_Flag directory, retry `cat instructions.txt`, or verify hidden files.</p>
        <a href="index.php">Retry</a>
      </div>
    </section>
</body>
</html>