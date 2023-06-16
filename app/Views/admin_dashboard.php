<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Custom icons from fontawesome-->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    
        <!-- Custom slider with swiperJS-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/267a08c3f1.js" crossorigin="anonymous"></script>
    <link rel="icon"  href="<?php echo base_url('favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/sidebar.css'); ?>">
    <title>Packease</title>
</head>
    
<body> 
<?php if(session('logged_in')): ?>
    <div class="main-container d-flex">
        
        <div class="col-2 content">
            
        <!-- Vertical navbar -->
        <div class="vertical-nav bg-info" id="sidebar">
            <div class="py-4 px-3 mb-4 bg-light">
                <div class="media d-flex align-items-center">
                <img decoding="async" loading="lazy" src="<?php echo base_url("img/photo5.webp")?>" alt="..." width="70" height="70" class="mr-3 rounded-circle shadow-sm">
                <div class="media-body">
                    <h4 class="m-0">Olive</h4>
                    <p class="font-weight-normal text-muted mb-0">Admin</p>
                </div>
                </div>
            </div>
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

            <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                <a href="#" class="nav-link text-dark bg-light">
                            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                            home
                        </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo base_url("common/dashboard/add_product")?>" class="nav-link text-dark">
                            <i class="fas fa-plus-circle mr-3 text-primary fa-fw"></i>
                            add product
                        </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                            <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                            orders
                        </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                            Gallery
                        </a>
                </li>
            </ul>

            <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Users</p>

            <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                <a href="<?php echo base_url("common/dashboard/list_user")?>" class="nav-link text-dark">
                            <i class="fas fa-users mr-3 text-primary fa-fw"></i>
                            Users list
                        </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                            <i class="fas fa-comment-alt mr-3 text-primary fa-fw"></i>
                            messages
                        </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                            <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                            analytics
                        </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                            <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                            analytics
                        </a>
                </li>


                <li class="nav-item">
                <a href="<?php echo base_url('common/admin_logout')?>" class="nav-link text-dark">
                            <i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
                            Deconnexion
                        </a>
                </li>
            </ul>
        </div>
        <!-- End vertical navbar -->
        </div>
        </div> 
    <?php else: ?>               
        <?php echo view('template/carousel_connexion');?>
        <a href="<?php echo base_url('common/admin')?>" class="nav-link text-dark">
                            <h2><i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>Click here</h2> 
        </a>       
    <?php endif; ?>   
    </div>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
