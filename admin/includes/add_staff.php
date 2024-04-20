<?php include "functions.php"; ?>

<?php
if(isset($_POST['create_staff'])){
    // global $sno, $name, $designation;
    // $sno = $_POST['staff_sno'];
    $name = $_POST['staff_name'];
    $designation = $_POST['designation'];
    // $post_status = $_POST['post_status'];
    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];
    // $post_tags = $_POST['post_tags'];
    // $post_content = $_POST['post_content'];
    // $post_date = date('d-m-y');
    // $post_comment_count = 4;

    // move_uploaded_file($post_image_temp, "../images/$post_image" );

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
