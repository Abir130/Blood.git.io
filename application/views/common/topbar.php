<!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fas fa-fire"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle md-ripples" data-bs-toggle="dropdown">
                            <span class="d-lg-inline-flex">
                                <?php
                                    if(isset($_SESSION['username'])){
                                        echo $_SESSION['username'];
                                        // redirect('dashboard');
                                    }else{
                                        redirect(base_url());
                                    }
                                    
                                ?>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?php echo base_url(); ?>user-profile/<?php echo $_SESSION['id'];?>" class="dropdown-item">My Profile</a>
                            <hr class="my-1">
                            <a href="<?php echo base_url(); ?>logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->