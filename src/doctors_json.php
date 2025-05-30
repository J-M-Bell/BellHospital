<?php 
    $db = new PDO("mysql:host=sysmysql8.auburn.edu;dbname=jmb0288db", "jmb0288", "YasmeenG1"); 

    try {
        $employees = $db->prepare("SELECT * FROM jmb0288db.Doctor"); 
        $employees->execute();
        $employees = $employees->fetchAll(PDO::FETCH_ASSOC);                            
    }
    catch (PDOException $e) {
        echo 'unable to retrieve data';
         echo $e->getMessage();
        exit();
    }
    
    $json = json_encode($employees);
    header("Content-type: application/json");
    print($json);
?>