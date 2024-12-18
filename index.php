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
    <?php include('nav.php');?>
    <?php include('header.php');?>
    <main>
      <div id="content-wrap">
        </div> 
        <div id="content">
          <div class="news-article">
            <div class="image-container">
              
              <div class="slideshow-container">
                
                <img src="https://www.wsupercars.com/wallpapers-phone/Formula-1/Scuderia-Ferrari/2024-Formula1-Ferrari-SF-24-008-2800p.jpg" alt="Ferrari F1 car" class="active">
                <img src="https://www.wsupercars.com/wallpapers-phone/Endurance-Racing/2024-Ferrari-499P-Modificata-001-2800p.jpg" alt="Image 2">
                <img src="https://www.wsupercars.com/wallpapers-phone/Ferrari/2009-Ferrari-Scuderia-Spider-16M-007-2400p.jpg" alt="Image 3">
                <!-- next at prev button -->
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
        </div>
      </div>
    </main>
    <?php include('footer.php');?>
    <script src="css/index.js"></script>
  </body>
</html>
