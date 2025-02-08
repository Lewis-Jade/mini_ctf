<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully found the flag</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="SCRIPTS/main.js"></script>
   
    
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
        color: #00FF00;
        justify-content: center;
        align-items: center;
        height: 100vh;
        display: flex;
        flex-direction:column;
    }
    h3{
        position: absolute;
        top: 2px;
        font-size: 15px;
        justify-content: center;
        align-items: center;
        align-content: center;
        display: flex;
        text-align: center;
        height: 44px;
        width: 100%;
        background: #000;
    }
    div{
        position: relative;
        height: 300px;
        width: 500px;
        background: #0c0c0c81;
        border-radius: 8px;
        justify-content: center;
        align-items: center;
       display: flex;
       flex-direction: column;
       text-align: center;
     
        
    }
    p{
        font-size: 14px;
        color: #fff;
    }
    img{
        height: 200px;
        width: 300px;
        position: absolute;
        top: 200px;

    }
    a{
        margin-top:10px;
        color: #00FF00;
        text-decoration: none;
        background: #00000077;
        width: 250px;
        box-shadow: 2px 2px  3px #09d30956,
        -2px -2px  3px #09d30956;
        border-radius: 8px;
    }
    a:hover{
        background: #000;
    }
    h4{
        color:#fff
    }
    #source-cd{
        background: rgba(100, 100, 141, 0.425);
        color: #fff;
    }
    @media(max-width:600px){
        div{
            position: absolute;
            top:200px;
            width: 250px;
            font-size: 10px;
        }
        strong{
            position:absolute;
            top:100px;
        }
    }
    </style>
</head>
<body>

    <img src="IMG/Emhs.gif" alt="">
    <?php
          if(isset($_SESSION['message'])){
            
             echo '<strong>'.$_SESSION['message'].'</strong>';

          }
        
        ?>
    <div>
        <h3> Keep going for more challenges!😎</h3>
        <p>"Thank you for participating in the challenge! Your effort and curiosity are appreciated. Keep learning, hacking ethicaly, and exploring new challenges ahead!"</p>
        <i class="fas fa-skull-crossbones"></i>
        <a href="dev.php">Share your experience</a>
        <a href="https://github.com/Lewis-Jade/mini_ctf"  id="source-cd">source code</a>
    </div>
    <audio id="background-music" autoplay muted loop>
        <source src="IMG/victory.mp3" type="audio/mp3">
       
      </audio>
</body>
</html>