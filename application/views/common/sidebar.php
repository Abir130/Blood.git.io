<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="<?php echo base_url(); ?>dashboard" class="navbar-brand mx-4 mb-3 ">
            <h4 class="text-primary"><i class="fas fa-fire me-2"></i>Get Blood</h4>
        </a>

        <div class="navbar-nav w-100">
            <a href="<?php echo base_url(); ?>dashboard" class="nav-item nav-link 
                    <?php
                    $active = $this->session->userdata('dashboard');
                    if (isset($active)) {
                        echo $active;
                        $this->session->unset_userdata('dashboard');
                    }
                    ?>">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="<?php echo base_url(); ?>add-user" class="nav-item nav-link  
                    <?php
                    $active = $this->session->userdata('adduser');
                    if (isset($active)) {
                        echo $active;
                        $this->session->unset_userdata('adduser');
                    }
                    ?>
                ">
                <i class="fas fa-user-plus me-2"></i>Add Member
            </a>
            <a href="<?php echo base_url(); ?>about-donation" class="nav-item nav-link
                        <?php
                        $active = $this->session->userdata('about');
                        if (isset($active)) {
                            echo $active;
                            $this->session->unset_userdata('about');
                        }
                        ?>
                    ">
                <i class="fas fa-book me-2"></i>About Donate
            </a>

            <a href="<?php echo base_url(); ?>maintainer" class="nav-item nav-link
                        <?php
                        $active = $this->session->userdata('maintainer');
                        if (isset($active)) {
                            echo $active;
                            $this->session->unset_userdata('maintainer');
                        }
                        ?>
                    ">
                <i class="fas fa-tools me-2"></i>Maintainer
            </a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->