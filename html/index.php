<?php
include "auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/background.css">
    <title>Home</title>
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
                        <a class="nav-link" href="#">Home</a>
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
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-evenly mt-5">
        <div class="col m-5" style="max-width: 550px;">
            <div class="card text-center bg-dark text-white">
                <img src="https://placebear.com/300/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-light">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col m-5" style="max-width: 550px;">
            <div class="card text-center bg-dark text-white">
                <img src="http://placekitten.com/400/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-light">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col m-5" style="max-width: 550px;">
            <div class="card text-center bg-dark text-white">
                <img src="http://placebear.com/400/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-light">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col m-5" style="max-width: 550px;">
            <div class="card text-center bg-dark text-white">
                <img src="http://placekitten.com/400/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-light">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col m-5" style="max-width: 550px;">
            <div class="card text-center bg-dark text-white">
                <img src="http://placebear.com/500/500" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-light">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col m-5" style="max-width: 550px;">
            <div class="card text-center bg-dark text-white">
                <img src="http://placekitten.com/500/500" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">My Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-light">Click Me</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>