<?php
    session_start();
    if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) { //admin can only access
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website ni Lavandero - Registered Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/all.css">
</head>
<body>
  <?php include('admin_nav.php'); ?>
  
  <div id="lav-container">
    <main>
        <div id="lav-info-col">
          <?php include('info-col.php'); ?>
        </div> 

        <div id="lav-content">
          <h2><center>Registered Users</center></h2>
          <?php
          // Require DB connection
          require("mysqli_connect.php");

          // Query to get data from database
          $q = "SELECT fname, lname, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS regdat, user_id FROM users ORDER BY user_id ASC";
          $result = @mysqli_query($dbc, $q);

          if($result) { // If query is successful
              echo '<table class="lav-table">
                  <thead>
                    <tr>
                        <th>👥 Name</th>
                        <th>📧 Email</th>
                        <th>📅 Registered Date</th>
                        <th>💡 Actions</th>
                    </tr>
                  </thead>
                  <tbody>';

              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  echo '<tr>
                      <td>' . htmlspecialchars($row['fname'] . " " . $row['lname']) . '</td>
                      <td>' . htmlspecialchars($row['email']) . '</td>
                      <td>' . htmlspecialchars($row['regdat']) . '</td>
                      <td>
                          <center>
                              <a href="edit_user.php?id=' . htmlspecialchars($row['user_id']) . '">🖊️</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="delete_user.php?id=' . htmlspecialchars($row['user_id']) . '">🗑️</a>
                          </center>
                      </td>
                  </tr>';
              }

              echo '</tbody></table>';
              mysqli_free_result($result);
          } else {
              echo '<p class="lav-error">The current users could not be retrieved. Please contact the system administrator.</p>';
          }

          mysqli_close($dbc);
          ?>
        </div>
    </main>
  </div>
  <footer class="lav-footer">
    <?php include('footer.php'); ?>
  </footer>
</body>
</html>
