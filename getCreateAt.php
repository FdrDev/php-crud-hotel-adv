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
          SELECT created_at
          FROM pagamenti
          WHERE id = $id
  ";

  $result = $conn->query($sql);
  // var_dump($result); die();

  $res = [];

  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $res[]=$row;
    }
  } else{

    echo "0 result";

  }

  $conn->close();

  // var_dump($res);

  echo json_encode($res);

}
 ?>
