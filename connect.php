<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $address = $_POST['address'];

    //database connection

    $conn = new mysqli('localhost','root','','done');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);   
    }
    else{
        $stmt = $conn->prepare("insert into appointment(name,phone,email,service,price,date,address)
        values('$name', '$phone', '$email', '$service', '$price', '$date', '$address')");
        $stmt->execute();
        echo"appointment booked sucessfully.....";
        $stmt->close();
        $conn->close();

    }
    ?>