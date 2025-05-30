<?php include("top.php"); ?>

<div>
    <form action = "signupPatientSubmit.php" method = "post">
        <fieldset>
            <legend>New Patient Signup:</legend>

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
            <label>
                <strong>Insurance Provider: </strong>
                <input type = "text" name = "insuranceprovider" required/>
            </label><br />

            <div>
                <p>Emergency Contact</p>
                <label><strong>Relationship: </strong></label> 
                <select name = "relationship" required>
                    <option>Father</option>    
                    <option>Mother</option>
                    <option>Sibling</option>
                    <option>Close Relative</option>
                    <option>Other</option>
                </select><br />
                <label>
                    <strong>First Name: </strong>
                    <input type = "text" name = "emfirstname" size = "16" required/>
                </label><br />
                <label>
                    <strong>Last Name: </strong>
                    <input type = "text" name = "emlastname" size = "16" required/>
                </label><br />
                <label>
                    <strong>Phone Number: </strong>
                    <input type = "text" name = "emphonenumber" size = "12" maxlength = "10" required/>
                </label><br />
                <label>
                <strong>Address Line 1: </strong>
                <input type = "text" name = "emaddressline1"/>
                </label><br />
                <label>
                    <strong>Address Line 2: </strong>
                    <input type = "text" name = "emaddressline2"/>
                </label><br />
                <label>
                    <strong>City: </strong>
                    <input type = "text" name = "emcity"/>
                </label><br />
                <label><strong>State: </strong></label> 
                <select id= "stateDDL"  name = "emstate">
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
                    <input type = "number" name = "emzipcode" size = "5" maxlength = "5" min = "10000" max = "99999"/>
                </label><br />
            </div>


            <br /><br /><label>
                <strong>Username: </strong>
                <input type = "text" name = "username" size = "16"/>
            </label><br />
            <label> 
                <strong>Password: </strong>
                <input type = "password" name = "password" size = "16"/>
            </label><br />
            

            <input type = "submit" value = "Submit" />
            <a href = "loginPatient.php">
                <input type = "button" value = "Log In" />
            </a>
        </fielset>
    </form>
</div>
                    
<?php include("bottom.html"); ?>

