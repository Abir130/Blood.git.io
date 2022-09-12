<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Content Start -->
        <div class="content">
            <?php 
              $this->load->view('common/topbar');
            ?>
            <!-- Blank Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="row g-4 mb-5">
                    <div class="col-sm-6 col-xl-4">
                        <a href="<?php echo base_url()?>user-list">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fas fa-users fa-3x text-primary"></i>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">Users</p>
                                    <h6 class="mb-0"><?php echo $user; ?></h6>
                                </div>
                             </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <a href="<?php echo base_url()?>donor-list">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fas fa-fire fa-3x text-primary"></i>
                                
                                <div class="ms-3 text-center">
                                    <p class="mb-2">Blood Donors</p>
                                    <h6 class="mb-0"><?php echo $donors; ?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <a href="<?php echo base_url()?>volunteer-list">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fas fa-users-cog fa-3x text-primary"></i>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">Volunteers</p>
                                    <h6 class="mb-0"><?php echo $volunteer;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
      
                </div>

                <!-- Blood Group -->
                <div class="row g-4 mb-5">
                    <h5 class="mb-0">Blood Group</h5>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-ab-neg">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">AB-</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_ab_neg;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-ab-pos">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <span class="fa-2x text-primary">AB+</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_ab_pos;?></h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-a-neg">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">A-</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_a_neg;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-a-pos">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">A+</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_a_pos;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-b-neg">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">B-</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_b_neg;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-b-pos">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">B+</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_b_pos;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-o-neg">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">O-</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_o_neg;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-o-pos">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <span class="fa-2x text-primary">O+</span>
                                <div class="ms-3 text-center">
                                    <p class="mb-2">People</p>
                                    <h6 class="mb-0"><?php echo $blood_o_pos;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                 <!-- City -->
                <div class="row g-4">
                    <h5 class="mb-0">Location</h5>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-khulna">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter fw-lighter">Khulna</h4>
                                    <h6 class="mb-0"><?php echo $blood_khulna;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-dhaka">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Dhaka</h4>
                                    <h6 class="mb-0"><?php echo $blood_dhaka;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-barisal">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Barisal</h4>
                                    <h6 class="mb-0"><?php echo $blood_barisal;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-Chittagong">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Chittagong</h4>
                                    <h6 class="mb-0"><?php echo $blood_chittagong;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                       <a href="<?php echo base_url()?>search-mymensingh">
                             <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Mymensingh</h4>
                                    <h6 class="mb-0"><?php echo $blood_mymensingh;?></h6>
                                </div>
                            </div>
                       </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-rajshahi">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Rajshahi</h4>
                                    <h6 class="mb-0"><?php echo $blood_rajshahi;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-sylhet">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Sylhet</h4>
                                    <h6 class="mb-0"><?php echo $blood_sylhet;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="<?php echo base_url()?>search-rangpur">
                            <div class="bg-secondary rounded d-flex align-items-center  justify-content-center p-4">
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary fw-lighter">Rangpur</h4>
                                    <h6 class="mb-0"><?php echo $blood_rangpur;?></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

           <?php $this->load->view('common/footer-bottom') ?>
        </div>
        <!-- Content End -->
    </div>