<?php

function confirmQuery($result){
    global $connection;

    if(!$result){
        die("QUERY FAILED ." . mysqli_error($connection));
    } 

}

function insert_categories()
{
    global $connection;

    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)) {
            echo "This field should not be empty";
        } else {
            $query = "INSERT INTO touch(cat_title) ";
            $query .= "VALUE('{$cat_title}') ";

            $create_category_query = mysqli_query($connection, $query);

            if (!$create_category_query) {
                die('QUERY FAILED' . mysqli_error($connection));
            }
        }
    }
}


function findAllCategories()
{
    global $connection;

    $query = "SELECT * FROM touch";
    $select_category = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_category)) {
        $sno = $row['sno'];
        $name = $row['name'];
        $email = $row['email'];
        $message = $row['message'];

        echo "<tr>";
        echo "<td>{$sno}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$email}</td>";
        echo "<td>{$message}</td>";
        echo "<td><a href='data.php?delete={$sno}'>Delete</a></td>";
        // echo "<td><a href='data.php?edit={$sno}'>Edit</a></td>";
        echo "</tr>";
    }
}


function deleteCategories(){
    global $connection;

    if (isset($_GET['delete'])) {
        $the_sno = $_GET['delete'];
        $query = "DELETE FROM touch WHERE sno = {$the_sno} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: index.php");
    }

}
?>
