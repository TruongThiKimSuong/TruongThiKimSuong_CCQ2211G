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
            .bread-crumb {
                background: #ece9e9;
                border-top: solid 1px #ebebeb;
                border-bottom: solid 2px #d1cfcf;
            }
            .button {
                background-color: #94e3df;
            }
            
        </style>

</head>

<body>

    <header>
        <div class="mb-2">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo-center">
                            <div class="logo">
                                <a href="/" class="logo-wrapper">
                                    <img src="{{ asset('images/logo.webp') }}" alt="lg Delta Cosmetic" style="height: 80px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 padding-0 mt-4">
                        <div class="wrap_main hidden-xs hidden-sm">
                            <div class="bg-header-nav hidden-xs hidden-sm">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item active" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                                        </li>
                                       
                                        <li class="nav-item dropdown ms-3" id="dropdownMenu">
                                            <a class="nav-link active" aria-current="page" href="/"
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
                                            <a class="nav-link active" aria-current="page" href="#">Liên hệ</a>
                                        <li class="nav-item ms-3" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="#">Giới thiệu</a>
                                        </li>

                                        <li class="nav-item ms-3" id="menu-item">
                                            <a class="nav-link active" aria-current="page" href="#">Cẩm nang</a>
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
                                    <a href="#"><img src="{{ asset('images/bag.webp')}}" alt="cart"></a>
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

                        <li><strong><span style="color: #94e3df;">Liên hệ</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="main mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Gửi yêu cầu của bạn </h2>
                  
                    <form action="#" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Họ và tên"
                                required>
                            <div class="invalid-feedback">
                                Vui lòng nhập họ và tên.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Số điện thoại"
                                required>
                            <div class="invalid-feedback">
                                Vui lòng nhập số điện thoại hợp lệ.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required>
                            <div class="invalid-feedback">
                                Vui lòng nhập địa chỉ email hợp lệ.
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="contact" id="comment" class="form-control" rows="5" placeholder="Nội dung"
                                required></textarea>
                            <div class="invalid-feedback">
                                Vui lòng nhập nội dung.
                            </div>
                        </div>
                        <button type="submit" class="btn button">Gửi tin nhắn</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section_maps section mt-5 ms-3">
                        <div class="iFrameMap">
                            <div id="contact_map" class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.904611732553!2d105.81388241542348!3d21.03650239288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIFNBUE8!5e0!3m2!1svi!2s!4v1555900531747!5m2!1svi!2s"
                                    width="600" height="450" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
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