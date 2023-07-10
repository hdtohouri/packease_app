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

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Message List</h1>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">company_name</th>
                                            <th scope="col">sender_name</th>
                                            <th scope="col">website_url</th>
                                            <th scope="col">sender_email</th>
                                            <th scope="col">produc_to_pack</th>
                                            <th scope="col">produc_image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=0; foreach($message_list as $message): ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td><?= $message->company_name ?></td>
                                            <td><?= $message->sender_name ?></td>
                                            <td><?= $message->website_url ?></td>
                                            <td><?= $message->sender_email ?></td>
                                            <td><?= $message->produc_to_pack ?></td>
                                            <td><img src="<?= $message -> produc_image ?>" alt="product image" class="img-fluid"></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    </div>
                                    
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
