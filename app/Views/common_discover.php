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
   
    <!--Section: Contact v.2-->
    <section class="col-mb-4">

    <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4" id="contact">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.<br>  Our team will come back to you within
            a matter of hours to help you.</p>

            <?php
                if( isset($validation) )
                    echo "<div style='color: #ff0000'>".$validation->listErrors()."</div>";

                if( isset($special_message) )
                    echo $special_message;
            ?>

        <form class="user" method="post" action="<?php echo base_url('common/login/contactus'); ?>">
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="name" class="form-label">Your Name :</label>
                <input type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="email" class="form-label">Email address :</label>
                <input type="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="message" class="form-label">Your message :</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
             <br><br>
            <div class="col-lg-12 text-center"> 
                <input type="submit" class="btn btn-primary btn-user btn-block " value="Envoyer" />
            </div>
        </form>
    </section>
    <!--Section: Contact v.2-->
    <section class="bg-white text-light p5 text-sm-start">
        <div class="container">
            <div class="d-sm-flex">
                <div>
                    <h3><span class="text-align-center" id="type"></span></h3>
                </div>  
            </div>
        </div>
        
    </section>
    <div class="container col-md-8" id="reviews">
       <div class="row">
            <div class="col-md-12 col-center">
                <h2>OUR TEAM</h2>
                
            </div>   
       </div>
    </div>

    

  <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "cube",
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
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

