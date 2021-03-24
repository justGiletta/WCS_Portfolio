<?php

header('refresh:5;url=index.php');//Renvoie sur l'index après 5 secondes

isset($_GET['firstName'])? $name = $_GET['firstName'] : $name = '';
isset($_GET['famName'])? $famName = $_GET['famName'] : $famName = '';
$email = $_REQUEST['email'];

require 'layouts/_navbar.php'

?>
    <div class="successfull">
        <?php 
            echo "<p>Thank you for your message<b>$name</b> <b>$famName</b></p>";
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
<?php
require 'layouts/_footer.php';

