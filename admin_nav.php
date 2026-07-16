<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
    <a href="admin_page.php" target="_self">
    <img src="https://companieslogo.com/img/orig/RACE.D-a40e5994.png?t=1720244493" alt="Ferrari Logo" height="40">
</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_page.php">&nbsp;HOME&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#dashboard-container">DASHBOARD&nbsp;&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="register-view-users.php">VIEW USERS&nbsp;&nbsp;</a>
          </li>
        </ul>
        <form class="d-flex">
        <button class="btn btn-outline-light border-0" type="button" onclick="window.location.href='Search.php'">Search</button>
          <button class="btn btn-outline-light border-0" type="button" onclick="window.location.href='logout.php'">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>
