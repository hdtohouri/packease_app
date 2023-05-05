<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-avatar@latest/dist/avatar.min.css" rel="stylesheet">
    
        <!-- Custom icons from fontawesome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
        <!-- Custom slider with swiperJS-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/267a08c3f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="icon"  href="<?php echo base_url('favicon.ico'); ?>">
    <title>Packease</title>

    <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>
</head>
<body class="bg-white">
    
    <?php echo view('template/header.php');?>

    <section class="">
        <div class="container">
            <div class="d-sm-flex">
                <div>
                    <h3><span class="text-align-center" id="type"></span></h3>
                </div>  
            </div>
        </div>  
    </section>
    <section class="icons-container justify-content-around">
       <form class="d-none d-md-flex input-group w-auto my-auto">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder='Search'
          style="min-width: 230px;"
        />
        <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
      </form>
    </section>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/40.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/79.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/50.jpg")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/80.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/21.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/30.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/36.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/44.webp")?>" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo base_url("img/43.webp")?>" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="card-body p-0">
                    
                    <hr>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <h4 class='text-center'>Our Categories</h4>
                            <a href=""></a>
                            <div class="col-lg-4 d-none d-lg-block bg-login-image"> <img src="<?php echo base_url('img/72.webp'); ?>" alt="">
                            </div>
                            <div class="col-lg-4 d-none d-lg-block bg-login-image"> <img src="<?php echo base_url('img/93.webp'); ?>" alt="">
                            </div>
                            <div class="col-lg-4 d-none d-lg-block bg-login-image"> <img src="<?php echo base_url('img/76.webp'); ?>" alt="">
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home">
                    <img data-speed="10" class="home-parallax" src=<?php echo base_url('img/pic.png'); ?> data-speed="5" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                    <p>Our catalog is filled with a wide range of cosmetic products packaging that are specially formulated to meet your unique needs. 
                        Whether you're looking for skincare packaging to achieve a clear and radiant complexion or makeup packaging to enhance your product beauty, PackEase has got you covered.
                    </p>
                    <button class="btn btn-primary rounded-3 custom-btn" type="button">
                        <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">
                              <i class="fas fa-download"></i>  Download Catalogue</i>
                        </a>
                    </button>
                </div>
            </div>  
        </div>
    </section>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
            <img src="<?php echo base_url('img/pic.png'); ?>" class="d-block w-25 mx-auto" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="<?php echo base_url('img/pic.png'); ?>" class="d-block w-25 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url('img/pic.png'); ?>" class="d-block w-25 mx-auto" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">id_usr</th>
                                            <th scope="col">usr_name</th>
                                            <th scope="col">full_name</th>
                                            <th scope="col">subscription_date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=0; foreach($user_list as $user): ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td><?= $user['image'] ?></td>
                                            <td><?= $user['description'] ?></td>
                                            <td><?= $user['price'] ?></td>
                                            <td><?= $user['status'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
    
    <?php echo view('template/footer.php');?>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

