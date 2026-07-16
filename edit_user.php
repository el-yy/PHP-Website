<?php
// Enable error reporting for debugging (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection
require("mysqli_connect.php");

// Initialize variables
$first_name = $last_name = $email = '';

// Check if the user ID is passed via GET and is valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepared statement for fetching user data to avoid SQL injection
    $query = "SELECT user_id, fname, lname, email FROM users WHERE user_id = ?";
    if ($stmt = mysqli_prepare($dbc, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $user_id);  // 'i' means integer
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $user_id, $first_name, $last_name, $email);
        
        if (mysqli_stmt_fetch($stmt)) {
            // Data fetched successfully
        } else {
            echo "User not found!";
            exit;
        }
        mysqli_stmt_close($stmt);  // Close statement
    } else {
        echo "Database error: " . mysqli_error($dbc);
        exit;
    }
} else {
    echo "Invalid User ID!";
    exit;
}

// Handle form submission when the form is submitted (POST method)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the updated form data
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation for empty fields
    if (empty($first_name) || empty($last_name) || empty($email)) {
        echo "Please fill in all fields.";
    } else {
        // Update user data in the database using prepared statements
        $query = "UPDATE users SET fname = ?, lname = ?, email = ? WHERE user_id = ?";
        if ($stmt = mysqli_prepare($dbc, $query)) {
            mysqli_stmt_bind_param($stmt, 'sssi', $first_name, $last_name, $email, $user_id);
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to a new page to show updated user info
                header('Location: user-details.php?id=' . $user_id);
                exit;
            } else {
                echo "Error updating user: " . mysqli_error($dbc);
            }
            mysqli_stmt_close($stmt);  // Close statement
        } else {
            echo "Database error: " . mysqli_error($dbc);
        }
    }
}

// Close the database connection at the end of PHP logic
mysqli_close($dbc);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <?php include 'admin_nav.php'; ?>

    <div class="section1">
        <h2>Edit User Details</h2>
        <form action="edit-user.php?id=<?php echo $user_id; ?>" method="post">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" value="<?php echo htmlspecialchars($first_name); ?>" required><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" value="<?php echo htmlspecialchars($last_name); ?>" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>

            <label for="email">Password:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($password); ?>" required><br><br>


            <input type="submit" value="Update User">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
