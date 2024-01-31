<?php 
    try {
        $host = "localhost";
        $dbname = "list_of_student";
        $user = "root";
        $password = "";

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
?>