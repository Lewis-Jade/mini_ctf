


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The game plan ctf</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="SCRIPTS/main.js" defer></script>


</head>
<body>

<header>
    <a href="frat.html">Cyb3rS3c fr4t4n1ty</a>
    <a href="dev.php">About Developer</a>

    <img src="IMG/no-audio.png"  id="audio" alt="">
  
</header>
    <section>
       
        <img src="IMG/matrix-hacker-background.png" id="man" alt="mr.h4ck3r" >
        <img  id="myimage"src="IMG/myimage.webp" alt="">
      
            <img  src="IMG/matrix.jpg" alt="mr.h4ck3r" id="banner">
            <p>"Welcome to the Mini CTF: Uncover secrets,<br>solve challenges." <br>click here! 👉<strong><a href="#chaln" id="str">start</a></strong>"</p>
            <div class="art">
                <!-- <p id="disc">Art by:The one who must not be named.</p> -->
            </div>
         <img id="gif" src="IMG/758X.gif" alt="matrix-walker">
     
    </section>
    <section class="content" id="chaln">
        <div class="instruct">
            <h3 class="typing-hd">Instractions</h3>
            <hr>
           
         
            <ul>
                <li><strong>1.</strong>Copy the link below and paste it in the terminal..click enter.</li>
                <li><strong>2.</strong>Open Th_Flag directory, then use `cat instructions.txt` for details..</li>
                <li><strong>3.</strong>Navigate to the etc/ directory.</li>
                <li><strong>4.</strong>Find the hidden directory and the file inside it.</li>
                <li><strong>5.</strong>Get the flag from the file</li>
                <li><strong>6.</strong>Return to this page and submit it below.</li>
            </ul>
          
        </div>

        <div class="link">
          <div class="copy-link">
            <h3>Copy the link  below.</h3>
            <input type="text" name="" id="link"  placeholder="git clone https://github.com/Lewis-Jade/Th_Flag.git"  value="git clone https://github.com/Lewis-Jade/Th_Flag.git">
            <i class="fa-solid fa-copy" id="copy-btn"></i>
          </div>
        </div>
        <form action="flag.php"  method="POST" >
            <h3>Found the flag?</h3>
            <input type="text" name="flag-input"  placeholder="Flag goes here...">
          <button>submit flag</button>
        </form>
    </section>
    <audio id="background-music" autoplay muted loop>
        <source src="IMG/mini_ctf.mp3" type="audio/mp3">
       
      </audio>

</body>
</html>

