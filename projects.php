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
                    
<div class="project-justify">

  <h2>Brick Breaker Game (Python / Pygame)</h2>

  <p>
    A 2D arcade-style Brick Breaker game built using Python and Pygame,
    featuring real-time physics, collision detection, sound effects, and
    interactive gameplay mechanics.
  </p>

  <h3>Core Features</h3>
  <ul>
    <li>Interactive paddle-controlled gameplay where the player prevents the ball from falling while destroying bricks</li>
    <li>Score and time tracking system displayed in real-time during gameplay</li>
    <li>Sound effects for paddle collisions, brick destruction, and background music for immersion</li>
    <li>Start and Game Over screens with input-based state transitions</li>
    <li>Mobile-friendly controls including touch buttons and mute functionality</li>
  </ul>

  <h3>Object-Oriented Programming (OOP) Design</h3>
  <ul>
    <li><b>Encapsulation:</b> Game elements are encapsulated into classes such as Player, Ball, and Brick, each managing their own state and behaviour</li>
    <li><b>Abstraction:</b> Complex game logic (collision handling, rendering, physics) is abstracted into reusable methods</li>
    <li><b>Modularity:</b> Separation of concerns between game entities, rendering logic, and input handling</li>
    <li><b>Reusability:</b> Functions like draw_rectangle and collision detection are reused across multiple game objects</li>
  </ul>

  <h3>Technical Implementation</h3>
  <ul>
    <li>Built using Python with the Pygame library for graphics, input, and audio handling</li>
    <li>Axis-Aligned Bounding Box (AABB) collision detection for accurate physics interactions</li>
    <li>Vector-based movement system using pygame.math.Vector2 for smooth ball physics</li>
    <li>Async game loop using asyncio for responsive rendering and event handling</li>
    <li>Dynamic brick generation using nested loops and colour cycling</li>
  </ul>

  <h3>Game Logic Overview</h3>
  <p>
    The game initializes a player paddle, bouncing ball, and grid of bricks.
    The main loop continuously updates object positions, checks collisions,
    applies physics-based reflections, and renders all elements to the screen.
    The game ends when all bricks are destroyed or the ball falls below the screen.
  </p>


  <h3>Tech Stack</h3>
  <ul>
    <li>Python</li>
    <li>Pygame</li>
    <li>Asyncio</li>
  </ul>

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
  <div class="project-justify">

  <h2>Programming for Computer Science Project (C# Console Application)</h2>

  <p>
    A modular menu-driven console system built in C# demonstrating core programming concepts such as iteration,
    data types, input validation, file handling, and object-oriented programming through multiple integrated sub-programs.
  </p>

  <h3>Core Features</h3>
  <ul>
    <li>Interactive menu system allowing users to access multiple sub-programs including calculators and data systems</li>
    <li>Full CRUD Library Catalogue system with add, remove, filter, and list functionality</li>
    <li>Water Usage Calculator with time-based and cycle-based computation models</li>
    <li>Hexadecimal converter using algorithmic base-10 to base-16 conversion</li>
    <li>Persistent data storage using JSON and fallback handling for missing or corrupted files</li>
  </ul>

  <h3>Object-Oriented Programming (OOP) Design</h3>
  <ul>
    <li><b>Encapsulation:</b> Each module is separated into classes such as MenuHelper, LibraryCatalogue, Calculator, and HexCalc</li>
    <li><b>Abstraction:</b> Complex logic such as validation, file handling, and calculations is hidden behind reusable methods</li>
    <li><b>Modularity:</b> Each feature operates independently, improving maintainability and scalability</li>
    <li><b>Reusability:</b> Shared validation and menu functions reduce code duplication across the system</li>
  </ul>

  <h3>Technical Implementation</h3>
  <ul>
    <li>Built using C# with .NET and System libraries for file I/O and JSON serialization</li>
    <li>Robust input validation using TryParse for both integer and decimal inputs</li>
    <li>File handling using CSV and JSON for configuration and persistent storage</li>
    <li>Loop-driven menu system controlled by boolean state variables</li>
    <li>Error handling and fallback systems for missing or invalid external files</li>
  </ul>

  <h3>System Logic Overview</h3>
  <p>
    The program runs a continuous looped menu system that allows users to select different tools.
    Each module executes independently and returns control back to the main menu.
    The system continues running until the user explicitly selects the exit option.
  </p>

  <h3>Tech Stack</h3>
  <ul>
    <li>C# (.NET)</li>
    <li>System.IO (File Handling)</li>
    <li>System.Text.Json (Serialization)</li>
  </ul>

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
    <a href="https://taskbot-664411574564.europe-west2.run.app/index.php?page=home">
      Link to website
    </a>
    <h4>Staff Credentials</h4>
 
    <p><b>Username:</b> knightfall</p>
    <p><b>Password:</b> Staff123!</p>

    <div class="project-justify">

    <h1 style="text-align: center"><u>Taskbot</u></h1>
    <ul>
     <li> Full-stack CRUD application for managing tasks and task lists</li>
      <li> Role-based access control: users can only view their own tasks, admins can manage all entries</li>
     <li>  Secure authentication system with password hashing and prepared statements to prevent SQL injection</li>
     <li>  Built-in accessibility features including dark mode, high contrast mode, and adjustable text size</li>
     <li>  Database design with clear separation between authentication and task management logic</li>
      
 
    </ul>
    <h2 style="text-align: center"><u>Stack</u></h2>
    <ul>
      <li><b>Front-end - </b> Javascript, HTML, CSS</li>
      <li><b>Back-end - </b>PHP</li>
      <li><b>Database -</b>SQLITE</li>
    </ul>
    </div>
 

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