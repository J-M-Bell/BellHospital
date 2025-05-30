<?php include("top.php"); ?>

<?php
    //get patient login information
    $employee = $_GET;

    //set username and password variables
    $username = $db->quote($employee["username"]);
    $password = $db->quote($employee["password"]);
    $occupation = $employee["occupation"];

    $employees;
    $employeeinfo;
    if ($occupation == "Doctor") {
        try {
            $employees = $db->prepare("SELECT *
                                        FROM jmb0288db.Doctor 
                                        WHERE (Username = $username AND Passkey = $password)
                                        LIMIT 1;"); 
            $employees->execute();
            $employees = $employees->fetchAll(PDO::FETCH_ASSOC);                            
        }
        catch (PDOException $e) {
            echo 'unable to retrieve data';
             echo $e->getMessage();
            exit();
        }    
    }
    else if ($occupation == "Administrator") {
        try {
            $employees = $db->prepare("SELECT *
                                        FROM jmb0288db.Administrator 
                                        WHERE (Username = $username AND Passkey = $password)
                                        LIMIT 1;"); 
            $employees->execute();
            $employees = $employees->fetchAll(PDO::FETCH_ASSOC);                            
        }
        catch (PDOException $e) {
            echo 'unable to retrieve data';
             echo $e->getMessage();
            exit();
        } 
    }
    else if ($occupation == "Nurse") {
        try {
            $employees = $db->prepare("SELECT *
                                        FROM jmb0288db.Nurse 
                                        WHERE (Username = $username AND Passkey = $password)
                                        LIMIT 1;"); 
            $employees->execute();
            $employees = $employees->fetchAll(PDO::FETCH_ASSOC);                            
        }
        catch (PDOException $e) {
            echo 'unable to retrieve data';
             echo $e->getMessage();
            exit();
        } 
    }
    else {
        try {
            $employees = $db->prepare("SELECT *
                                        FROM jmb0288db.Technician 
                                        WHERE (Username = $username AND Passkey = $password)
                                        LIMIT 1;"); 
            $employees->execute();
            $employees = $employees->fetchAll(PDO::FETCH_ASSOC);                            
        }
        catch (PDOException $e) {
            echo 'unable to retrieve data';
             echo $e->getMessage();
            exit();
        }  
    }
    
    foreach ($employees as $id) {
        $employeeinfo = $id;
    }

    //create placeholder variables
    $firstname = $employeeinfo["First_Name"];
    $lastname = $employeeinfo["Last_Name"];
    $email = $employeeinfo["Email"];
    $phonenumber = $employeeinfo["Phone_Number"];
    $age = $employeeinfo["Age"];
    $addressline1 = $employeeinfo["Address_Line1"];
    $addressline2 = $employeeinfo["Address_Line2"];
    $city = $employeeinfo["City"];
    $state = $employeeinfo["State_Of_Residence"];
    $zipcode = $employeeinfo["Zip_Code"];
    $shifttype = $employeeinfo["Shift_Type"];
    
?>
    <div class = "profile">
        <h3><?=$firstname ?>&nbsp;<?=$lastname ?>'s Profile<h3>
            <ul>
                <li>
                    <label>Email: </label><?=$email?>
                </li>
                <li>
                    <label>Phone Number: </label><?=$phonenumber?>
                </li>
                <li>
                    <label>Age: </label><?=$age?>
                </li>
                <li>
                    <label>Occupation: </label><?=$occupation?>
                </li>
                <li>
                    <label>Shift Type: </label><?=$shifttype?>
                </li>
            </ul>
            <p>
                Address: <br />
                <?=$addressline1?>
                <?php 
                    if ($addressline2 != "") {
                ?>
                    <br />
                    <?=$addressline2?>
                <?php 
                    }
                ?>
                <br />
                <?=$city?>, <?=$state?> <?=$zipcode?>    
            </p>
    </div>
    <br/>
        
<?php include("bottom.html"); ?>