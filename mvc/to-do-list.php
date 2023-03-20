<?php
include('get-to-do.php');
$getTask = getTask(); 
?>

<?php
if(count($getTask['data'])) {
foreach($getTask['data'] as $task) {
?>
<hr>
<div class="row">

    <div class="col-md-1">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    </div>

    <div class="col-md-9">
        <?php
       echo $task['item_name'];
        ?>
    </div>
    <div class="col-md-1">
        <a href="index.php?edit-task=<?php echo $task['id']; ?>" class="text-success text-decoration-none">
        <i class='fas fa-edit'></i>
       </a>
    </div>
    <div class="col-md-1">
    <a href="index.php?delete-task=<?php echo $task['id']; ?>" class="text-danger text-decoration-none">
    <i class='fas fa-trash-alt'></i>

    </a>
    </div>
</div>
<hr>

<?php 
} 
}
?>