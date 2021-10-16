<?php

$username ="root";
$password ="";
$server = "localhost";
$db ="rahulop";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <script>
        alert("Connection Succesfull");
    </script>
    <?php

}
else{
    ?>
    <script>
        alert("Connection Failed");
    </script>
    <?php
}

?>