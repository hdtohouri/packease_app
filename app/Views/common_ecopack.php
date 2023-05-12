<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!-- Custom icons from fontawesome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
        <!-- Custom slider with swiperJS-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/267a08c3f1.js" crossorigin="anonymous"></script>
    <link rel="icon"  href="<?php echo base_url('favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    

    .swiper {
      width: 100%;
      height: 100px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
    <title>Packease</title>
</head>

    <?php echo view('template/header.php');?>
    <section class="">
            <div class="container">
                <div class="d-sm-flex">
                    <div>
                        <h3><span class="text-align-center"></span></h3>
                    </div>  
                </div>
            </div>  
    </section>
    
    <div class="container col-md-8">
       <div class="row">
            <div class="col-md-12 col-center">
                <h2>About Us</h2>
                <p>
                    At PackEase, we are passionate about creating custom packaging for
                    cosmetic products. We believe that packaging
                    is one of the first things customers notice when they buy a product. That's why we strive to provide innovative, modern and aesthetically pleasing
                    modern and aesthetically pleasing designs.
                    We offer a range of pre-made designs to meet the needs of different
                    customers. We know that every brand has its own identity and we are
                    here to help companies reflect it through their
                    their packaging. Our design team is also able to
                    customize existing designs to meet the unique requirements of each client.
                </p>        
            </div>
       </div>
    </div>
    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                    <h2>Our mission</h2>
                    <p>
                        Our mission is to provide
                        personalized packaging of high quality
                        quality packaging at competitive prices. We
                        work hard to ensure that every customer
                        every customer receives personalized
                        personalized service and a product that
                        their expectations.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home2">
                    <img class="home-parallax2" src=<?php echo base_url('img/3.png'); ?> data-speed="8" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>  
        </div>
    </section>
    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home">
                    <img data-speed="10" class="home-parallax" src=<?php echo base_url('img/pi-removebg-preview.png'); ?> data-speed="5" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                <h2>Tradition and modernity</h2>
                    <p>We are proud to offer a range of Moroccan handicraft designs. The  Patterns and vibrant colors of Moroccan craftsmanship are very popular with our customers and are a perfect
                       option for those looking to add an exotic touch to their packaging.
                    </p>
                    <button class="btn btn-primary rounded-3 custom-btn" type="button">
                        <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">
                                <i class="fas fa-shopping-cart">  Buy Now</i>
                        </a>
                    </button>
                </div>
            </div>  
        </div>
    </section>
    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                    <h2>Metal Elegant</h2>
                    <p>We are proud to offer a selection of metal packaging
                        for your cosmetic products, a unique and
                        elegant alternative to traditional plastic packaging. Our range of
                        metal packaging is made from high quality materials to ensure, to guarantee 
                        the durability and protection of your products.
                    </p>
                    <button class="btn btn-primary rounded-3 custom-btn" type="button">
                        <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">
                                <i class="fas fa-shopping-cart">  Buy Now</i>
                        </a>
                    </button>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home2">
                    <img class="home-parallax2" src=<?php echo base_url('img/90-removebg-preview.png'); ?> data-speed="8" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>  
        </div>
    </section>
    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home">
                    <img data-speed="10" class="home-parallax" src=<?php echo base_url('img/91-removebg-preview.png'); ?> data-speed="5" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                <h2>Transparency</h2>
                    <p>Glass is a material that has stood the test of time, 
                        offering an elegant packaging solution for
                        cosmetic products, while allowing for a transparent
                        presentation that enhances the texture and
                        and color of your products.
                    </p>
                    <button class="btn btn-primary rounded-3 custom-btn" type="button">
                        <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">
                                <i class="fas fa-shopping-cart">  Buy Now</i>
                        </a>
                    </button>
                </div>
            </div>  
        </div>
    </section>
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src=<?php echo base_url('img/91-removebg-preview.png'); ?> alt="hero section">
        </div>
        <div class="swiper-slide">
            <img src=<?php echo base_url('img/2x.jpg'); ?> alt="hero section">
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src=<?php echo base_url('img/91-removebg-preview.png'); ?> alt="hero section">
        </div>
        <div class="swiper-slide">
            <img src=<?php echo base_url('img/2x.jpg'); ?> alt="hero section">
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
    </div>
  </div>
    <?php echo view('template/footer.php');?>
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>