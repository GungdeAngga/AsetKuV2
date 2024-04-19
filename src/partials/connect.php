<?php

$con=new mysqli('localhost','gungde','Shadowgun1325','asetku');

if($con) {
    echo "terkoneksi";
} else {
    die(mysqli_error($con));
}

?>