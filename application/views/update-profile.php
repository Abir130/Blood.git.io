<style>
	.form-control:disabled, .form-control:read-only {
    background-color: #000000 !important;
    opacity: 0.6;
    color: red;
}
</style>
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
                    
					<form action="<?php echo base_url()?>update-profile" method="post">
						<div class="row">
				<h6 class="mb-4 fw-lighter">Update Profile</h6>
				<div class="col-sm-12 col-md-6">
						<input type="text" class="d-none" name="id" value="<?php echo $admin_data_id->id;?>">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingName" name="name" value="<?php echo $admin_data_id->name;?>" placeholder="name" required>
							<label for="floatingName">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingAge" value="<?php echo $admin_data_id->age; ?>" name="age" placeholder="Age" required>
							<label for="floatingAge">Age</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="group_name" id="floatingSelect" aria-label="Floating label select example" required>
								<option selected value="<?php echo $admin_data_id->group_name; ?>"><?php echo $admin_data_id->group_name; ?></option>
								<option value="AB-">AB-</option>
								<option value="AB+">AB+</option>
								<option value="A-">A-</option>
								<option value="A+">A+</option>
								<option value="B-">B-</option>
								<option value="B+">B+</option>
								<option value="O-">O-</option>
								<option value="O+">O+</option>
							</select>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="gender" id="floatingStatus" aria-label="Floating label select example" required>
								<option selected value="<?php echo $admin_data_id->gender; ?>"><?php echo $admin_data_id->gender; ?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="form-floating mb-3">
							<input disabled type="text" class="form-control" id="floatingPhone" value="<?php echo $admin_data_id->phone; ?>" name="phone" placeholder="Phone" required >
							<label for="floatingPhone">Phone</label>
						</div>
					
				</div>
				<div class="col-sm-12 col-md-6">
						<div class="form-floating mb-3">
							<select class="form-select" name="type" id="floatingSelect" aria-label="Floating label select example" required>
								<option selected value="<?php echo $admin_data_id->type; ?>"><?php echo $admin_data_id->type; ?></option>
								<option value="Donor">Donor</option>
								<option value="User">User</option>
								<option value="volunteer">Volunteer</option>
							</select>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCity" value="<?php echo $admin_data_id->city; ?>" name="city" placeholder="City" required>
							<label for="floatingCity">City</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingDistrict" value="<?php echo $admin_data_id->district; ?>" name="district" placeholder="District" required>
							<label for="floatingDistrict">District</label>
						</div>
						<div class="form-floating">
							 <textarea class="form-control mb-3" name="street" id="floatingStreet" cols="30" rows="1" style="min-height:57px;height:57px;" placeholder="Street address" required><?php echo $admin_data_id->street; ?></textarea>
							<label for="floatingStreet">Street</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="status" id="floatingStatus" aria-label="Floating label select example" required>
								<option selected value="<?php echo $admin_data_id->status; ?>"><?php echo $admin_data_id->status; ?></option>
								<option value="Available">Available</option>
								<option value="unavailable">Unavailable</option>
							</select>
						</div>
				</div>

				 <div class="form-group mb-4 text-end">
					<a href="<?php echo base_url(); ?>user-profile/<?php echo $_SESSION['id'];?>" class="btn btn-info btn-block me-2  md-ripples" type="button">Back</a>
                    <button class="btn btn-primary btn-block  md-ripples" type="submit">Update</button>
                </div>
					</form>
				</div>
			</div>

            </div>
            <!-- Blank End -->

           <?php $this->load->view('common/footer-bottom') ?>
        </div>
        <!-- Content End -->
    </div>


			
