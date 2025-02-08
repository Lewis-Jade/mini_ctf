<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;700&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: "Roboto Mono", monospace;
            box-sizing: border-box;
        }
        
        body {
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        section {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        
        .fail {
            height: 500px;
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rgba(58, 57, 57, 0.8);
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(9, 211, 9, 0.3);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease-in-out;
        }
        
        .fail:hover {
            transform: scale(1.05);
        }
        
        a {
            text-decoration: none;
            color: #00ff00;
            background: rgba(0, 0, 0, 0.8);
            width: 120px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 6px rgba(9, 211, 9, 0.3);
            margin-top: 20px;
            transition: background 0.3s, transform 0.3s;
        }
        
        a:hover {
            background: #00ff00;
            color: #000;
            transform: scale(1.1);
        }
        
        h3 {
            color: #ff0000;
            margin-bottom: 15px;
        }
        
        strong {
            color: #00ff00;
        }
        
        @media (max-width: 600px) {
            .fail {
                height: 400px;
                width: 300px;
                padding: 15px;
            }
            
            p {
                font-size: 12px;
            }
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
        <p>Check <strong>Th_Flag</strong> directory, retry <code>cat instructions.txt</code>, or verify hidden files.</p>
        <a href="index.php">Retry</a>
      </div>
    </section>
</body>
</html>
