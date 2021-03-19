<?php 
include 'layouts/_navbar.php';
?>

<fieldset>
<h1>Contact</h1><br>
<form action="functions/form.php">
        <label for="firstName">First name</label><br><br>
        <input type="text" id="firstName" name="firstName" placeholder="First name" value="<?php echo isset($_GET['firstName']) ? $_GET['firstName'] : '' ?>"><br>
        <!-- <div class="error" id="firstNameError">
            <?php if (isset($_GET['firstNameError'])) { ?>  
                <p class="error-div active-error">
                    <?php echo $_GET['firstNameError']; ?>
                </p>
            <?php } ?>
        </div><br> -->
        <br>
        <label for="famName">Familly name</label><br><br>
        <input type="text" id="famName" name="famName" placeholder="Familly name" value="<?php echo isset($_GET['famName']) ? $_GET['famName'] : false ?>"><br>
        <!-- <div class="error" id="famNameError">
            <?php if (isset($_GET['famNameError'])) { ?>  
                <p class="error-div active-error">
                    <?php echo $_GET['famNameError']; ?>
                </p>
            <?php } ?>
        </div>--><br>
        <label for="email">Email *</label><br><br>
        <input class="<?php echo isset($_GET['emailError'])? "required": "";?>" type="text" id="email" name="email" placeholder="Email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : '' ?>"><br>
        <div class="error" id="emailError">
            <?php if (isset($_GET['emailError'])) { 
                echo "<div class=\"error-div\"><i>&#9888;</i> ".$_GET['emailError']."</div>";
            }; ?>
        </div><br><br>
        <label for="message">Message *</label><br><br>
        <textarea class="<?php echo isset($_GET['messageError'])? "required": "";?>" type="text" id="message" name="message" rows="6" cols="40" placeholder="Message"><?php echo isset($_GET['message']) ? $_GET['message'] : '';?></textarea>
        <div class="error" id="messageError">
            <?php if (isset($_GET['messageError'])) { 
                 echo "<div class=\"error-div\"><i>&#9888;</i> ".$_GET['messageError']."</div>";
            } ?>
        </div><br>
        <input type="submit" value="Submit">
    </form>    
</fieldset>

<?php 
include 'layouts/_footer.php'?>