<?php
/* Fetch data */
function getTask()
{

    global $conn; 
    $data['data'] = [];

  $query  = "SELECT id, item_name FROM shopping_list ORDER BY id ASC";


    $result = $conn->query($query);
    
  if ($result) {

    if($result->num_rows> 0) {

      $data['data'] = $result->fetch_all(MYSQLI_ASSOC);

    }

  }
    
    return $data;
  
}

?>