
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
				<div class="bg-secondary rounded h-100 p-4">
					<div >
						<div class="row">
				<h6 class="mb-4 fw-lighter">My profile</h6>
				<div class="col-sm-12 col-md-6">
						<input type="text" class="d-none" name="id" value="<?php echo $admin_data_id->id;?>">
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingName" name="name" value="<?php echo $admin_data_id->name;?>" placeholder="name@example.com">
							<label for="floatingName">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingName" name="name" value="<?php echo $admin_data_id->group_name;?>" placeholder="name@example.com">
							<label for="floatingName">Blood Group</label>
						</div>
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingName" name="name" value="<?php echo $admin_data_id->type;?>" placeholder="name@example.com">
							<label for="floatingName">User Type</label>
						</div>
					
				</div>
				<div class="col-sm-12 col-md-6">
				
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingCity" value="<?php echo $admin_data_id->city; ?>" name="city" placeholder="City">
							<label for="floatingCity">City</label>
						</div>
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingPhone" value="<?php echo $admin_data_id->phone; ?>" name="phone" placeholder="Phone">
							<label for="floatingPhone">Phone</label>
						</div>
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingAge" value="<?php echo $admin_data_id->age; ?>" name="age" placeholder="Age">
							<label for="floatingAge">Age</label>
						</div>
					
				</div>

				 <div class="form-group mb-4 text-end">
                    <a class="btn btn-primary px-4" href="<?php echo base_url()?>profile-update/<?php echo $admin_data_id->id;?>" type="button">Edit</a>
                </div>
				</div>
				</div>
			</div>
            	
		  

            </div>
            <!-- Blank End -->

           <?php $this->load->view('common/footer-bottom') ?>
        </div>
        <!-- Content End -->
    </div>

