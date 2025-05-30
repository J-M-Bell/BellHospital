<?php include("top.php"); ?>
<?php 
    //query treatments from db
    $treatments = $db->query("SELECT Treatment_Name FROM jmb0288db.Treatment;");
?>

<script src="signupEmployee.js" type="text/javascript"></script>
<div>
    <form action = "signupEmployeeSubmit.php" method = "post">
        <fieldset>
            <legend>New Employee Signup:</legend>

            <label>
                <strong>First Name: </strong>
                <input type = "text" name = "firstname" size = "16" required/>
            </label><br />
            <label>
                <strong>Last Name: </strong>
                <input type = "text" name = "lastname" size = "16" required/>
            </label><br />
            <label>
                <strong>Email: </strong>
                <input type = "email" name = "email" required/>
            </label><br />
            <label>
                <strong>Phone Number: </strong>
                <input type = "text" name = "phonenumber" size = "12" maxlength = "10" required/>
            </label><br />
            <label>
                <strong>Age: </strong>
                <input type = "number" name = "age" min = "18" max = "100" required/>
            </label><br />
            <label>
                <strong>Address Line 1: </strong>
                <input type = "text" name = "addressline1" required/>
            </label><br />
            <label>
                <strong>Address Line 2: </strong>
                <input type = "text" name = "addressline2"/>
            </label><br />
            <label>
                <strong>City: </strong>
                <input type = "text" name = "city" required/>
            </label><br />

            <!--populate ddl with name of US states-->
            <label><strong>State: </strong></label> 
            <select id= "stateDDL"  name = "state" required>
                <?php 
                    foreach ($states as $state) {
                ?>
                    <option><?= $state ?></option>
                <?php 
                    }
                ?>
            </select><br />
            <label>
                <strong>Zip Code: </strong>
                <input type = "number" name = "zipcode" size = "5" maxlength = "5" min = "10000" max = "99999" required/>
            </label><br />
            <label><strong>Shift Type: </strong></label>
            <select name = "shifttype" required>
                <option>1st Shift</option>
                <option>2nd Shift</option>
                <option>3rd Shift</option>
            </select><br />
            <label><strong>Occupation: </strong></label>
            <select id = "occupationDDL" name = "occupation" required>
                <option>Doctor</option>
                <option>Nurse</option>
                <option>Technician</option>
                <option>Administrator</option>
            </select><br />
            <label id = "experiencelabel">
                <strong>Years of Experience: </strong>
                <input id = "experience" type = "number" name = "experiencelevel" size = "3" maxlength = "2" min = "1" max = "99" required/>
            </label><br />
            <label id = "specialtylabel"><strong>Specialty: </strong></label>
            <select id= "specialtyDDL"  name = "specialty" required>
                <?php 
                    foreach ($treatments as $treatment) {
                ?>
                    <option><?= $treatment["Treatment_Name"] ?></option>
                <?php 
                    }
                ?>
            </select><br />
            <label>
                <strong>Username: </strong>
                <input type = "text" name = "username" size = "16"/>
            </label><br />
            <label> 
                <strong>Password: </strong>
                <input type = "password" name = "password" size = "16"/>
            </label><br />
            <input type = "submit" value = "Submit" />
            <a href = "loginEmployee.php">
                <input type = "button" value = "Log In" />
            </a>
        </fielset>
    </form>
</div>
                    
<?php include("bottom.html"); ?>

