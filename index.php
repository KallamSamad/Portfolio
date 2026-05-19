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

<div class="wrapper"> 
    <div class="main">
        
        <div class="maintop"></div>

        <div class="mainmiddle">
            <p>Hello! I'm Kallam, a computer science student from Sheffield Hallam University.</p>
        </div>
            <?php require_once "footer.php"?>
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