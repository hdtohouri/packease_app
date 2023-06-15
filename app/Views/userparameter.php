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
</head>
<body class="bg-white">
<?php echo view('template/header.php');?>
<?php if(session('logged_in')): ?>
    

    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                </ol>
                </nav>
            </div>
            </div>

            <div class="row ">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <img class="avatar avatar-128 rounded-circle p-1"
                    src="<?php echo base_url('img/user.webp')?>" alt="avatar">
                    <h5 class="my-3"><?php echo session('nom_complet'); ?></h5>
                    <p class="text-muted mb-4"><?php echo session('adresse'); ?></p>
                    <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="btn btn-primary ms-1">Message</button>
                    </div>
                </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <p class="mb-0 text-lowercase">http://www.packease.com</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                        <p class="mb-0 text-lowercase">packease</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <p class="mb-0 text-lowercase">@packease</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <p class="mb-0 text-lowercase">packease</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0 text-lowercase">packease</p>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo session('nom_complet'); ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0 text-lowercase"><?php echo session('email'); ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo session('numero'); ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo session('numero'); ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php echo session('adresse'); ?></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-2">
                            <h5 class="mb-0">Edit Your informations</h5>
                        </div>
                        <div>	
                        <?php
                            if( isset($validation) )
                                echo "<div style='color: #ff0000'>".$validation->listErrors()."</div>";

                                if( isset($special_message) )
                                echo $special_message;
                                ?>
                        </div>				
                                    
                        <form class="user" method="post" action="<?= base_url('common/dashboard/add_product') ?>" enctype="multipart/form-data" autocomplete="off">
                             
                            <div class="mb-4">
                                <label for="image" class="form-label">Profil Picture</label>
                                <input class="form-control" type="file" name="file">
                            </div>
                            <div class="mb-4">
                                <input type="tel"  class="form-control" name="number" placeholder="Numero" >
                            </div>
                            <div class="mb-4">
                                <input type="text"  class="form-control" name="fullname" placeholder="Nom Complet" >
                            </div>
                            <div class="mb-4 form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Email Adresse" autofocus />
                            </div>
                            <div class="mb-4 form-group">
                                <input type="text" class="form-control form-control-user" name="adress" placeholder="Entrer votre Adresse" autofocus />
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Save" />
                        </form>

                    </div>
                </div>
            </div>
                
               
    </section>
    <?php else: ?>
  
        <?php echo view('template/carousel_connexion.php');?>
    <?php endif; ?> 
    <?php echo view('template/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>



