<?php
    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "student";

    // //connect with mysql
    // $conn = new mysqli($serverName, $userName, $password, $dbName);

    // //find if there any error
    // if($conn->connect_error){
    //     die("Connection Faild: ".$conn->connect_error);
    // }

    // $sql = "SELECT * FROM information";
    // $result = $conn->query($sql);

    // if($result->num_rows > 0){
    //     while($row = $result->fetch_assoc()){
    //         echo "Name: {$row["name"]} - Birth Date: {$row["birth_date"]} - Phone: {$row["phone"]} - Gender: {$row["gender"]}<br>";
    //     }
    // }else{
    //     echo "No Result Found!";
    // }
    // $conn->close();

    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "student";

    // $connect = new mysqli($serverName, $userName, $password, $dbName);

    // if($connect->connect_error){
    //     die("Connection Faild: ".$connect->connect_error);
    // }

    // $sql = "SELECT * FROM information";
    // $result = $connect->query($sql);

    // if($result->num_rows > 0){
    //     while($row = $result->fetch_assoc()){
    //         echo "Name: {$row["name"]} - Birth Date: {$row["birth_date"]} - Phone: {$row["phone"]} - Gender: {$row["gender"]} <br>";
    //         }
    //     }else{
    //         echo "No Result Found";
    // }
    // $connect->close();

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "student";

    $connect = new mysqli($serverName, $userName, $password, $dbName);
    if($connect->connect_error){
        die("Connection is not success" . $connect->connect_error);
    }

    $sql = "SELECT * FROM information";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "Name: {$row["name"]} - Birth Date: {$row["birth_date"]} - Phone: {$row["phone"]} - Gender: {$row["gender"]} <br>";
        }
    }else{
        echo "No Result Found";
    }
   
?>