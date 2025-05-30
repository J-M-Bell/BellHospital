<!DOCTYPE html>
<html>
    <head>
        <title>Bell Hospitals of Alabama</title>
        <link href = "hospital.css" type = "text/css" rel = "stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
    </head>
    <body>
        <?php 
            //connect to database
            $db = new PDO("mysql:host=sysmysql8.auburn.edu;dbname=jmb0288db", "jmb0288", "YasmeenG1"); 

            //create state list
            $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District Of Columbia", "Florida", "Georgia", "Hawaii",  
            "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi",  
            "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma",  
            "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia",  
            "Wisconsin", "Wyoming");
        ?>
        <div id ="bannerarea">
            <img src = "images/bellLogo.png" alt = "bell logo"/>
            <h1 class = "header">Bell Hospitals of Alabama</h1><br><br>
        </div>
            <ul class = "header">
                <li>
                    <a href = "index.php">Home</a>
                </li>
                <li>
                    <a href = "news.php">News</a>
                </li>
                <li>
                    <a href = "staff.php">Staff</a>
                </li>
                <li>
                    <a href = "treatments.php">Treatments</a>
                </li>
                <li>
                    <a href = "signupPatient.php">Patient Portal</a>
                </li>
                <li>
                    <a href = "signupEmployee.php">Employee Portal</a>
                </li>
            </ul>
        
            