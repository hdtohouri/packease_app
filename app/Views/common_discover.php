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
    <link rel="stylesheet" href="<?php echo base_url('css/map.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="icon"  href="<?php echo base_url('favicon.ico'); ?>">

    <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    

    .swiper {
      width: 300px;
      height: 300px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -150px;
      margin-top: -150px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>
</head>
    <title>Packease</title>
</head>
<body>
    
    <?php echo view('template/header.php');?>
    

    <div id="carouselExampleInterval" class="carousel slide bg-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
            <img src="<?php echo base_url('img/pic.png'); ?>" class="d-block w-25 mx-auto" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="<?php echo base_url('img/p-removebg-preview.png'); ?>" class="d-block w-25 mx-auto" alt="...">
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
   
    
    <section class="bg-white text-light p5 text-sm-start">
        <div class="container">
            <div class="d-sm-flex">
                <div>
                    <h3><span class="text-align-center" id="type"></span></h3>
                </div>  
            </div>
        </div>
        
    </section>
    <div class="container col-md-5" id="reviews">
       <div class="row">
            <div class="col-md-12 col-center">
                <h2>OUR TEAM</h2>
                <div id="carouselExampleInterval" class="carousel carousel-white slide" data-bs-ride="carousel">
                    <div class="carousel-inner"> 
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img class="avatar avatar-128 rounded-circle"
                                src="<?php echo base_url('img/amira.jpeg')?>">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="overview"><b>Amira Markad</b>, project leader</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle"
                                src="<?php echo base_url('img/soukaina.jpeg')?>">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="overview"><b>Soukaina Elmrabet</b></p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle"
                                src="<?php echo base_url('img/asma.jpeg')?>">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="overview"><b>Assma Ibikas</b></p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle"
                                src="<?php echo base_url('img/bouanisse.jpeg')?>">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="overview"><b>Meryem Bouanisse</b></p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle"
                                src="<?php echo base_url('img/henoc.jpeg')?>">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="overview"><b>Tohouri Henoc</b></p>
                            </div>
                        </div>
                        
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="visually-hidden carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="visually-hidden carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>   
       </div>
    </div>
    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                    <h1></h1>
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
        </div>
    </section>
    <div class="col-md-12 col-center">
        <h2>OUR Location</h2>            
    </div>   
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCujtCrsQkuLxHgmVMzf_CTiUe6m-Kx0hk"></script>
    <script>
        function initMap() {
            var myLatLng = {lat: 30.3960825, lng:  -9.5145127};

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 12
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Agadir'
            });
        }
        google.maps.event.addDomListener(window, 'load', initMap);
        
    </script>
    
    <?php echo view('template/footer.php');?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

