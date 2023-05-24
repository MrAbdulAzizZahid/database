
<?php 
    
    $host="localhost";
    $name="root";
    $password="";
    $dbname="mydata";


    $con= mysqli_connect($host,$name,$password,$dbname);
    
    if($con){
        echo "connection successfull";
    }else{
        echo "connection failed";
    }



    ?>




