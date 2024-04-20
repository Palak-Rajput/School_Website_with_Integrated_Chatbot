<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Designation</th>
            <!-- <th>Lastname</th> -->
            <!-- <th>Email</th> -->
            <!-- <th>Role</th> -->
            
        </tr>
    </thead>
    <tbody>
        <?php

        $query = "SELECT * FROM staff";
        $select_staff = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_staff)) {
            $sno = $row['staff_sno'];
            $name = $row['staff_name'];
            $designation = $row['designation'];
            // $user_firstname = $row['user_firstname'];
            // $user_lastname = $row['user_lastname'];
            // $user_email = $row['user_email'];
            // $user_image = $row['user_image'];
            // $user_role = $row['user_role'];
           

            echo "<tr>";
            echo "<td>$sno</td>";
            echo "<td>$name</td>";
            echo "<td>$designation</td>";

            // $query = "SELECT * FROM category WHERE cat_id = {$post_category_id} ";
            // $select_category_id = mysqli_query($connection, $query);

            // while ($row = mysqli_fetch_assoc($select_category_id)) {
            //     $cat_id = $row['cat_id'];
            //     $cat_title = $row['cat_title'];

            // echo "<td>{$cat_title}</td>";
            // }

            // echo "<td>$user_lastname</td>";
            // echo "<td>$user_email</td>";
            // echo "<td>$user_role</td>";

                // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";

                // $select_post_id_query = mysqli_query($connection, $query);

                // while($row = mysqli_fetch_assoc($select_post_id_query)){
                //     $post_id = $row['post_id'];
                //     $post_title = $row['post_title'];

                //     echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";

                // }






            // echo "<td><a href='users.php?change_to_admin={$sno}'>Admin</a></td>";

            // echo "<td><a href='users.php?change_to_sub={$sno}'>Subscriber</a></td>";

            echo "<td><a href='staff.php?source=edit_staff&p_id={$sno}'>Edit</a></td>";

            echo "<td><a href='staff.php?delete={$sno}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>

<?php

// if (isset($_GET['change_to_admin'])) {
//     $the_user_id = $_GET['change_to_admin'];
//     $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id ";
//     $change_to_admin_query = mysqli_query($connection, $query);
//     header("Location: users.php");
// }


// if (isset($_GET['change_to_sub'])) {
    // $the_user_id = $_GET['change_to_sub'];
    // $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id ";
    // $change_to_sub_query = mysqli_query($connection, $query);
    // header("Location: users.php");
// }




if (isset($_GET['delete'])) {
    $the_sno = $_GET['delete'];
    $query = "DELETE FROM staff WHERE staff_sno = {$the_sno} ";
    $delete_user_query = mysqli_query($connection, $query);
    header("Location: staff.php");
}
?>