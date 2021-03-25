<?php
session_start();
header('refresh:5;url=index.php'); //Renvoie sur l'index après 5 secondes

isset($_SESSION['firstName']) ? $name = $_SESSION['firstName'] : $name = '';
isset($_SESSION['famName']) ? $famName = $_SESSION['famName'] : $famName = '';
$email = $_SESSION['email'];

require 'layouts/_navbar.php'

?>
<fieldset>
    <div class="successfull">
        <?php 
            echo "<p>Thank you for your message <b>$name</b> <b>$famName</b></p>";
            echo "<p>An answer will be sent to your address: <b>$email</b></p><br>";
            echo "<p>You will be redirected in a few moments ... </p>"
        ?>
        <div class="lds-default">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</fieldset>
<?php
require 'layouts/_footer.php';


unset($_SESSION['message']);
unset($_SESSION['email']);