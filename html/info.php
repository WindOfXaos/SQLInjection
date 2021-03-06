<?php
include "auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/background.css">
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kitty Kat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <?php
            if (empty($_SESSION['username'])) {
              echo '<a class="nav-link" href="login.php">Login</a>';
            } else {
              echo '<a class="nav-link" href="logout.php">Logout</a>';
            }
            ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php">Info</a>
          </li>
        </ul>
        <?php
        if (!empty($_SESSION['username']))
          echo "<div style='margin-left: auto;padding: 5px;color: white;'>" . $_SESSION['username'] . "</div>";
        ?>
      </div>
    </div>
  </nav>
  <div class="row-cols-5 h-100" style="display: grid; place-items: center;">
    <div class="card text-center bg-dark text-white" style="width: 500px;">
      <img src="../imgs/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">My Name</h5>
        <p class="card-text">Hang jaw half open
          thereafter run up and down stairs cats go for world domination.
          Grass smells good eats owners hair then claws head for show belly furrier
          and even more furrier hairball scream at teh bath so destroy house in 5
          seconds and brown cats with pink ears. Spit up on light gray carpet instead
          of adjacent linoleum if it fits, i sits catch small lizards, bring them into house,
          then unable to find them on carpet, rub butt on table, yet jump around on couch,
          meow constantly until given food.</p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>