<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-avatar@latest/dist/avatar.min.css" rel="stylesheet">
    
        <!-- Custom icons from fontawesome-->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    
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
                <?php if(session('pic_profil')): ?>
                    <img class="avatar avatar-128 rounded-circle p-1"
                    src="<?php echo session('pic_profil'); ?>" alt="avatar">
                <?php else: ?>
                    <img class="avatar avatar-128 rounded-circle p-1"
                    src="<?php echo base_url('img/user.webp')?>" alt="avatar">
                <?php endif; ?> 
                    <h5 class="my-3"><?php echo session('full_name'); ?></h5>
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
                        <p class="text-muted mb-0"><?php echo session('full_name'); ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0 text-lowercase"><?php echo session('email_address'); ?></p>
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
                        <li class="nav-item">
                        <a href="<?php echo base_url("common/userparameter/update_data")?>" class="nav-link text-dark">
                                    <i class="fas fa-plus-circle mr-3 text-primary fa-fw"></i>
                                    Click Here to Edit !
                                </a>
                        </li>

                    </div>
                </div>
            </div>
                
               
    </section>
    <?php else: ?>
  
        <?php echo view('template/carousel_connexion.php');?>
    <?php endif; ?> 
    <?php echo view('template/footer.php');?>

    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
