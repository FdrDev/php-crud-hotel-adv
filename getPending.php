<?php

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
          SELECT status, price, id
          FROM pagamenti
          WHERE status LIKE 'pending'
          GROUP BY status, price, id
          ORDER BY price DESC
  ";

  $result = $conn->query($sql);
  // var_dump($result); die();

  $res = [];

  if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
      $res[]=$row;
    }
  } else{

    echo "0 result";

  }

  $conn->close();

  // var_dump($res);

  echo json_encode($res);


 ?>
