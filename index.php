<?php

//require 'connection.php';


  $name = "incube";
  $address = "Hyderabad";
  $phone = "0000000000";
  

  

  $query = "INSERT INTO tb_test VALUES('', '$name', '$address', '$phone')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
?>
 