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
        
        <div class="maintop">

         <h1>Project 1 - Brick Breaker</h1>
         <h3>Touch to start!</h3>

        <div class="game">
            
               <iframe
        src="brick-breaker/build/web/index.html"
        width="430"
        height="460"
        style="border: none; border-radius: 12px; overflow: hidden;">
    </iframe>
    </div>

        </div>
      </div>
 </div>
 <div class="side">
    <section class="project-card">
</section>
 <button class="side-toggle"> Contact</button>
 <aside class="side-panel">
<form action="contact-submit.php" method="POST" id="contactForm">
   <p>Please fill this form to keep in touch.</p>
  <input type="text" name="name" placeholder="Your name" required>
  <input type="email" name="email" placeholder="Your email" required>
  <textarea name="message" placeholder="Your message" required></textarea>
  <button type="submit">Send enquiry</button>
  <p id="formMessage"></p>
</form>
</aside>
 </div>
             <?php require_once "footer.php"?>

</div>
  


<script>
const toggle = document.querySelector(".menu-toggle");
const navCont = document.querySelector(".nav-cont");

const sideToggle = document.querySelector(".side-toggle");
const side = document.querySelector(".side");

toggle.addEventListener("click", () => {
  navCont.classList.toggle("active");
  side.classList.remove("active");
});

sideToggle.addEventListener("click", () => {
  side.classList.toggle("active");
  navCont.classList.remove("active");
});
</script>
</body>
 
</html>