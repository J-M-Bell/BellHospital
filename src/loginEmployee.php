<?php include("top.php"); ?>

<div>
    <form action = "profileEmployee.php" method = "get">
        <fieldset>
            <legend>Returning Employee:</legend>
            <label>
                <strong>Username:</strong>
                <input type = "text" name = "username" size = "16"/>
            </label><br />
            <label>
                <strong>Password:</strong>
                <input type = "password" name = "password" size = "16"/>
            </label><br />
            <label><strong>Occupation: </strong></label>
            <select id = "occupationDDL" name = "occupation" required>
                <option>Doctor</option>
                <option>Nurse</option>
                <option>Technician</option>
                <option>Administrator</option>
            </select><br />
            <input type = "submit" value = "Log In" />
            <a href = "signupEmployee.php">
                <input type = "button" value = "Create New Account" />
            </a>
        </fielset>
    </form>
</div>


<?php include("bottom.html"); ?>