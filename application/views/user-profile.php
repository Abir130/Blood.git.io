
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
				<div class="bg-secondary rounded h-100 p-4 ">
					<div>
						<h6 class="mb-4 fw-lighter"><?php echo $table_title;?></h6>
						<div class="row flex-direction-reverse">
							<div class="col-md-6 ">
								<input type="text" class="d-none" name="id" value="<?php echo $admin_data_id->id;?>">
								<div class="d-flex j-b-m  bg-dark px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Name :</div>
									<div><?php echo $admin_data_id->name;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Age :</div>
									<div class="text-m-end"><?php echo $admin_data_id->age;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Gender :</div>
									<div class="text-m-end"><?php echo $admin_data_id->gender;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Blood Group :</div>
									<div class="text-m-end"><?php echo $admin_data_id->group_name;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">User Type :</div>
									<div class="text-m-end"><?php echo $admin_data_id->type;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">City :</div>
									<div class="text-m-end"><?php echo $admin_data_id->city;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">District :</div>
									<div class="text-m-end"><?php echo $admin_data_id->district;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Address :</div>
									<div class="text-m-end"><?php echo $admin_data_id->street;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Phone :</div>
									<div class="text-m-end"><?php echo $admin_data_id->phone;?></div>
								</div>
								<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
									<div style="width:150px;" class="me-3 text-asmani">Status :</div>
									<div class="text-m-end">
										<div>
										<?php
											if( $admin_data_id->status == null){
												echo "";
											}
											else{
											if($admin_data_id->status == 'Available'){
												echo "<span class='bg-success text-white p-1 px-2 rounded fs-10'>$admin_data_id->status</span>";
											}else{
												echo "<span class='bg-gray p-1 px-2 rounded fs-10'>$admin_data_id->status</span>";
											}
											}
										?>
										<div class="fs-10 mt-1">
											You can change your status at any time
										</div>
									</div>
									</div>
									
								</div>
							
							</div>
							<style>
								
							</style>
							<div class="col-md-6 butterfly text-center d-grid mb-4 mb-lg-0 mb-md-0">
								<img class="blood-cartoon" src="<?php echo base_url()?>assets/img/blood-cartoon.png" alt="">
								<div class="wave"></div>
							</div>
						</div>
						<div class="form-group mb-4 text-end d-none" <?php echo $_SESSION['config-pro-btn']; ?>>
							<a class="btn btn-primary px-4  md-ripples" href="<?php echo base_url()?>profile-update/<?php echo $admin_data_id->id;?>" type="button">Edit</a>
						</div>
				</div>
			</div>
            	
		  

            </div>
            <!-- Blank End -->

           <?php $this->load->view('common/footer-bottom') ?>
        </div>
        <!-- Content End -->
    </div>

