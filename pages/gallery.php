<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Virtual Gallery</title>
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
                    <a href="./gallery.php" class="d-block text-decoration-none p-xl-0 p-1 hoveractive">
                        <div class="d-flex text-center py-3 px-4 text-primary justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">Photo_library</span>
                            <span class="px-2 fs-3">Virtual gallery</span>
                        </div>
                        <div class="navdesactive"></div>
                    </a>
                    <a href="./login.php" class="d-block text-decoration-none ms-xl-auto p-xl-0 p-1 hover">
                        <div class="d-flex text-center py-3 px-4 text-light justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-2 p-1">Login</span>
                            <span class="px-2 fs-3">Log in</span>
                        </div>
                        <div class="navdes"></div>
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
            <div class="d-flex justify-content-center">
                <div class="mt-5 d-block border border-3 shadow-lg border-dark-subtle pt-3 overflow-hidden">
                    <div class="row d-flex">
                        <div class="d-block col-md-4 col-12">
                            <img src="../img/user.jpg" alt="user" class="img-fluid ms-md-4 ms-0">
                            <p class="ms-md-5 ms-0 text-center fs-3 overflow-auto border-bottom border-3 fw-medium" d="name">Some User</p>
                        </div>
                        <div class="d-block col-md-8 col-12">
                            <h1 class="text-container-7">User Info</h1>
                            <hr class="line mx-5">
                            <div class="row justify-content-center text-container-4">
                                <ul class="list-unstyled fw-bold col-5">
                                    <li class="d-flex pb-2"><span class="material-symbols-outlined">visibility</span>&nbsp;Viewed arts:</li>
                                    <li class="d-flex pb-2"><span class="material-symbols-outlined">thumb_up</span>&nbsp;Liked:</li>
                                    <li class="d-flex pb-2"><span class="material-symbols-outlined">thumb_down</span>&nbsp;Disliked:</li>
                                    <li class="d-flex pb-2"><span class="material-symbols-outlined">history</span>&nbsp;Logged times:</li>
                                </ul>
                                <ul class="list-unstyled fw-bold col-1">
                                    <li class="pb-2" id="view">0</li>
                                    <li class="pb-2" id="like">0</li>
                                    <li class="pb-2" id="dislike">0</li>
                                    <li class="pb-2" id="log">0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="border border-4 justify-content-center">
                    <div class="imgframe border-bottom border-3 mb-3 d-flex align-items-center justify-content-center" id="frame">
                        <img src="../img/imgph.jpg" class="img" id="img">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-success text-container-4 fs-2 mb-3" id="artbtnlike">Like</button>
                        <button type="submit" class="btn btn-primary text-container-4 fs-2 mb-3" id="artbtngenerate">Generate Art</button>
                        <button type="submit" class="btn btn-danger text-container-4 fs-2 mb-3" id="artbtndislike">Dislike</button>
                    </div>
                </div>
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

        <script type="text/javascript" src="../js/arts.js"></script>
    </body>
</html>

<!--https://fonts.google.com/icons?selected=Material+Symbols+Outlined:help:FILL@0;wght@400;GRAD@0;opsz@48&icon.query=info
#https://fonts.google.com/noto/specimen/Noto+Sans+Display?preview.size=33&noto.continent=Europe-->