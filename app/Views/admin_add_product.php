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
<?php if(session('logged_in')): ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"> <img src="<?php echo base_url('img/5.png'); ?>" alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">ADD NEW PRODUCT</h1>
                                        <?php
                                        if( isset($validation) )
                                            echo "<div style='color: #ff0000'>".$validation->listErrors()."</div>";

                                        if( isset($special_message) )
                                            echo $special_message;
                                        ?>
                                    </div>					
                                    
                                    <form class="user" method="post" action="<?= base_url('common/dashboard/add_product') ?>" enctype="multipart/form-data" autocomplete="off">
                                        <div class="mb-4 form-group">
                                            <label for="category"></label>
                                            <select name="category" id="category">
                                                <option value="">--Please choose a category--</option>
                                                
                                            </select>
                                        </div>   
                                        <div class="mb-4 form-group">
                                            <input type="number" class="form-control form-control-user" id="price" name="price" placeholder="Product Price" autofocus />
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Product image</label>
                                            <input class="form-control" type="file" name="file">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Product Description" rows="3"></textarea>
                                        </div>
                                        <div class="mb-4 form-group">
                                            <input type="number" class="form-control form-control-user" id="status" name="status" placeholder="Product Status" autofocus />
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="add product" />
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('common/dashboard'); ?>">
                                        <i class="fas fa-arrow-left"></i>
                                        Dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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