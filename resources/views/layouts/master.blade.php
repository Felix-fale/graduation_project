</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Agora Nea</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }} ">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }} ">

</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-0">
        <div class="container px-3 d-flex">

            <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <img src="./assets/img/assigame-logo.svg" alt="assigame-logo" class="logo-assigame me-4">
            <div class="collapse navbar-collapse text-dark" id="navbarSupportedContent">
                <form class="d-flex m-auto" role="search" style="width: 50%;">
                    <input class="form-control me-2 search_bar" type="search" placeholder="Que cherchez-vous"
                        aria-label="Search">
                </form>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small ms-auto">
                    <li>
                        <a href="#" class="nav-link text-dark">
                            <svg class="bi d-block mx-auto mb-1" xmlns="http://www.w3.org/2000/svg" width="26"
                                height="26" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                            <span class="texte-icone">
                                <span class="texte-icone">
                                    Favoris
                                </span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('login') }}" class="nav-link text-dark pb-0">
                            <svg class="bi d-block mx-auto mb-1 p-0" xmlns="http://www.w3.org/2000/svg" width="26"
                                height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="texte-icone">

                                    @include('is_connect')

                            </span>
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button type="submit" class="btn btn-success add-annonce btn-forme m-auto">

                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" style="color: white;"
                            fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <a href="{{ route('login') }}" class="text-decoration-none text-white">Déposer une annonce</a>
                    </button>
                </form>

            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

    @yield('content')

    <!-- Start Footer -->
    <footer class="py-4
                            bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2022</p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/js/templatemo.js') }} "></script>
    <script src="{{ asset('assets/js/custom.js') }} "></script>
    <!-- End Script -->
</body>

</html>
