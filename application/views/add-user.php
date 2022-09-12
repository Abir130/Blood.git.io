
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
							<input type="text" class="form-control" id="floatingName" name="name" placeholder="name@example.com">
							<label for="floatingName">Name</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" name="group_name" id="floatingSelect" aria-label="Floating label select example">
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
							<select class="form-select" name="type" id="floatingSelect" aria-label="Floating label select example">
								<option selected value="">User Type</option>
								<option value="Donor">Donor</option>
								<option value="User">User</option>
								<option value="volunteer">Volunteer</option>
							</select>
						</div>
					
				</div>
				<div class="col-sm-12 col-md-6">
				
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingCity" name="city" placeholder="City">
							<label for="floatingCity">City</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingPhone" name="phone" placeholder="Phone">
							<label for="floatingPhone">Phone</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingAge" name="age" placeholder="Age">
							<label for="floatingAge">Age</label>
						</div>
					
				</div>

				 <div class="form-group mb-4 text-end">
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
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

