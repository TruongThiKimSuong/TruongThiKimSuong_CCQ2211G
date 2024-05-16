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

        .title-product {
            color: #292929;
            font-size: 24px;
            line-height: 26px;
            font-family: "Noto Serif", serif;
            font-weight: 700;
        }

        .description p {
            height: 50px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .addCart {
            color: #1e6225;
        }

        .addCart:hover {
            background-color: #1e6225;
            color: white;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
            height: auto;
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

                        <li><strong><span style="color: #94e3df;">Mật ong rừng Mật Khoái</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="main mt-5 container">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ assets('images/14.webp') }}" alt="mat_ong" title="Mật ong rừng Mật Khoái"
                        class="border" style="width: 300px; height: 300px;">
                </div>
                <div class="col-md-6">
                    <div class=" details-pro">
                        <div class="info">
                            <h1 class="title-product">Mật ong rừng Mật Khoái</h1>
                           
                            <hr>
                            <div class="price">
                                <p class="text-danger h3">500.000đ</p>
                            </div>
                            <div class="description">
                                <p title="Bổ cho sức khỏe">
                                    Bổ cho sức khỏe.</p>
                            </div>
                            <div class="quality">
                                <div class="d-flex align-items-center mb-4 pt-2 ">
                                    <div class="input-group quantity mr-3" style="width: 200px">
                                        <button class='btn btn-success btn-plus' onclick="decreaseValue()">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input type="number" class="text-center form-control input-number"
                                            id="quantity" value="1" />
                                        <button class='btn btn-success btn-plus' onclick="increaseValue()">
                                            <i class='fa fa-plus'></i>
                                        </button>
                                    </div>
                                    <span class="">&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                    <button class='btn px-4 ms-2 border border-success addCart'>
                                        <i class="fa-solid fa-cart-plus"></i>
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="container section4">
                    <div class="title_module_bbf a-center section">
                        <h2 class="bf_flower">
                            <a href="san-pham-noi-bat" title="Sản phẩm mới" class="text-dark"
                                style="text-decoration: none;">
                                <h3>Có thể bạn sẽ thích</h3>
                            </a>
                        </h2>
                        <span class="destitle">Sản phẩm được khách hàng lựa chọn thêm</span>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="container">
                                <a href="#" style="text-decoration: none;">
                                    <img src=" {{ asset('images/17.webp') }}" alt="mat_ong"
                                        title="Sữa tắm Victoria's Secret quyến rũ">
                                    <div class="infoPro">
                                        <h6 class="text-dark" title="Mật ong rừng hoa Rừng Phương Nam">Mật ong rừng hoa Rừng Phương Nam</h6>
                                        <div class="price">
                                            <span class="text-danger">200.000đ</span>
                                            <span class="text-secondary mx-2"><del>400.000đ</del></span>
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
                       
                            
                        <div class="item">
                            <div class="container">
                                <a href="#" style="text-decoration: none;">
                                    <img src=" {{ asset('images/frame-7-1.webp') }}" alt="mat_ong" title="Mật ong rừng hoa Yên Bạch">
                                    <div class="infoPro">
                                        <h6 class="text-dark" title="Mật ong rừng hoa Yên Bạch">Mật ong rừng hoa Yên Bạch Honimore</h6>
                                        <div class="price">
                                            <span class="text-danger">500.000đ</span>

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


                        <div class="item">
                            <div class="container">
                                <a href="#" style="text-decoration: none;">
                              
                                    <img src="  {{ asset('images/9350631000056.webp') }}" alt="mat_ong"
                                        title=" Mật Ong Hoa Sâm Ngọc Linh" class="border border-light">
                                    <div class="infoPro">
                                        <h6 class="text-dark" title=" Mật Ong Hoa Sâm Ngọc Linh">
                                           Mật Ong Hoa Sâm Ngọc Linh</h6>
                                        <div class="price">
                                            <span class="text-danger">1.000.000đ</span>
                                            <span class="text-secondary mx-2"><del>1.500.000đ</del></span>
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


                        <div class="item">
                            <div class="container">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/8.webp') }}" alt="mat_ong"
                                        title="Mật ong Tinh Nghệ">
                                    <div class="infoPro">
                                        <h6 class="text-dark" title="Mật ong Tinh Nghệ">Mật ong Tinh Nghệ</h6>
                                        <div class="price">
                                            <span class="text-danger">700.000đ</span>
                                            <span class="text-secondary mx-2"><del>1.000.000đ</del></span>
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

                        <div class="item">
                            <div class="container">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/4.webp') }}" alt="mat_ong"
                                        title="Mật ong chín hoa Xuyến Chi">
                                    <div class="infoPro">
                                        <h6 class="text-dark" title="Mật ong chín hoa Xuyến Chi">Mật ong chín hoa Xuyến Chi</h6>
                                        <div class="price">
                                            <span class="text-danger">300.000đ</span>
                                            <span class="text-secondary mx-2"><del>600.000đ</del></span>
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

                        <div class="item">
                            <div class="container">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('images/11.webp') }}" alt="mat_ong"
                                        title="Mật ong Hoa Bạc Hài">
                                    <div class="infoPro">
                                        <h6 class="text-dark" title="Mật ong Hoa Bạc Hà">Mật ong Hoa Bạc Hà</h6>
                                        <div class="price">
                                            <span class="text-danger">350.000đ</span>
                                            <span class="text-secondary mx-2"><del>700.000đ</del></span>
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



<script>
    function increaseValue() {
        var value = parseInt(document.getElementById('quantity').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('quantity').value = value;
    }

    function decreaseValue() {
        var value = parseInt(document.getElementById('quantity').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            document.getElementById('quantity').value = value;
        }
    }
</script>
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
</script>s

</html>