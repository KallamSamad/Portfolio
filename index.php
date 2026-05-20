<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kallam Samad</title>
</head>
<body>
    
<?php require_once "nav.php"?>
<div class="maindiv">
<div class="wrapper"> 
    <div class="main">
        
        <div class="maintop"></div>

        <div class="mainmiddle">
            <p class="sentence1">Hello! I'm Kallam, a computer science student from Sheffield Hallam University.</p>
            <p class="sentence2">The purpose of this website is to showcase my programming ability and why I should be employed.</p>
            <p class="sentence3">Feel free to browse my projects, my resume and blog. I will actively make additions and changes to these projects.</p>
            <p class="sentence4">Do not hesitate to make any enquries, you can <a href="contact.php">contact me here</a> and fill in this form to keep in touch.</p>

        </div>
            <?php require_once "footer.php"?>
     </div>
 </div>
 <div class="side">
 <p>Feel free to browse projects</p>  
 </div>
</div>
  


<script>
const toggle = document.querySelector(".menu-toggle");
const navCont = document.querySelector(".nav-cont");

toggle.addEventListener("click", () => {
  navCont.classList.toggle("active");
});
</script>
</body>
 
</html>