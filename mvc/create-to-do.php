<?php
function createTask()
{
  global $conn;   

  if (isset($_POST['add'])) {

      /* validation */
    $task = $_POST['task'];

    $data['taskMsg'] = '';
    if(empty($task)) {

      $data['taskMsg'] = "Empty Task Field!";
    }

     $validation = false;
    if(empty($data['taskMsg'])) {
       $validation = true;
    }

     if($validation) {

     /* insert query*/
    $query  = "INSERT INTO shopping_list";
    $query .= "(item_name) ";
    $query .= "VALUES ('$task')";
 
    $result = $conn->query($query);

    if ($result) {
      $data['success'] = "Item is added successfully";
    }
   }

     return $data;

   }

  
}
?>