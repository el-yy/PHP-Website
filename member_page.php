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
    <?php include('member_nav.php');?>
    <?php include('member_header.php');?>
    <main>
      <div id="content-wrap"></div>
      <div id="content">
        <div class="news-article">
          <div class="image-container">
            <div class="slideshow-container">
              <img src="https://pbs.twimg.com/media/GL8IyIVXgAA18tV?format=jpg&name=medium" alt="Ferrari F1 car" class="active">
              <img src="https://pbs.twimg.com/media/GecJNcTWwAQUpfD?format=jpg&name=large" alt="Image 2">
              <img src="https://images.squarespace-cdn.com/content/v1/60915b23c38bc0460bee7bc8/1333f9bc-d124-48e8-b4da-76ac3496a41b/I4G_6234+51+5.jpg" alt="Image 3">
              <!-- Next and Prev buttons -->
              <button class="prev">&#10094;</button>
              <button class="next">&#10095;</button>
            </div>
          </div>
          <div class="text-content">
            <h2 id="text-title">A TRICKY START</h2>
            <br>
            <p id="text-content">Scuderia Ferrari HP did not have a <br>
                                straightforward time of it during Friday free practice for <br>
                                the Singapore Grand Prix, gathering less data than <br>
                                expected from the two sessions.</p>
            <br>
            <a href="#" class="read-more" id="read-more-link">READ MORE ></a>
          </div>
        </div>

        <!-- Car Specifications Viewer -->
        <section id="car-specs">
          <div class="car-grid" id="carGrid"></div>
        </section>

        <!-- Modal for Car Details -->
        <div id="carModal" class="modal">
          <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2 id="modalTitle"></h2>
            <img id="modalImage" src="" alt="Car Image">
            <p id="modalDetails"></p>
          </div>
        </div>
      </div>
    </main>
    <?php include('footer.php');?>
  </div>

  <script src="css/member_page.js"></script>
  <script src="css/cars.js"></script> <!-- Additional script for car specs -->
</body>
</html>
