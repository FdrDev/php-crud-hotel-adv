<?php

if($_POST["id"] && $_POST["price"]){

  $id= $_POST["id"];
  $price = $_POST["price"];
  // var_dump($id); die();
  $servername = "localhost";
  $username = "root";
  $password = "FedePhp992";
  $dbname = "Prova1";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_errno){
    echo $conn->connect_error;
    return;
  }

  $sql = "
          UPDATE pagamenti
          SET price = $price
          WHERE id = $id
  ";

  $conn->query($sql);
  // var_dump($result); die();

  $conn->close();


}
 ?>
