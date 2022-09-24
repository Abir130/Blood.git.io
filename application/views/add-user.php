
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
					<form action="<?php echo base_url()?>add-member" method="post">
						<div class="row">
				<h6 class="mb-4 fw-lighter">Add Member</h6>
	
				<div class="col-sm-12 col-md-6">

						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingName" name="name" required placeholder="name" required>
							<label for="floatingName">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input type="number" class="form-control" id="floatingAge" name="age" placeholder="Age" required>
							<label for="floatingAge">Age</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="group_name" id="floatingSelect" aria-label="Floating label select example" required>
								<option selected value="">Blood Group</option>
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
							<input type="number" class="form-control" id="floatingPhone" name="phone" placeholder="Phone" required>
							<label for="floatingPhone">Phone</label>
						</div>
					
				</div>
				<div class="col-sm-12 col-md-6">
						
						<div class="form-floating mb-3">
							<select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select example" required>
								<option selected value="">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCity" name="city" placeholder="City" required>
							<label for="floatingCity">City</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingDistrict" name="district" placeholder="District" required>
							<label for="floatingDistrict">District</label>
						</div>
						<div class="form-floating">
							<textarea class="form-control mb-3" name="street" id="floatingStreet" cols="30" rows="1" style="min-height:57px;height:57px;" placeholder="Street address" required></textarea>
							<label for="floatingStreet">Street</label>
						</div>
					
				</div>

				 <div class="form-group mb-4 text-end">
                    <button class="btn btn-primary btn-block md-ripples" type="submit">Submit</button>
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
		
	

