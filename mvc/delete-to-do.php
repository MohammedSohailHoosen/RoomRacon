<?php
function deleteTaskById()
{
  global $conn; 
  
if (isset($_POST['delete']) && isset($_GET['delete-task']) && !empty($_GET['delete-task'])) {
      
  $id = $_GET['delete-task'];

  $task = $_POST['delete-task'];

    $data['taskMsg'] = '';
    $validation = false;


    if(empty($data['taskMsg'])) {
       $validation = true;
    }
     /* validation */

    if($validation) {

     /* sql query*/
    $query  = "DELETE FROM shopping_list WHERE id =$id";

    $result = $conn->query($query);

    if ($result) {

      echo "<script>window.location='index.php'</script>";

    } 
    /*sql query*/
      
    }
    
    return $data;
}

  
}

?>