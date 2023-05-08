<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Virtual Gallery - Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Inter&family=Noto+Sans+Display:wght@300&family=Open+Sans:ital,wght@1,300&family=PT+Sans&family=Poppins:wght@300&family=Rubik&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="head z-2">
            <div class="d-flex bg-dark justify-content-center">
                <a class="d-xl-none d-flex text-decoration-none">
                    <button class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar">
                        <div class="d-flex text-center py-3 px-4 fs-3 text-primary align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Menu</span>
                            <span class="px-2 fs-1">Menu</span>
                        </div>
                    </button>
                </a>
            </div>
            <nav class="bg-dark d-xl-flex nav navbar-collapse collapse" id="navbar">
                <div class="d-xl-flex d-block pb-2 container">
                    <hr class="line">
                    <a href="../index.html" class="d-block text-decoration-none p-xl-0 p-1 hover">
                        <div class="d-flex text-center py-3 px-4 text-light justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">Home</span>
                            <span class="px-2 fs-3">Home</span>
                        </div>
                        <div class="navdes"></div>
                    </a>
                    <a href="./about.html" class="d-block text-decoration-none p-xl-0 p-1 hover">
                        <div class="d-flex text-center py-3 px-4 text-light justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">Help</span>
                            <span class="px-2 fs-3">About us</span>
                        </div>
                        <div class="navdes"></div>
                    </a>
                    <a href="./gallery.php" class="d-block text-decoration-none p-xl-0 p-1 hover">
                        <div class="d-flex text-center py-3 px-4 text-light justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">Photo_library</span>
                            <span class="px-2 fs-3">Virtual gallery</span>
                        </div>
                        <div class="navdes"></div>
                    </a>
                    <a href="./login.php" class="d-block text-decoration-none ms-xl-auto p-xl-0 p-1 hoveractive">
                        <div class="d-flex text-center py-3 px-4 text-primary justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">Login</span>
                            <span class="px-2 fs-3">Log in</span>
                        </div>
                        <div class="navdesactive"></div>
                    </a>
                    <a href="./register.php" class="d-block text-decoration-none p-xl-0 p-1 hover">
                        <div class="d-flex text-center py-3 px-4 text-light justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">How_to_reg</span>
                            <span class="px-2 fs-3">Sign in</span>
                        </div>
                        <div class="navdes"></div>
                    </a>
                </div>
            </nav>
        </header>

        <main class="text-center">
            <div class="my-5 container justify-content-center d-flex">
                <form class="text-container-6 mx-5 w-75 mt-5" action="../php/login.php" method="POST">
                    <div class="mb-5">
                        <label for="email" class="form-label fs-1">Email address</label>
                        <input type="email" class="form-control border-0 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="email" required>
                    </div>
                    <div class="mb-5">
                        <label for="pass" class="form-label fs-1">Password</label>
                        <input type="password" class="form-control border-0 border-bottom border-secondary border-2 rounded-0 fs-2 text-center fst-italic" name="pass" required>
                    </div>
                    <div class="row justify-content-lg-between justify-content-center align-items-center my-5">
                        <a href="./register.html" class="fs-3 text-decoration-none text-container-4 col-lg-6 col-12">Not registered account yet? Do it here.</a>
                        <button type="submit" class="btn btn-primary fs-3 col-lg-2 mt-lg-2 mt-4 col-sm-3 col-4">Log in</button>
                    </div>
                    <?php
                        if (isset($_SESSION["error"])) {
                            $errorMessage = $_SESSION["error"];
                            unset($_SESSION["error"]);
                            echo '<p class="error-messag"> $errorMessage "</p>"';
                        }
                    ?>
                </form>
            </div>
        </main>

        <footer class="container-fluid bg-dark mt-5">
            <hr class="line">
            <div class="container z-2 text-white text-container-5">
                <div class="row">
                    <div class="col-xl-4 col-12 my-2 d-block">
                        <h5 class="mb-3">About</h5>
                        <p class="textjustify">Welcome to our virtual gallery! We are your online source for art. Browse our collection of inspired works and discover the world of creativity. Our virtual gallery provides the opportunity to discover, explore, and share art from diverse artists. Join us on this artistic journey.</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 my-2 d-block">
                        <h5>Virtual Gallery</h5>
                        <img class="img-fluid imgresize" src="../img/logo.png" alt="logo">
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 my-2 d-block">
                        <h5 class="mb-3">Contacts</h5>
                        <ul>
                            <li>Email:<i>&nbsp; info.virtualgallery@something.com</i></li>
                            <li>Tel.:<i>&nbsp; +000 123-456-789</i></li>
                            <li>Address:
                                <div class="d-inline-flex">
                                    <i class="d-block">
                                        <span>&nbsp; 149 Don Jackson Lane</span><br>
                                        <span>&nbsp; Bloomfield Township</span><br>
                                        <span>&nbsp; Michigan 48302</span>
                                    </i>
                                </div>
                            </li>
                            <li>Author:<i>&nbsp; Erik Boháč</i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

<!--https://fonts.google.com/icons?selected=Material+Symbols+Outlined:help:FILL@0;wght@400;GRAD@0;opsz@48&icon.query=info
#https://fonts.google.com/noto/specimen/Noto+Sans+Display?preview.size=33&noto.continent=Europe-->