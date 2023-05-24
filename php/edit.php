
<?php
include_once 'db.php';
$ID = $_GET['id'];

$sql = "SELECT * from users WHERE id = '$ID'";
$query = mysqli_query($con, $sql);
?>
<h1>CAREFULLY TYPE</h1>

<?php while ($row = mysqli_fetch_assoc($query)) { ?>
<form action="update.php" method="POST">
        <input type="text" value='<?php echo $row["NAME"]; ?>' name="name" placeholder="name">
        <input type="text" name="Password" placeholder="address" value='<?php echo $row["Password"]; ?>'>
        <input type="text" name="E-mail" placeholder="email" value='<?php echo $row["E-mail"]; ?>'>
         <input type="hidden" name="id" value='<?php echo $row['ID']; ?>'>
        <input type="submit" name="submit">
</form>
<?php } ?>
