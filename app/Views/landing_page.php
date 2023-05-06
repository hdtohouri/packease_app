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
<body>
    
    <?php echo view('template/header.php');?>
   
    <section class="bg-dark text-light p5 text-sm-start">
        <div class="container">
            <div class="d-sm-flex">
                <div>
                    <h3><span class="text-align-center" id="type"></span></h3>
                </div>  
            </div>
        </div>
        
    </section>
    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home">
                    <img data-speed="10" class="home-parallax" src=<?php echo base_url('img/hero.png'); ?> data-speed="5" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                    <p>Packease offers customized packaging for cosmetic products, allowing companies to create a unique and brand image.
                        By customizing their packaging, companies can communicate their message and visual aesthetic.
                    </p>
                    <button class="btn btn-primary rounded-3 custom-btn" type="button">
                        <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">
                                <i class="fas fa-shopping-cart">  Explore Now</i>
                        </a>
                    </button>
                </div>
            </div>  
        </div>
    </section>
    
    <section class="icons-container justify-content-around">
        <div class="icon">
            <i class="fas fa-gifts"></i>
            <div class="content">
                <h3>150+</h3>
                <p>Packages</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-handshake"></i>
            <div class="content">
                <h3>100%</h3>
                <p>Satisfactions</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-globe"></i>
            <div class="content">
                <h3>100%</h3>
                <p>Delivery everywhere</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-hand-holding-heart"></i>
            <div class="content">
                <h3>100%</h3>
                <p>Quality Services</p>
            </div>
        </div>
    </section>

    <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3">
                    <h1>OUR PRODUCT</h1>
                    <p>We use high-quality materials for our packaging, which <br>ensures that cosmetic products are protected during shipping. 
                        Our packaging are also designed to be aesthetically appealing and functional, which can help attract consumers' attention and enhance their shopping experience.
                    </p>
                    <button class="btn btn-primary rounded-3 custom-btn" type="button">
                        <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">
                                <i class="fas fa-shopping-cart">  Explore Now</i>
                        </a>
                    </button>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center order-lg-2">
                <div class="p-3 home2">
                    <img class="home-parallax2" src=<?php echo base_url('img/3.png'); ?> data-speed="8" alt="hero section" class="mx-auto d-block w-100 img-fluid" id="move">
                </div>
            </div>  
        </div>
    </section>
    <div id="carouselExampleDark" class="carousel carousel-light slide bg-black" data-bs-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="img/1.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/2.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/3.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pic2.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/5.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pic1.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pic.png" class="mx-auto d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
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

    
    <div class="container col-md-8" id="reviews">
       <div class="row">
            <div class="col-md-12 col-center">
                <h2>Testimonials</h2>
                
                <div id="carouselExampleInterval" class="carousel carousel-white slide" data-bs-ride="carousel">
                    <div class="carousel-inner"> 
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img class="avatar avatar-128 rounded-circle p-1"
                                src="img/photo3.webp">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="testimonial">Their personalized packaging has helped me establish a prestigious image.</p>
                                <p class="overview"><b>Andile Laurette</b>, small business owner</p>
                            </div>
                        </div>
                        <div class="carousel-item " data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle p-1"
                                src="img/photo4.webp">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="testimonial">Their personalized packaging has helped me establish a prestigious image.</p>
                                <p class="overview"><b>Romane Soline</b>, Office Worker</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle p-1"
                                src="img/photo.jpg">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="testimonial">Their personalized packaging has helped me establish a prestigious image.</p>
                                <p class="overview"><b>Luigi Éric</b>, Sublim'Crea CEO</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img class="avatar avatar-128 rounded-circle p-1"
                                src="img/photo5.webp">
                            <div class="carousel-caption text-secondary d-none d-md-block">
                                <p class="testimonial">Their personalized packaging has helped me establish a prestigious image.</p>
                                <p class="overview"><b>Romane Soline</b>, customer</p>
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
    
    
    <?php echo view('template/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('#type', {
            strings: [
                'WELCOM TO PACKEASE', 
                'THE PLACE WHERE YOU FIND',
                'THE PERFECT PACKAGING',
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop : true,
        });
    </script>
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script>
        gsap.from("#move",{
            duration: 1,
            delay: 1.3,
            y:5,
            stagger: 0.2
        }); 

        gsap.from(".navbar",{ 
            duration: 1,
            delay: 1,
            y:5,
        }); 

        document.querySelector('.home').onmousemove = (e) =>{

            document.querySelectorAll('.home-parallax').forEach(elm =>{
        
                let speed = elm.getAttribute('data-speed');
                console.log("speed");
        
                let x = (window.innerWidth - e.pageX * speed) / 90;
                let y = (window.innerHeight - e.pageY * speed) / 90;
        
                elm.style.transform = `translateX(${y}px) translateY(${x}px)`;
        
            });
        
        };
        
        
        document.querySelector('.home').onmouseleave = (e) =>{
        
            document.querySelectorAll('.home-parallax').forEach(elm =>{
        
            elm.style.transform = `translateX(0px) translateY(0px)`;
        
            });
        
        };

        document.querySelector('.home2').onmousemove = (e) =>{

            document.querySelectorAll('.home-parallax2').forEach(elm =>{

                let speed = elm.getAttribute('data-speed');
                console.log("speed");

                let x = (window.innerWidth - e.pageX * speed) / 90;
                let y = (window.innerHeight - e.pageY * speed) / 90;

                elm.style.transform = `translateX(${y}px) translateY(${x}px)`;

            });

        };


        document.querySelector('.home2').onmouseleave = (e) =>{

                document.querySelectorAll('.home-parallax2').forEach(elm =>{

                elm.style.transform = `translateX(0px) translateY(0px)`;

            });

        };
        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

