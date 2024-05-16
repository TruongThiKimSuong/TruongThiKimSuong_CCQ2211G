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
</head>

<body>
    <header class="header header-menu">
        <div class="mb-2">
            <div class="container mt-3">
            <div class="row">
                    <nav class="navbar navbar-expand-sm bg-warning navbar-light">
                        <a href="/" class="logo-wrapper">
                            <img src="{{ asset('images/bee_header.webp') }}" alt="lg Delta Cosmetic" style="height: 60px;">
                        </a>
                        <div class="container-fluid">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a  class="nav-link active" href="#">MIỄN PHÍ VẬN CHUYỂN TRÊN MỌI ĐƠN HÀNG </a>
                            </li>
                          </ul>
                        </div>
                    </nav>
                    <section class="section_header">
            <div class="container">
                <div class="row py-2 align-items-center">
                    <div class="col-6 col-md-3">
                        <a href="index.html">
                            <img src="{{asset('images/logo (1).webp')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 d-none d-md-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                           
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                          
                        </div>
                    </div>
                    <div class="col-2 col-md-2">
                        <div class="input-group">
                            <span class="form-control">HOLINE 1800 6750</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 mt-4">
                        <div class="row">
                            <div class="inline-b hidden-xs col dropstart " id="userDropdown">
                            <div class="inline-block col">
                                <span class="">
                                    <a href="#"><img src="{{ asset('images/bag.webp') }}"  alt="cart"></a>
                                </span>
                            </div>
                                <span class="imguser">
                                    <img src="{{ asset('images/user.webp') }}" alt="user" id="userImage">
                                    <ul class="dropdown-content" id="userDropdownContent">
                                        <li class="btn btn-success rounded-fill mt-3" style="width: 200px"><a
                                                class="dropdown-item mt-2" href="#">Đăng nhập</a></li>
                                        <li class="btn border-secondary rounded-fill my-3" style="width: 200px"><a
                                                class="dropdown-item mt-2" href="#">Đăng ký</a></li>
                                    </ul>
                                </span>
                            </div>
                                                
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </header>
    <menu>
        <section class="menu bg-dark">
            <div class="container ">
                <div class="row">
                    <div class="col-md-9">
                        <nav class="navbar navbar-expand-lg bg-dark">
                            <div class="container-fluid">
                              <a class="navbar-brand d-none" href="#">Navbar</a>
                                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="navbar-toggler-icon"></span>
                                  </button>
                                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page" href="#">Trang chủ</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Giới thiệu</a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  aria-current="page"
                                                href="http://127.0.0.1:5500/pages/product.html#"
                                                id="navbarDropdownMenuLink">Sản phẩm</a>>
                                            <ul class="dropdown-content" aria-labelledby="navbarDropdownMenuLink  text-white bg-dark">
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong nhập khẩu</a></li>
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong rừng</a></li>
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong hoa</a></li>
                                                <li><a class="dropdown-item mt-2 " href="#">Mật ong thiên nhiên</a></li>
                                                <li><a class="dropdown-item mt-2" href="#">Mật ong nguyên chất</a></li>
                                            </ul>
                                        </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Tin tức
                                    </a>
                                  
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link disabled text-white active" aria-current="page"
                                                href="http://127.0.0.1:5500/pages/contact.html">Liên hệ</a>

                                  <li class="nav-item">
                                    <a class="nav-link disabled text-white" aria-disabled="true">Cẩm nang</a>
                                  </li>
                                </ul>
                               
                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
            </div>
            
        </section>
                

        <div class="my-5">
            <div id="carouselExampleControls" class="carousel slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner">
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

   
    <div class="bg-footer-bottom copyright clearfix">
        <div class="container">
            <div class="inner clearfix">
                <div class="row">
                    <div class="inline-block col">
                        <span class="">
                            <a href="#"><img src="{{ asset('images/9350631000056.webp') }}" alt=""></a>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <div class="container mt-3" >
                            <h3>MẬT ONG HOA SÂM NGỌC LINH </h3>
                            <div class="mt-3">
                                <span>Uống mật ong vào buổi sáng giúp làm sạch, bổ sung năng lượng cho dạ dày.</span>
                            </div>
                            <div class="mt-3">
                                <span>Uống trước khi đi ngủ giúp an thần, dễ ngủ.</span>
                            </div>
                            <div class="mt-3">
                                <span>Uống mật trước khi ăn 30 phút giúp tốt cho hệ tiêu hó...</span>
                            </div>
                        </div>
                        <div class="container mt-3" >
                            <p>Đặc điểm sản phẩm </p>
                            <div class="mt-3">
                                <span>Ong hút mật của hoa sâm Ngọc Linh và các loại dược liệu quý khác nên mật thơm, mùi 
                                    vị có chút khác biệt so với các loại mật ong khác.
                                    Côn...</span>
                            </div>
                        </div>
                
                        <div class="container mt-3" >
                            <p>Kích thước</p>
                            <button type="button" class="btn btn-warning">200g</button>
                            <button type="button" class="btn">500g</button>
                        </div>
                        <div class="item">
                            <div class="container">
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
                </div>
            </div>
        </div>
    </div>

    
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
<script src="assets/js/main.js"></script>
<script src="assets/jquery/jquery-3.7.1.min.js"></script>
<script src="assets/fontawesome/js/all.min.js"></script>
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