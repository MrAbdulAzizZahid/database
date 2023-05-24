

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Data base  <?php include_once 'db.php';  ?></h1>

<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="name" >
    <input type="text" name="email" placeholder="email" >
    <input type="text" name="Password" placeholder="password"> 
    <input type="submit" name="submit" > 
</form>
<!-- <ul> -->
<?php
$sql = 'SELECT * FROM users ';
$query = mysqli_query($con, $sql);


if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<li>{$row["ID"]} | {$row["NAME"]} | {$row["Password"]} | {$row["E-mail"]} | 
        <a href='delete.php?hello=$row[ID]'>Delete </a> ||
        <a href='edit.php?id=$row[ID]'>Edit </a>
        </li>";
    }
} else {
    echo 'No result found';
}
?>
<!-- </ul> -->






</body>

</html>
