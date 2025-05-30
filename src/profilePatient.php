<?php include("top.php"); ?>

<?php
    //get patient login information
    $patient = $_GET;

    //set username and password variables
    $username = $db->quote($patient["username"]);
    $password = $db->quote($patient["password"]);
    
    $patientinfo;
    $patients;
    try {
        //query db for the correct patient information
        $patients = $db->prepare("SELECT *
                                    FROM jmb0288db.Patient
                                    WHERE Username = $username AND Passkey = $password
                                    LIMIT 1;");
        $patients->execute();
        $patients = $patients->fetchAll(PDO::FETCH_ASSOC);

    }
    catch (PDOException $e) {
        echo 'unable to retrieve data';
         echo $e->getMessage();
        exit();
    }
    
    //print_r($patients);
    foreach ($patients as $id) {
        $patientinfo = $id;
    }

    //create placeholder variables
    $firstname = $patientinfo["First_Name"];
    $lastname = $patientinfo["Last_Name"];
    $email = $patientinfo["Email"];
    $phonenumber = $patientinfo["Phone_Number"];
    $age = $patientinfo["Age"];
    $addressline1 = $patientinfo["Address_Line1"];
    $addressline2 = $patientinfo["Address_Line2"];
    $city = $patientinfo["City"];
    $state = $patientinfo["State_Of_Residence"];
    $zipcode = $patientinfo["Zip_Code"];
    $insuranceprovider = $patientinfo["Insurance_Provider"];
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
                    <label>Insurance Provider: </label><?=$insuranceprovider?>
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
                ?><br />
                <?=$city?>, <?=$state?> <?=$zipcode?>    
            </p>            
        </div>
        <br/>

<?php include("bottom.html"); ?>