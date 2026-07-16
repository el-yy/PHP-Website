<?php
    session_start();
    if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)) { //admin can only access
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Maintenance Scheduler</title>
  <link rel="stylesheet" href="css/all.css">
</head>
<body>
  <?php include('member_nav.php'); ?>

  <div class="scheduler-container">
    <h1>Car Maintenance Scheduler</h1>
    <form id="scheduler-form" class="scheduler-form">
      <label for="task-name">Task Name:</label>
      <input type="text" id="task-name" placeholder="e.g., Oil Change" required>

      <label for="task-date">Date:</label>
      <input type="date" id="task-date" required>

      <label for="task-notes">Notes (Optional):</label>
      <textarea id="task-notes" placeholder="Additional details"></textarea>

      <button type="submit">Add Task</button>
    </form>

    <h2>Upcoming Maintenance</h2>
    <div id="scheduler-maintenance-timeline" class="maintenance-timeline">
      <!-- Tasks will appear here -->
    </div>
  </div>

  <?php include('footer.php'); ?>

  <script src="css/member_page2.js"></script>
</body>
</html>
