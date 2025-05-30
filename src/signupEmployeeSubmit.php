<?php include("top.php"); ?>

<?php 
    //save employee form data
    $newEmployee = $_POST;

    //create variables for common form elements
    $firstname = $db->quote($newEmployee["firstname"]);
    $lastname = $db->quote($newEmployee["lastname"]);
    $email = $db->quote($newEmployee["email"]);
    $phonenumber = $db->quote($newEmployee["phonenumber"]);
    $age = $db->quote($newEmployee["age"]);
    $addressline1 = $db->quote($newEmployee["addressline1"]);
    $addressline2 = $db->quote($newEmployee["addressline2"]);
    $city = $db->quote($newEmployee["city"]);
    $state = $db->quote($newEmployee["state"]);
    $zipcode = $db->quote($newEmployee["zipcode"]);
    $shifttype = $db->quote($newEmployee["shifttype"]);
    $occupation = $newEmployee["occupation"];
    $experiencelevel = $db->quote($newEmployee["experiencelevel"]);
    $specialty = $db->quote($newEmployee["specialty"]);
    $username = $db->quote($newEmployee["username"]);
    $password = $db->quote($newEmployee["password"]);


    //create insert into queries for form submission
    if ($occupation == "Doctor") {
        $db->query("INSERT INTO jmb0288db.Doctor 
                    (Shift_Type, Username, Passkey, First_Name, Last_Name, Email, 
                    Phone_Number, Age, Address_Line1, Address_Line2, City, State_Of_Residence, 
                    Zip_Code, Years_Of_Experience, Specialty) 
                    VALUES 
                    ($shifttype, $username, $password, $firstname, $lastname, $email,
                    $phonenumber, $age, $addressline1, $addressline2, $city, $state, 
                    $zipcode, $experiencelevel, $specialty);");        
    }
    else if ($occupation == "Administrator") {
        $db->query("INSERT INTO jmb0288db.Administrator 
                    (Shift_Type, Username, Passkey, First_Name, Last_Name, Email, 
                    Phone_Number, Age, Address_Line1, Address_Line2, City, State_Of_Residence, 
                    Zip_Code) 
                    VALUES 
                    ($shifttype, $username, $password, $firstname, $lastname, $email,
                    $phonenumber, $age, $addressline1, $addressline2, $city, $state, 
                    $zipcode);");  
    }
    else if ($occupation == "Nurse") {
        $db->query("INSERT INTO jmb0288db.Nurse 
                    (Shift_Type, Username, Passkey, First_Name, Last_Name, Email, 
                    Phone_Number, Age, Address_Line1, Address_Line2, City, State_Of_Residence, 
                    Zip_Code) 
                    VALUES 
                    ($shifttype, $username, $password, $firstname, $lastname, $email,
                    $phonenumber, $age, $addressline1, $addressline2, $city, $state, 
                    $zipcode);");  
    }
    else {
        $db->query("INSERT INTO jmb0288db.Technician 
                    (Shift_Type, Username, Passkey, First_Name, Last_Name, Email, 
                    Phone_Number, Age, Address_Line1, Address_Line2, City, State_Of_Residence, 
                    Zip_Code) 
                    VALUES 
                    ($shifttype, $username, $password, $firstname, $lastname, $email,
                    $phonenumber, $age, $addressline1, $addressline2, $city, $state, 
                    $zipcode);"); 
    }
?>  

<p>Thank you for signing up to Bell Hospitals of Alabama.</p>
<p>Please Log In to View Profile <br />
    <a href = "loginEmployee.php">
        <button>Log In</button>
    </a>
</p>

<?php include("bottom.html"); ?>