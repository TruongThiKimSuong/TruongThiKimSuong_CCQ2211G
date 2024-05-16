<!DOCTYPE html <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        /* Custom CSS */
        .owl-carousel .owl-item img {
            display: block; 
            width: 100%;
            height: auto;
        }

        .addCart:hover {
            background-color: #95e0d2;
            color: #95e0d2;
            ;

        }
    </style>
    @yield('header')

</head>

<body>

    <header class="header hseader-menu">
        <div class="mb-2">
            <div class="container mt-3">
                <div class="row">
                    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
                        <a href="/" class="logo-wrapper">
                            <img src="assets/images/bee_header.webp" alt="lg Delta Cosmetic" style="height: 60px;">
                        </a>
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">MIỄN PHÍ VẬN CHUYỂN TRÊN MỌI ĐƠN HÀNG </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="col-lg-7 col-md-7 padding-0 mt-4">
                        <div class="wrap_main hidden-xs hidden-sm">
                            <div class="bg-header-nav hidden-xs hidden-sm">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item active" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                                        </li>

                                        <li class="nav-item dropdown ms-3" id="dropdownMenu">
                                            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/pages/product.html#" id="navbarDropdownMenuLink">Sản phẩm</a>
                                            <ul class="dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong nhập khẩu</a></li>
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong rừng</a></li>
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong hoa</a></li>
                                                <li><a class="dropdown-item mt-2 " href="#">Mật ong thiên nhiên</a></li>
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong nguyên chất</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item ms-3" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="#">Tin tức</a>

                                        </li>
                                        <li class="nav-item ms-3" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/pages/contact.html">Liên hệ</a>

                                        <li class="nav-item ms-3" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item ms-3" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="#">Cẩm nang</a>
                                        </li>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 mt-4">
                        <div class="row">
                            <div class="inline-b hidden-xs col dropstart " id="userDropdown">
                                <span class="imguser">
                                    <img src="assets/images/user.webp" alt="user" id="userImage">
                                    <ul class="dropdown-content" id="userDropdownContent">
                                        <li class="btn btn-success rounded-fill mt-3" style="width: 100px"><a class="dropdown-item mt-2" href="#">Đăng nhập</a></li>
                                        <li class="btn border-secondary rounded-fill my-3" style="width: 100px"><a class="dropdown-item mt-2" href="#">Đăng ký</a></li>
                                    </ul>
                                </span>
                            </div>
                            <div class="inline-block col">
                                <span class="">
                                    <a href="#"><img src="assets/images/bag.webp" alt="cart"></a>
                                </span>
                            </div>
                            <div class="inline-block col">
                                <span class="search">
                                    <a href="#"><i class="fa-solid fa-magnifying-glass text-dark"></i></a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div id="carouselExampleControls" class="carousel slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider_2.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>
    <main>
        @yield('maincontent')
    </main>
    <footer>
        FOOTER 4 TRANG GIONG NHAU
    </footer>


</body>
<script src=" {{ asset('js/main.js') }}"></script>
<script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    // Owl Carousel initialization
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>

</html>