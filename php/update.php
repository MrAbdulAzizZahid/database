<?php

include_once 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $Password = $_POST['Password'];
    $email = $_POST['E-mail'];
    $ID = $_POST['id'];

    $sql2 = "UPDATE `users` SET `name`='$name',`password`='$Password',`E-mail`='$email' WHERE id = '$ID'";
    $query2 = mysqli_query($con, $sql2);

    if ($query2) {
        header('location: index.php');
    } else {
        echo 'Data cannot be inserted';
    }
}
?>