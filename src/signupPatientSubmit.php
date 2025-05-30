<?php include("top.php"); ?>

<?php 
    //save employee form data
    $newPatient = $_POST;

    // print_r($newPatient);
    
    //create variables for patient form elements
    $firstname = $db->quote($newPatient["firstname"]);
    $lastname = $db->quote($newPatient["lastname"]);
    $email = $db->quote($newPatient["email"]);
    $phonenumber = $db->quote($newPatient["phonenumber"]);
    $age = $db->quote($newPatient["age"]);
    $addressline1 = $db->quote($newPatient["addressline1"]);
    $addressline2 = $db->quote($newPatient["addressline2"]);
    $city = $db->quote($newPatient["city"]);
    $state = $db->quote($newPatient["state"]);
    $zipcode = $db->quote($newPatient["zipcode"]);
    $username = $db->quote($newPatient["username"]);
    $password = $db->quote($newPatient["password"]);
    $insuranceprovider = $db->quote($newPatient["insuranceprovider"]);

    //create variabels for emergency contact form elements
    $emfirstname = $db->quote($newPatient["emfirstname"]);
    $emlastname = $db->quote($newPatient["emlastname"]);
    $relationship = $db->quote($newPatient["relationship"]);
    $emphonenumber = $db->quote($newPatient["emphonenumber"]);
    $emaddressline1 = $db->quote($newPatient["emaddressline1"]);
    $emaddressline2 = $db->quote($newPatient["emaddressline2"]);
    $emcity = $db->quote($newPatient["emcity"]);
    $emstate = $db->quote($newPatient["emstate"]);
    $emzipcode = $db->quote($newPatient["emzipcode"]);

    //insert patient information into db
    $db->query("INSERT INTO jmb0288db.Patient 
                (Username, Passkey, First_Name, Last_Name, Email, 
                Phone_Number, Age, Address_Line1, Address_Line2, City, State_Of_Residence, 
                Zip_Code, Insurance_Provider) 
                VALUES 
                ($username, $password, $firstname, $lastname, $email,
                $phonenumber, $age, $addressline1, $addressline2, $city, $state, 
                $zipcode, $insuranceprovider);");

    $patientid;
    $ids;
    try {
        //queries db for correct Patient_ID
        $ids = $db->prepare("SELECT Patient_ID
                            FROM jmb0288db.Patient
                            WHERE (Username = $username AND Passkey = $password)
                            LIMIT 1;");
        $ids->execute();
        $ids = $ids->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        echo 'unable to retrieve data';
         echo $e->getMessage();
        exit();
    }

    //sets patient_id
    foreach ($ids as $id) {
        $patientid = $id["Patient_ID"];
    }

    $patientid = $db->quote($patientid);
    //inserts emergency contact that belongs to the particular patient
    $db->query("INSERT INTO jmb0288db.Emergency_Contact 
                    (Patient_ID, First_Name, Last_Name, Phone_Number, Address_Line1,
                     Address_Line2, City, State_Of_Residence, Zip_Code, Relationship) 
                    VALUES 
                    ($patientid, $emfirstname, $emlastname, $emphonenumber, $emaddressline1, 
                     $emaddressline2, $emcity, $emstate, $emzipcode, $relationship);");
?>

<p>Thank you for signing up to Bell Hospitals of Alabama.</p>
<p>Please Log In to View Profile <br />
    <a href = "loginPatient.php">
        <button>Log In</button>
    </a>
</p>

<?php include("bottom.html"); ?>