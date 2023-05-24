
<?php

include_once 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
  

    $sql2 = "INSERT INTO users(NAME , Password) VALUES('$name' ,  '$Password' )";
    $query2 = mysqli_query($con, $sql2);

    if ($query2) {
        header('location: index.php');
    } else {
        echo 'Data cannot be inserted';
    }
}
?>
