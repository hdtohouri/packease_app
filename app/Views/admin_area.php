<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!-- Custom icons from fontawesome-->
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    
        <!-- Custom slider with swiperJS-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/267a08c3f1.js" crossorigin="anonymous"></script>
    <link rel="icon"  href="<?php echo base_url('favicon.ico'); ?>">
    <link rel="stylesheet" href="">
    <title>Packease</title>
</head>

     
<body class="bg">


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"> <img src="<?php echo base_url('img/logo.png'); ?>" alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">ESPACE ADMINISTRATEUR</h1>
                                        <?php
                                        if( isset($validation) )
                                            echo "<div style='color: #ff0000'>".$validation->listErrors()."</div>";

                                        if( isset($special_message) )
                                            echo $special_message;
                                        ?>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url('common/admin'); ?>" autocomplete="off">
                                        <div class="mb-4 form-group">
                                            <input type="text" class="form-control form-control-user " id="UserName" name="UserName" placeholder="Nom d'utilisateur" autofocus />
                                        </div>
                                        <div class="mb-4 form-group">
                                            <input type="password" class="form-control form-control-user" id="UserPwd" name="UserPwd" placeholder="Mot de passe" />
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Connexion" />
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('#'); ?>">Mot de passe oublié ?</a>
                                    </div>
                                    <div class="text-center">
                                    <a href="<?php echo base_url('#'); ?>">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
</html>






                    



















