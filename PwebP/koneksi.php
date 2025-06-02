<?php
$connection = mysqli_connect("localhost:80","root", "","kuliah");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());

}else{
    echo "connect berhasil";
}
?>