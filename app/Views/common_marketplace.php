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

    <!-- Zoomooz.js CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/zoomooz/dist/zoomooz.min.css">

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
                        <a href="<?php echo base_url('common/marketplace/pdf'); ?>" class="nav-link">
                              <i class="fas fa-download"></i>  Download catalog</i>
                        </a>
                    </button>
                </div>
            </div>  
        </div>
    </section>

  <div class="container mt-5" >
		<div class="row">
			<div class="col-md-3">
				<div class="card mb-3">
					<div class="card-header bg-transparent text-center">
						<h5>Categories</h5>
					</div>
					<div class="card-body">
						<ul class="list-unstyled">
							<li><a href="<?= base_url('#') ?>">All Products</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php foreach ($product_list as $product) { ?>
					<div class="col-md-4">
						<div class="card mb-3">
							<div class="card-header bg-transparent text-center">
                <a href="<?= $product['image'] ?>" data-action="zoom" class="zoom"><img src="<?= $product['image'] ?>" alt="product['name'] ?>" class="img-fluid"></a>
								<div class="offer"><?= $product['price'] ?>% OFF</div>
							</div>
							<div class="card-body">
								<p class="card-text"><?= $product['description'] ?></p>
								<p class="card-text"><span class="text-primary">Dh<?= $product['price'] ?></span> <del class="text-muted">Dh<?= $product['price'] ?></del></p>
								<a href="#" class="btn btn-primary btn-block">
                  <i class="fas fa-shopping-cart">  </i>
                  Add to Cart</a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
    
    
    <?php echo view('template/footer.php');?>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/zoomooz/dist/zoomooz.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.zoom').zoomooz({
				duration: 300,
				scale: 1.2
			});
		});
	</script>

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


