<?php 
include 'layouts/_navbar.php';
?>

<fieldset>
    <h1>Contact</h1><br>
    <form action="functions/form.php" method="POST">

        <div class="input-error">
            <div class="container">
                <label for="firstName">First name</label>
                <div id="firstNameSuggest">
                    <?php if (isset($_REQUEST['firstNameSuggest'])) { 
                        echo "<div class=\"suggest-div\"><i class=\"fas fa-question\"></i><span class=\"tooltiptext\">".$_REQUEST['firstNameSuggest']."</span></div>";
                    }; ?>
                </div>
            </div><br><br>
            <input class="<?php echo isset($_REQUEST['firstNameSuggest'])? "suggested": "";?>" type="text" id="firstName" name="firstName" placeholder="First name" value="<?php echo isset($_REQUEST['firstName']) ? $_REQUEST['firstName'] : false ?>"><br><br>
            
            </div>
        </div>

        <div class="input-error">
            <div class="container">
                <label for="famName">Familly name</label>
                <div id="famNameSuggest">
                    <?php if (isset($_REQUEST['famNameSuggest'])) { 
                        echo "<div class=\"suggest-div\"><i class=\"fas fa-question\"></i><span class=\"tooltiptext\">".$_REQUEST['famNameSuggest']."</span></div>";
                    }; ?>
                </div>
            </div><br><br>
            <input class="<?php echo isset($_REQUEST['famNameSuggest'])? "suggested": "";?>" type="text" id="famName" name="famName" placeholder="Familly name" value="<?php echo isset($_REQUEST['famName']) ? $_REQUEST['famName'] : false ?>"><br><br>
            </div>
        </div>
        
        <div class="input-error">
            <div class="container">
                <label for="email">Email</label>
                <div id="emailError">
                    <?php if (isset($_REQUEST['emailError'])) { 
                        echo "<div class=\"error-div\"><i class=\"fas fa-exclamation-triangle\"></i></i> ".$_REQUEST['emailError']."</div>";
                    }; ?>
                </div>
            </div><br><br>
            <input class="<?php echo isset($_REQUEST['emailError'])? "required": "";?>" type="text" id="email" name="email" placeholder="Email" value="<?php echo isset($_REQUEST['email']) ? $_REQUEST['email'] : false ?>"><br>
            
        </div><br>

        <div class="input-error">
            <div class="container">
                <label for="message">Message</label>
                <div id="messageError">
                    <?php if (isset($_REQUEST['messageError'])) { 
                        echo "<div class=\"error-div\"><i class=\"fas fa-exclamation-triangle\"></i> ".$_REQUEST['messageError']."</div>";
                    } ?>
                </div>
            </div><br><br>
            <textarea class="<?php echo isset($_GET['messageError'])? "required": "";?>" type="text" id="message" name="message" rows="6" cols="40" placeholder="Message"><?php echo isset($_REQUEST['message']) ? $_REQUEST['message'] : false;?></textarea>
            
        </div>

        <input type="submit" value="Submit">
    </form>    
</fieldset>
<?php 
include 'layouts/_footer.php'?>