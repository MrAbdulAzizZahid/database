<h1>Database <?php
session_start();

if (isset($_SESSION['NAME'])) {
    header('location: index.php');
}



include_once 'db.php';
?></h1>


<?php
$PasswordError = '';
$NameError = '';

if (isset($_POST['submit'])) {
    $name = $_POST['NAME'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM users WHERE Name='$name' AND Password='$password' ";
    $query = mysqli_query($con, $sql);

    // if (empty($Password) || empty($name)) {
    //     $PasswordError = 'Enter your Password';
    //     $NameError = 'Enter Your Name';
    // } else {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $_SESSION['NAME'] = $row['NAME'];
                $_SESSION['Password'] = $row['Password'];
            }

            header('location:index.php');
        } else {
            echo 'No result found';
        }
    }
// }
?>
<form action="login.php" method="POST">
    <input type="text" name="NAME" placeholder="name">

    <input type="text" name="Password" placeholder="Password">
    <input type="submit" name="submit">
</form>