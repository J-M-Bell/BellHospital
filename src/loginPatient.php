<?php include("top.php"); ?>

<div>
    <form action = "profilePatient.php" method = "get">
        <fieldset>
            <legend>Returning Patient:</legend>
            <label>
                <strong>Username:</strong>
                <input type = "text" name = "username" size = "16"/>
            </label><br />
            <label>
                <strong>Password:</strong>
                <input type = "password" name = "password" size = "16"/>
            </label><br />
            <input type = "submit" value = "Log In" />
            <a href = "signupPatient.php">
                <input type = "button" value = "Create New Account" />
            </a>
        </fielset>     
    </form>
</div>


<?php include("bottom.html"); ?>