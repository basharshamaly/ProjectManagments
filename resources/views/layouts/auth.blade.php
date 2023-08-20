<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<style>
    .main-container {
        min-height: 76vh;
    }

    .navbar {
        margin-top: 0px !important;
        width: 2045 px;

    }

    .container-fluid {
        height: 70px;
    }

    .navbar-nav {
        padding: 10px;
    }
</style>


<body>
    <nav class="navbar navbar-expand-lg" style="padding: 0px;">
        <div class="container-fluid" style="background-color: rgba(6, 145, 245, 0.2);">

            <div class="badge bg-primary text-wrap" style="width: 7rem; height: 3rem; font-size: large;">
                Project Manager
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            style="width: 5rem; height: 2rem; font-size: large;">{{ __('caption.profile') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            style="width: 5rem; height: 2.5rem; font-size: large;">{{ __('caption.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            style="width: 5rem; height: 2rem; font-size: large;">{{ __('caption.about') }}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="width: 5rem; height: 2rem; font-size: large;">
                            Others
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                            <li><a class="dropdown-item" href="#">Payment</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </li>
                </ul>


                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">{{ __('caption.search') }}</button>
                </form>

            </div>
        </div>
    </nav>


    <div class="container main-container">
        @yield('content')
    </div>


    <footer class="text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(6, 145, 245, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="">farah el sourani</a>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

</body>

</html>
