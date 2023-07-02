

<header class="header">
        
        <nav class="navbar navbar-expand-lg navbar-light  zindex-fixed">
            <div class="container">
                <a href="<?php echo base_url('#'); ?>" class="navbar-brand logo"><span>pack</span> | ease</a>

                <button class="navbar-toggler" type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded= "false"
                    aria-label="Toggle-navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo base_url('#'); ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('common/marketplace'); ?>" class="nav-link">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('common/discover'); ?>" class="nav-link">Discover</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('common/customizations'); ?>" class="nav-link">Customizations</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('common/ecopack'); ?>" class="nav-link">EcoPack</a>
                        </li>
                    </ul>
                </div>
                
                <button class="navbar-toggler login-btn" type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#btn"
                    aria-controls="btn"
                    aria-expanded= "false"
                    aria-label="Toggle-navigation">
                    <span class="fas fa-user"></span>
                </button>
                <button type="button" class="btn mx-5 position-relative">
                    <a href="<?php echo base_url('common/panier'); ?>">
                        <i class="fas fa-shopping-cart">  </i>
                    </a>
                    <span id="badge" class="position-absolute top-0 start translate-middle badge rounded-pill bg-danger">
                        0
                        <span class="visually-hidden">orders</span>
                    </span>
                </button>
                
                <script>
                    // Récupérer le badge
                    var badge = document.getElementById('badge');

                    // Fonction pour incrémenter la valeur du badge
                    function incrementBadge(productId) {
                        badge.innerText = parseInt(badge.innerText) + 1;
                        console.log('ID du produit :', productId);
                    }

                    // Fonction pour décrémenter la valeur du badge
                    function decrementBadge(productId) {
                        var value = parseInt(badge.innerText);
                        if (value > 0) {
                            badge.innerText = value - 1;
                            console.log('ID du produit :', productId);
                        }
                    }
                </script>
                <?php if(session('logged_in')): ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo session('user_name'); ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('common/userparameter'); ?>">Parameters</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('common/orders'); ?>">My Orders</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('common/login/update_password'); ?>">Update Password</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('common/logout'); ?>">Deconnexion</a></li>
                            </ul>
                        </div>
                <?php else: ?>                  
                    <div class="toggle navbar-collapse" id="btn" >
                        <a href="<?php echo base_url('common/login'); ?>" class="btn btn-primary my-3" >Log in</a>  
                    </div>
                <?php endif; ?>
            </div>
        </nav>
</header>

