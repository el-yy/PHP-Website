<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website ni Lavandero</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/all.css">
  <!-- Loading Screen -->
  <div id="loading-screen">
    <img src="https://blog.motionisland.com/wp-content/uploads/2022/03/Loading_8.gif" alt="Loading..." class="loader-image">
  </div>

  <div id="container">
  <?php include('nav.php'); ?>
    <?php include('header.php'); ?>
    
    <main>
    <div class="popup-overlay" id="popup">
  <div class="popup-content">
    <button class="close-btn" onclick="closePopup()">×</button>
    <h1>Congratulations!</h1>
    <p>Thank you for successfully registering with us. We're thrilled to have you on board!</p>
    <a href="member_page.php" class="explore-btn">Explore</a>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("popup");
  popup.classList.add("active");
});

function closePopup() {
  document.getElementById("popup").classList.remove("active");
}
</script>
    <?php include('footer.php'); ?>
    <script src="css/index.js"></script>
  </div>
</body>
</html>
