
<?php

    $this->load->view('common/header');
    $this->load->view('common/sidebar');
?>
<style>
    #myInput{
         padding: 3px 10px;
    border-radius: 3px;
    outline: none;
    border: none;
    margin-bottom: 10px;
    }
   [type="search"] {
    margin-left: 10px;
    padding: 0 10px;
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
                <div class="row">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 fw-lighter"><?php echo $table_title;?></h6>
                            <!-- <input id="myInput" type="text" placeholder="Search.."> -->
                            <div class="table-responsive py-3">
                                
                                <table id="tableID" class="table pt-5">
                                    
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Blood</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Phone</th>
                                            <!-- <th scope="col">Edit</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <?php  
                                        foreach ($user_data->result() as $row)  
                                        {  
                                            ?><tr>  
                                            <td><?php echo $row->id;?></td> 
                                            <td><?php echo $row->name;?></td> 
                                            <td><?php echo $row->age;?></td> 
                                            <td><?php echo $row->group_name;?></td>
                                            <td><?php echo $row->city;?></td>
                                            <td><?php echo $row->type;?></td>
                                            <td><?php echo $row->phone;?></td> 
                                            <!-- <td><a href="<?php echo base_url()?>user-profile/<?php echo $row->id;?>">Edit</a></td>  -->
                                            </tr>  
                                        <?php }  
                                        ?>  
                                    </tbody>
                                </table>
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

<?php 
    $this->load->view('common/footer');

?>

<script>

	// Initialize the DataTable
	$(document).ready(function () {
	$('#tableID').DataTable({
		paging: true,
        "language": {
            "paginate": {
            "previous": "Prev"
            }
        }

	});
	});
</script>
   