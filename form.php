
<?php ?>
<aside class="side-panel">
<form action="contact-submit.php" method="POST" class="contactForm">
   <p>Please fill this form to keep in touch.</p>
  <input class="name" type="text" name="name" placeholder="Your name" required>
  <input class="email" type="email" name="email" placeholder="Your email" required>
  <textarea class="message" name="message" placeholder="Your message" required></textarea>
  <button id="submit" type="submit">Send enquiry</button>
  <p id="formMessage"></p>
</form>
</aside>

<script>
const inputs = document.querySelectorAll(".name, .email, .message");
const submit = document.getElementById("submit");

function validateForm() {
    const allFilled = Array.from(inputs).every(input => input.value.trim() !== "");
    submit.disabled = !allFilled;
}

inputs.forEach(input => {
    input.addEventListener("input", validateForm);
});

validateForm(); 

</script>