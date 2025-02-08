<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Found the Flag</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="SCRIPTS/main.js"></script>
    
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
            color: #00FF00;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        h3 {
            font-size: 18px;
            text-align: center;
            padding: 10px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(9, 211, 9, 0.3);
        }
        
        div {
            background: rgba(12, 12, 12, 0.6);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(9, 211, 9, 0.3);
            transition: transform 0.3s ease-in-out;
        }
        
        div:hover {
            transform: scale(1.05);
        }
        
        p {
            font-size: 14px;
            color: #fff;
        }
        
        a {
            margin-top: 10px;
            color: #00FF00;
            text-decoration: none;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0px 4px 6px rgba(9, 211, 9, 0.3);
            transition: all 0.3s;
        }
        
        a:hover {
            background: #00FF00;
            color: #000;
            transform: scale(1.1);
        }
        
        #source-cd {
            background: rgba(100, 100, 141, 0.425);
            color: #fff;
        }
        
        img {
            height: 200px;
            width: 300px;
            margin-bottom: 20px;
        }
        
        @media (max-width: 600px) {
            div {
                width: 90%;
                padding: 15px;
            }
            p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <img src="IMG/Emhs.gif" alt="">
    <?php
        if(isset($_SESSION['message'])) {
            echo '<strong>' . $_SESSION['message'] . '</strong>';
        }
    ?>
    <div>
        <h3>Keep going for more challenges! 😎</h3>
        <p>"Thank you for participating in the challenge! Your effort and curiosity are appreciated. Keep learning, hacking ethically, and exploring new challenges ahead!"</p>
        <i class="fas fa-skull-crossbones"></i>
        <a href="dev.php">Share your experience</a>
        <a href="https://github.com/Lewis-Jade/mini_ctf" id="source-cd">Source Code</a>
    </div>
    <audio id="background-music" autoplay muted loop>
        <source src="IMG/victory.mp3" type="audio/mp3">
    </audio>
</body>
</html>
