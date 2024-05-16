<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
        .item1:hover {
            border: 1px solid #94e3df;
            border-radius: 20px;
            color: #94e3df;
        }

        .addCart:hover {
            background-color: #95e0d2;
            color: #95e0d2;
            ;

        }

        .item img {
            width: 200px;
            height: 220px;
        }

        .item {
            height: 400px;
        }

        .bread-crumb {
            background: #ece9e9;
            border-top: solid 1px #ebebeb;
            border-bottom: solid 2px #d1cfcf;
        }

        .scrollview {
            width: auto;
            height: 200px;
            overflow: auto;
            /* Cho phép cuộn khi nội dung vượt quá kích thước của scrollview */
            padding-right:  20px;
        }
        .scrollview ul li a {
            font-size: 15px;
        }
    </style>

</head>

<body>
    
    <header class="header hseader-menu">
        <div class="mb-2">
            <div class="container mt-3">
                <div class="row">
                    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
                        <a href="/" class="logo-wrapper">
                            <!-- <img src="assets/images/bee_header.webp" alt="lg Delta Cosmetic" style="height: 60px;"> -->
                        </a>
                       
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
                                            <a class="nav-link active" aria-current="page"
                                                href="http://127.0.0.1:5500/pages/product.html#"
                                                id="navbarDropdownMenuLink">Sản phẩm</a>
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
                                            <a class="nav-link active" aria-current="page"
                                                href="http://127.0.0.1:5500/pages/contact.html">Liên hệ</a>

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
                                    <img src="{{ asset('images/user.webp') }}" alt="user" id="userImage">
                                    <ul class="dropdown-content" id="userDropdownContent">
                                        <li class="btn btn-success rounded-fill mt-3" style="width: 100px"><a
                                                class="dropdown-item mt-2" href="#">Đăng nhập</a></li>
                                        <li class="btn border-secondary rounded-fill my-3" style="width: 100px"><a
                                                class="dropdown-item mt-2" href="#">Đăng ký</a></li>
                                    </ul>
                                </span>
                            </div>
                            <div class="inline-block col">
                                <span class="">
                                    <a href="#"><img src="{{ asset('images/bag.webp') }}" alt="cart"></a>
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
                        <img src="{{ asset('images/slider_1.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider_2.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider_1.webp') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

          
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bread-crumb">
        <span class="crumb-border p-3"></span>
        <div class="container">
            <div class="rows">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="/" class="text-dark"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"
                                    style="color: #94e3df;"></i>&nbsp;</span>
                        </li>

                        <li><strong><span style="color: #94e3df;"> Tất cả sản phẩm</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="main container">

        <div class="row ">
            <div class="col-md-2 mt-5">
                <div class="category mt-2">
                    <div class="dropdown-item mt-5">
                        <h6 style="font-size: 20px;"><b>DANH MỤC SẢN PHẨM</b></h6>
                    </div>
                    <ul class="list ms-0">
                        <li><a class="dropdown-item mt-2" href="#">Mật ong nhập khẩu</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Mật ong rừng</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Mật ong hoa</a></li>
                        <li><a class="dropdown-item mt-2 " href="#">Mật ong thiên nhiên</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Mật ong nguyên chất</a></li>
                    </ul>
                </div>
            </div>

                <hr>
                <div class="product">

                    <!-- product1------------------------------------------------ -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item border">
                                <div class="container p-3" style="text-align: center;">
                                    <a href="#" style="text-decoration: none;">
                                        <img src="{{ asset('images/15.webp') }}" alt="mat_ong"
                                         >
                                        <div class="infoPro">
                                            <h6 class="text-dark" >Mật ong rừng mật khoái</h6>
                                            <div class="price">
                                                <span class="text-dark">500.000đ</span>
                                            </div>
                                            <form action="/cart/add" method="post"
                                                class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                                data-id="product-actions-14341653" enctype="multipart/form-data">
                                                <div class="group_action">
                                                    <input type="hidden" name="variantId" value="24344327">
                                                    <a class="button_add add_to_cart"
                                                        style="text-decoration: none; color: rgb(245, 12, 12);"
                                                        title="Thêm vào giỏ">
                                                        <b>THÊM GIỎ HÀNG</b>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="item border">
                                <div class="container p-3" style="text-align: center;">
                                    <a href="#" style="text-decoration: none;">
                                        <img src="{{ asset('images/14.webp') }}" alt="mat_ong">
                                          
                                        <div class="infoPro">
                                            <h6 class="text-dark" >Mật Hoa Cà Phê</h6>
                                            <div class="price">
                                                <span class="text-dark">-67%</span>
                                                <span class="text-dark">100.000đ</span>
                                                <span class="text-dark"><del>300.000đ</del></span>
                                            </div>
                                            <form action="/cart/add" method="post"
                                                class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                                data-id="product-actions-14341653" enctype="multipart/form-data">
                                                <div class="group_action">
                                                    <input type="hidden" name="variantId" value="24344327">
                                                    <a class="button_add add_to_cart"
                                                        style="text-decoration: none; color: rgb(245, 12, 12);"
                                                        title="Thêm vào giỏ">
                                                        <b>THÊM GIỎ HÀNG</b>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="item border">
                                <div class="container p-3" style="text-align: center;">
                                    <a href="#" style="text-decoration: none;">
                                  
                                        <img src="  {{ asset('images/9350631000056.webp') }}" alt="mat_ong"
                                          >
                                        <div class="infoPro">
                                            <h6 class="text-dark">Mật Ong Hoa Sâm Ngọc Linh</h6>
                                            <div class="price">
                                                <span class="text-dark">-33%</span>
                                                <span class="text-dark">1.000.000đ</span>
                                                <span class="text-dark "><del>1.500.000đ</del></span>
                                            </div>
                                            <form action="/cart/add" method="post"
                                                class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                                data-id="product-actions-14341653" enctype="multipart/form-data">
                                                <div class="group_action">
                                                    <input type="hidden" name="variantId" value="24344327">
                                                    <a class="button_add add_to_cart"
                                                        style="text-decoration: none; color: rgb(245, 12, 12);"
                                                        title="Thêm vào giỏ">
                                                        <b>THÊM GIỎ HÀNG</b>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item border">
                                <div class="container p-3" style="text-align: center;">
                                    <a href="#" style="text-decoration: none;">
                                        <img src="{{ asset('images/13.webp') }}" alt="mat_ong"
                                          >
                                        <div class="infoPro">
                                            <h6 class="text-dark">Mật ong sữa chúa</h6>
                                            <div class="price">
                                                <span class="text-dark">-50%</span>
                                                <span class="text-dark">250.000đ</span>
                                                <span class="text-dark"><del>500.000đ</del></span>
                                            </div>
                                            <form action="/cart/add" method="post"
                                                class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                                data-id="product-actions-14341653" enctype="multipart/form-data">
                                                <div class="group_action">
                                                    <input type="hidden" name="variantId" value="24344327">
                                                    <a class="button_add add_to_cart"
                                                        style="text-decoration: none; color: rgb(245, 12, 12);"
                                                        title="Thêm vào giỏ">
                                                        <b>THÊM GIỎ HÀNG</b>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- product2------------------------------------------------------------------------ -->

                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/4.webp') }}" alt="mat_ong"
                                        title="Son Thỏi Apieu True Fitting Lipstick">
                                    <div class="infoPro">
                                        <h6 class="text-dark">Mật ong chín Nhãn Hoa Cổ Thụ</h6>
                                        <div class="price">
                                            <span class="text-dark">-30%</span>
                                            <span class="text-dark">150.000đ</span>
                                            <span class="text-dark "><del>1.000.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                
                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/11.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong Hoa Bạc Hà</h6>
                                    <div class="price">
                                        <span class="text-dark">-70%</span>
                                        <span class="text-dark">350.000đ</span>
                                            <span class="text-dark"><del>700.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT3------------------------------------------------------------------------------>
                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/8.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong Tinh Nghệ</h6>
                                    <div class="price">
                                        <span class="text-dark">-30%</span>
                                        <span class="text-dark">700.000đ</span>
                                            <span class="text-dark "><del>1.000.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/4.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong chín Hoa Xuyến Chi</h6>
                                    <div class="price">
                                        <span class="text-dark">-50%</span>
                                        <span class="text-dark">300.000đ</span>
                                            <span class="text-dark "><del>600.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/17.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong rừng Hoa Phương Nam</h6>
                                    <div class="price">
                                        <span class="text-dark">-50%</span>
                                        <span class="text-dark">200.000đ</span>
                                            <span class="text-dark "><del>400.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/16.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong rừng hoa Cao Nguyên</h6>
                                    <div class="price">
                                        <span class="text-dark">-23%</span>
                                        <span class="text-dark">230.000đ</span>
                                            <span class="text-dark "><del>300.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/frame-8s.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong rừng cao thảo dược Honimore</h6>
                                    <div class="price">
                                        <span class="text-dark">-40%</span>
                                        <span class="text-dark">300.000đ</span>
                                            <span class="text-dark "><del>500.000đ</del></span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item border">
                            <div class="container p-3" style="text-align: center;">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/frame-7-1.webp') }}" alt="mat_ong"
                                    title="Son Thỏi Apieu True Fitting Lipstick">
                                <div class="infoPro">
                                    <h6 class="text-dark">Mật ong rừng Hoa Yên Bạch Honimore</h6>
                                    <div class="price">
                                        <span class="text-dark">500.000đ</span>
                                        </div>
                                        <form action="/cart/add" method="post"
                                            class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                            data-id="product-actions-14341653" enctype="multipart/form-data">
                                            <div class="group_action">
                                                <input type="hidden" name="variantId" value="24344327">
                                                <a class="button_add add_to_cart"
                                                    style="text-decoration: none; color: rgb(245, 12, 12);"
                                                    title="Thêm vào giỏ">
                                                    <b>THÊM GIỎ HÀNG</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

    </section>



    
    <footer>
        <div class="container justify-content-center mt-5 mb-5">
            <hr>
            <div class="row">
                <div class="col-md-3 ">
                    <h4 class="title-menu">
                        <span>Địa chỉ</span>
                    </h4>
                    <div class="mt-3">
                        <i class="fa-solid fa-location-dot text-success me-4"></i>
                        <span>Tầng 6 tòa nhà ladeco,266 Đội Cấn, phường Liễu Giai,Hà Nội,</span>
                    </div>
                    <hr class="text-success" style="font-size: 50px; width: 150px">
                    <div class="mt-3">
                        <i class="fa-solid fa-phone text-success me-4"></i>
                        <span>1800 6750</span>
                    </div>
                    <div class="mt-3">
                        <i class="fa-solid fa-location-dot text-success me-4"></i>
                        <span>hellocafein@gmail.com</span>
                    </div>
                    <div class="mt-3">
                        <i class="fa-solid fa-envelope text-success me-4"></i>
                        <span>Hệ thống chi nhánh</span>
                    </div>

                </div>
                <div class="col-md-3">
                    <h4 class="title-menu">
                        <span>THÔNG TIN KHÁCH HÀNG</span>
                    </h4>
                    <hr class="text-success" style="font-size: 50px; width: 150px">
                    <div class="mt-3">
                        <span>Trang chủ</span>
                    </div>
    
                    <div class="mt-3">
                        <span>Sản phẩm</span>
                    </div>
                    <div class="mt-3">
                        <span>Tin tức</span>
                    </div>
                    <div class="mt-3">
                        <span>Liên hệ</span>
                    </div>
                    <div class="mt-3">
                        <span>Giới thiệu</span>
                    </div>
                    <div class="mt-3">
                        <span>Cẩm nang</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="title-menu">
                        <span>CHÍNH SÁCH MUA HÀNG</span>
                    </h4>
                    <hr class="text-success" style="font-size: 50px; width: 150px">
                    <div class="mt-3">
                        <span>Trang chủ</span>
                    </div>
                   
                    <div class="mt-3">
                        <span>Sản phẩm</span>
                    </div>
                    <div class="mt-3">
                        <span>Tin tức</span>
                    </div>
                    <div class="mt-3">
                        <span>Liên hệ</span>
                    </div>
                    <div class="mt-3">
                        <span>Giới thiệu</span>
                    </div>
                    <div class="mt-3">
                        <span>Cẩm nang</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <h4 class="title-menu">
                        <span>DỊCH VỤ HỖ TRỢ</span>
                    </h4>
                    <div class="inline-block col">
                        <span class="">
                            <a href="#"><img src="{{ asset('images/payment.webp') }}" alt="payment"></a>
                        </span>
                    </div>

                </div>

            </div>

            <hr>
            <div class="bg-footer-bottom copyright clearfix">
                <div class="container">
                    <div class="inner clearfix">
                        <div class="row">
                            <div id="copyright" class="col-md-10">
                                <span class="wsp">
                                    <span class="mobile"> Bản quyền thuộc về <b class="text-success">Cefein Team  </b>
                                        
                                        <span class="hidden-xs"> | </span>
                                    </span>
                                    <span class="opacity1">Cung cấp bởi</span>
                                    <a href="#" rel="nofollow" title="Sapo" target="_blank"
                                        class="text-success">Sapo</a>
                                </span>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="backtop pc hidden-xs show text-success" title="Lên đầu trang">Lên
                                    đầu
                                    trang <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

</body>

<script src="../assets/js/main.js"></script>
<script src="../assets/jquery/jquery-3.7.1.min.js"></script>
<script src="../assets/fontawesome/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

</html>