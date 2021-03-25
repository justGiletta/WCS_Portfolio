<?php
session_start();
isset($_SESSION['firstName']) ? ($_SESSION['firstName'] != "Pingu" ? header('Location: index.php') : false) : false;
unset($_SESSION['firstName']);
require 'layouts/_navbar.php';
?>
<div class="content">
    <fieldset class="pingu-redirect">
        <p id="oups">Oh, on dirait que tu es perdu ...</p>
        <img id="pingu-image" class="pingu" src="assets/images/mode%20pingu/PictoPinguColor.png" alt="" srcset="">
    </fieldset>
</div>

<script>
oups = document.getElementById('oups')
pingu = document.getElementById('pingu-image')
setTimeout(() => {
    oups.innerHTML = "Quelque chose se passe sur le site ..."
    pingu.setAttribute("src", "assets/images/pingu-gif-hd.gif")
    setTimeout(() => {
        localStorage.setItem('pinguMode', true)
        document.location.href = "/"
    }, 2500);
        
}, 2500);

</script>

<?php
require 'layouts/_footer.php';
?>
