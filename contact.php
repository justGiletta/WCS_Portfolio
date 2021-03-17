<?php include 'layouts/_navbar.php'?>

<fieldset>
<p>Contact</p>
<form action="form.php">
        <label for="firstName"></label>
        <input type="text" id="firstName" name="firstName" placeholder="First name" value="<?php echo isset($_GET['firstName']) ? $_GET['firstName'] : '' ?>"><br>
        <div id="firstNameError">
            <?php if (isset($_GET['firstNameError'])) { ?>  
                <p class="error">
                    <?php echo $_GET['firstNameError']; ?>
                </p>
            <?php } ?>
        </div><br>
        <label for="famName"></label>
        <input type="text" id="famName" name="famName" placeholder="Familly name" value="<?php echo isset($_GET['famName']) ? $_GET['famName'] : '' ?>"><br>
        <div id="famNameError">
            <?php if (isset($_GET['famNameError'])) { ?>  
                <p class="error">
                    <?php echo $_GET['famNameError']; ?>
                </p>
            <?php } ?>
        </div><br>
        <label for="email"></label>
        <input type="text" id="email" name="email" placeholder="Email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : '' ?>"><br>
        <div id="emailError">
            <?php if (isset($_GET['emailError'])) { ?>  
                <p class="error">
                    <?php echo $_GET['emailError']; ?>
                </p>
            <?php } ?>
        </div><br>
        <label for="message"></label>
        <textarea type="text" id="message" name="message" rows="6" cols="40" placeholder="Message" value="<?php echo isset($_GET['message']) ? $_GET['message'] : '' ?>"></textarea>
        <div id="messageError">
            <?php if (isset($_GET['messageError'])) { ?>  
                <p class="error">
                    <?php echo $_GET['messageError']; ?>
                </p>
            <?php } ?>
        </div><br>
        <input type="submit" value="Submit">
    </form>    
</fieldset>

<?php include 'layouts/_footer.php'?>