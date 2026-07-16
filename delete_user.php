<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <?php include 'admin_nav.php'; ?>
    <div class="delete-body">
    <div class="delete-content">    
        <h2>Deleting Record...</h2>
            <?php
                require('mysqli_connect.php');

                // Validate user ID
                if ((isset($_GET['id']) && is_numeric($_GET['id']))) {
                    $id = $_GET['id'];
                } elseif ((isset($_POST['id']) && is_numeric($_POST['id']))) {
                    $id = $_POST['id'];
                } else {
                    echo '<p>Invalid ID Number</p>';
                    echo '<a href="admin_page.php">Home</a>';
                    exit();
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Check if user confirmed deletion
                    if ($_POST['sure'] === 'Yes') {
                        // Prepare query to delete specific user
                        $q = "DELETE FROM users WHERE user_id = ?";
                        $stmt = mysqli_prepare($dbc, $q);
                        mysqli_stmt_bind_param($stmt, 'i', $id);
                        mysqli_stmt_execute($stmt);

                        if (mysqli_stmt_affected_rows($stmt) == 1) {
                            // Successfully deleted
                            echo '<p>Deleted Successfully</p>';
                            echo '<a href="register-view-users.php">View Users</a>';
                        } else {
                            // Error during deletion
                            echo '<p>ERROR CS201. Kindly Contact Administrator.</p>';
                        }
                    } else {
                        // User declined deletion
                        echo '<p>Record was not deleted.</p>';
                        echo '<a href="register-view-users.php">View Users</a>';
                    }
                } else {
                    // Display confirmation form
                    $q = "SELECT CONCAT(fname, ' ', lname) FROM users WHERE user_id = ?";
                    $stmt = mysqli_prepare($dbc, $q);
                    mysqli_stmt_bind_param($stmt, 'i', $id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        mysqli_stmt_bind_result($stmt, $full_name);
                        mysqli_stmt_fetch($stmt);
                        echo "<h3>Are you sure you want to delete?</h3>";
                        echo "<h2>$full_name</h2>";
                        echo '
                        <form class="delete-form" action="delete_user.php" method="post">
                            <input id="submit-yes" type="submit" name="sure" value="Yes">
                            <input id="submit-no" type="submit" name="sure" value="No">
                            <input type="hidden" name="id" value="'.$id.'">
                        </form>';
                    } else {
                        echo '<h3>Unknown User ID</h3>';
                        echo '<a href="register-page.php">Register</a>';
                    }
                }

                mysqli_close($dbc);
            ?>
    </div>
    </div>
    <?php include('footer.php');?>
</body>
</html>