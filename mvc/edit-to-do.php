<?php

/* edit data */
function editTaskById(){

  global $conn;
    $data=[];
  if(isset($_GET['edit-task']) && !empty($_GET['edit-task']) ) {
     
    $id = $_GET['edit-task'];
    $msg = [];

     /* sql query*/
  $query = "SELECT item_name FROM shopping_list WHERE id = $id";

    $result = $conn->query($query);
    $data = $result->fetch_assoc();

 }
 return $data; 

}  

?>