<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kallam Samad</title>
</head>
<body>
    
<?php require_once "nav.php"?>
<div class="maindiv">
<div class="wrapper"> 
    <div class="main">
        
        <div class="maintop"></div>

       <ul class="mainmiddle">

    <li class="sentence1">
        <i class="fa-brands fa-github"></i>
        Github:
        <a href="https://github.com/KallamSamad">
            KallamSamad
        </a>
    </li>

    <li class="sentence2">
        <i class="fa-solid fa-envelope"></i>
        Work email:
        Kallam.Samad@student.shu.ac.uk
    </li>

    <li class="sentence3">
        <i class="fa-solid fa-envelope"></i>
        Personal email:
        kallamsamad@gmail.com
    </li>

    <li class="sentence4">
        <i class="fa-brands fa-linkedin"></i>
        LinkedIn:
        <a href="https://www.linkedin.com/in/kallam-samad-1657773b1/">
            Kallam Samad
        </a>
    </li>

    <li class="sentence5">
        <i class="fa-brands fa-facebook"></i>
        Facebook:
        <a href="https://www.facebook.com/kallam.samad.73">
            Kallam Samad
        </a>
    </li>

    <li class="sentence6">
        <i class="fa-brands fa-instagram"></i>
        Instagram:
        <a href="https://www.instagram.com/kallamsamad/">
            @kallamsamad
        </a>
    </li>

</ul>
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