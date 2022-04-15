<?php

include 'db.php';

$name =  $_POST['name'];
$email =  $_POST['email']; 
$password =  $_POST['password'];
$phone =  $_POST['phone'];


$sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`)
VALUES (NULL, '$name','$email','$password','$phone')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>