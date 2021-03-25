<?php
session_start();
unset($_SESSION['firstName']);
require 'layouts/_navbar.php';
?>

<fieldset class="pingu-redirect">
<p id="oups">Oh, on dirait que tu es perdu ...</p>
<img id="pingu-image" class="pingu" src="assets/images/mode%20pingu/PictoPinguColor.png" alt="" srcset="">
</fieldset>

<script>
oups = document.getElementById('oups')
pingu = document.getElementById('pingu-image')
setTimeout(() => {
    oups.innerHTML = "Quelque chose se passe sur le site ..."
    pingu.setAttribute("src", "assets/images/LogoPingu.gif")
}, 5000);
setTimeout(() => {
    document.location.href = "/"
}, 10000);
</script>

<?php
require 'layouts/_footer.php';
?>