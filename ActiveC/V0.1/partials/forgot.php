<?php
require "config.php";
?>

<html>
<head></head>
<body>
<div class="content">
    <?php
    \Fr\LS::forgotPassword();
    ?>
</div>
</body>
</html>



<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<div id ="login_container">

    <div id="login_form">
        <br>
        <h3>Forgot Password</h3>
        <form method="post" action="index.html" class="login">
            <p>
                <label for="login">Email: </label>
                <input type="text" name="login" id="login" value="Example@example.com" onfocus="if($(this).val()=='Example@example.com')$(this).val('')" onblur="if($(this).val()=='')$(this).val('Example@example.com')">
            </p>

            <p class="login-submit">
                <button type="submit" class="login-button">Send</button>
            </p>
        </form>
        <p class="forgot-password"><a href="#/login">Back To Login</a></p>
    </div>

</div>