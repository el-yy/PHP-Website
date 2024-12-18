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
  <title>Website ni Lavandero</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/all.css">
</head>
<body>
  <!-- Loading Screen -->
  <div id="loading-screen">
    <img src="https://blog.motionisland.com/wp-content/uploads/2022/03/Loading_8.gif" alt="Loading..." class="loader-image">
  </div>

  <div id="container">
    <?php include('admin_nav.php'); ?>
    <?php include('member_header.php'); ?>
    
    <!-- Dashboard Container -->
    <main id="dashboard-container">
      <img src="https://media.licdn.com/dms/image/v2/D4E12AQELLreYWG5TfA/article-inline_image-shrink_1000_1488/article-inline_image-shrink_1000_1488/0/1708164599339?e=1739404800&v=beta&t=zyE7D9GBS0Cx0TJp66gUppGQ7jw2WqTnaX5heveq8Gc" alt="Fake Dashboard" class="fake-dashboard-image">
    </main>

    <?php include('footer.php'); ?>
  </div>
  <script src="css/index.js"></script>
</body>
</html>