<?php

if($_POST["id"]){

  $id= $_POST["id"];
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
          DELETE FROM pagamenti
          WHERE id = $id
  ";

  $conn->query($sql);
  // var_dump($result); die();

  $conn->close();


}
 ?>
