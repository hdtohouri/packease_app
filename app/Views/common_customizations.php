<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Custom icons from fontawesome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
        <!-- Custom slider with swiperJS-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/267a08c3f1.js" crossorigin="anonymous"></script>
    <link rel="icon"  href="<?php echo base_url('favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/sidebar.css'); ?>">
    <title>Packease</title>
</head>
    
<body> 
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
    
    
    <section class="col-mb-4">

    <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4" id="contact">Customizations</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Contact us today to learn more about our personalized cosmetic packaging service and how<br> we can help you bring your vision to life. 
            We look forward to working with<br> you to create a custom packaging solution that</p>

            <?php
                if( isset($validation) )
                    echo "<div style='color: #ff0000'>".$validation->listErrors()."</div>";

                if( isset($special_message) )
                    echo $special_message;
            ?>

        <form class="user" method="post" action="<?php echo base_url('common/login/contactus'); ?>">
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="company" class="form-label">Company Name :</label>
                <input type="text" class="form-control" id="company" placeholder="Company Name">
            </div> 
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="name" class="form-label">Your Name :</label>
                <input type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="url" class="form-label">Website url :</label>
                <input type="text" class="form-control" id="url" placeholder="Website url">
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="email" class="form-label">Email address :</label>
                <input type="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="Product" class="form-label">Product to be packed :</label>
                <input type="text" class="form-control" id="Product" placeholder="Product to be packed">
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <label for="requierements" class="form-label">Specific requierements :</label>
                <textarea class="form-control" id="requierements" rows="3"></textarea>
            </div>
            <div class="mb-4 col-md-6 col-center m-auto">
                <input type="file" name="userfile" size="20">
                <br><br>
            </div>
             <br>
            <div class="col-lg-12 text-center"> 
                <input type="submit" class="btn btn-primary btn-user btn-block " value="Envoyer" />
            </div>
        </form>
    </section>
    <br>
    <!--Section: Contact v.2-->
    
    
    <?php echo view('template/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
