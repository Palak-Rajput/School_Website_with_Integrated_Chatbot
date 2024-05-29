<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Designation</th>
           
            
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
           
            echo "<tr>";
            echo "<td>$sno</td>";
            echo "<td>$name</td>";
            echo "<td>$designation</td>";

            echo "<td><a href='staff.php?source=edit_staff&p_id={$sno}'>Edit</a></td>";

            echo "<td><a href='staff.php?delete={$sno}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>

<?php

if (isset($_GET['delete'])) {
    $the_sno = $_GET['delete'];
    $query = "DELETE FROM staff WHERE staff_sno = {$the_sno} ";
    $delete_user_query = mysqli_query($connection, $query);
    header("Location: staff.php");
}
?>
