<?php include "functions.php"; ?>

<?php
if(isset($_POST['create_staff'])){
    $name = $_POST['staff_name'];
    $designation = $_POST['designation'];
  
    $query = "INSERT INTO staff( staff_name, designation) ";

    $query .= "VALUES('{$name}','{$designation}') ";

    $create_staff_query = mysqli_query($connection, $query);

    confirmQuery($create_staff_query);
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="staff_name">
    </div>
    

    <div class="form-group">
        <label for="designation">Designation</label>
        <input type="text" class="form-control" name="designation">
    </div>
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_staff" value="Add Staff">
    </div>
</form>
