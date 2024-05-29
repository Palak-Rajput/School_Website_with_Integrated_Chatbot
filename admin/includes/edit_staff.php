<?php include "functions.php"; ?>

<?php

if(isset($_GET['p_id'])){
 $the_sno = $_GET['p_id'];
}
$query = "SELECT * FROM staff WHERE staff_sno = $the_sno";
$select_staff_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_staff_by_id)) {
    $name = $row['staff_name'];
    $designation = $row['designation'];
    
}

if(isset($_POST['update_staff'])){
    $name = $_POST['staff_name'];
    $designation = $_POST['designation'];
   
    $query = "UPDATE staff SET ";
    $query .="staff_name = '{$name}', ";
    $query .="designation = '{$designation}' ";
   
    $query .= "WHERE staff_sno = {$the_sno} ";

   
    $update_staff = mysqli_query($connection, $query);

    confirmQuery($update_staff);

    }
 

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input value="<?php echo $name; ?>" type="text" class="form-control" name="staff_name">
    </div>

    <div class="form-group">
        <label for="designation">Designation</label>
        <input value="<?php echo $designation; ?>" type="text" class="form-control" name="designation">
    </div>

    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_staff" value="Update">
    </div>
</form>
