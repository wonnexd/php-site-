<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/main.min.css" rel="stylesheet">
    <title>Luu Fanboy</title>
</head>
<body>

<header class="navbar navbar-expand-lg navbar-dark nav-bg">
    <div class="container col-9">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</header>

<div class="container col-9 mt-3">
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <h1 class="m-3 text-center"> Heading </h1>
        </div>
        <div class="col-sm-12 col-lg-4">

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-lg-8">
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
            <br>

            <h2>Welcome <?php echo $_SESSION['Username']; ?></h2>
            Click here to <a href = "logout.php">Logout</a>

        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
                </a>
                <div class="list-group list-group-flush border-bottom scrollarea">
                    <a href="#" class="list-group-item list-group-item-action lh-tight pad-zero"
                       aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">List group item heading</strong>
                            <small>Wed</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and
                            date.
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action lh-tight pad-zero">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">List group item heading</strong>
                            <small class="text-muted">Tues</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and
                            date.
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action lh-tight pad-zero">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">List group item heading</strong>
                            <small class="text-muted">Mon</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and
                            date.
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action lh-tight pad-zero"
                       aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">List group item heading</strong>
                            <small class="text-muted">Wed</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and
                            date.
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action lh-tight pad-zero">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">List group item heading</strong>
                            <small class="text-muted">Tues</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and
                            date.
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action lh-tight pad-zero">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">List group item heading</strong>
                            <small class="text-muted">Mon</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and
                            date.
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        <h6>
            © Company 2017-2018
        </h6>
    </footer>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>