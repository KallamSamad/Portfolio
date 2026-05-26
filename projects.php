<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?v=51">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kallam Samad</title>
</head>

<body>

<?php require_once "nav.php"?>

<div class="maindiv">

    <div class="wrapper"> 
        <div class="main">

            <!-- HEADER WITH TYPING ANIMATION -->
            <h1 class="mainmiddle">
                <span class="sentencenull">My Projects so far...</span>
            </h1>

            <div class="maintop">

                <!-- PROJECT 1 -->
                <details class="project-card">
                    <summary style="display:flex; align-items:space-between;">
  <img src="Assets/Images/brick.svg" style="width:5%; height:auto;">
  Brick Breaker</summary>

                    <div class="project-content">

                        <h3>Touch to start!</h3>
                        <h4>NB - may take time to load</h4>

                        <iframe 
  src="brick-breaker/build/web/index.html"
  class="game-frame">
</iframe>

                    </div>
                </details>

                <!-- PROJECT 2 -->
                <details class="project-card">
  <summary class="project-summary">
    <img src="Assets/Images/terminal.svg">
    C# Console Project
  </summary>

  <div class="project-content">

    <iframe
      src="https://pfc-391078157863.europe-west1.run.app/"
      class="project-iframe">
    </iframe>

    <a href="https://pfc-391078157863.europe-west1.run.app/" target="_blank">
      Open Full App
    </a>

  </div>
</details>

                <!-- PROJECT 3 -->
               <details class="project-card">
  <summary class="project-summary">
    <img src="Assets/Images/bot.svg">
    TaskBot Full Stack Project
  </summary>

  <div class="project-content">

    <img src="Assets/Images/taskbot.png" class="project-img">

    <h4>Staff Credentials</h4>

    <p><b>Username:</b> knightfall</p>
    <p><b>Password:</b> Staff123!</p>

    <a href="https://taskbot-664411574564.europe-west2.run.app/index.php?page=home">
      Link to website
    </a>

  </div>
</details>

            </div>
        </div>
    </div>

    <!-- SIDE PANEL -->
    <div class="side">


        <button class="side-toggle">Contact</button>

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