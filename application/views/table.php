
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
    background: black;
    border: 1px solid #6c7293;
    color: #ffffff;
    }
    select{
    background: black;
    border: 1px solid #6c7293;
    color: #ffffff;
    }
    textarea{
    background: transparent;
    border: none;
    color: #ffffff;
    text-align: start;
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
                        <div class="bg-secondary rounded h-100 p-4  position-relative">
                            <div class="d-flex align-items-center mb-4 ">
                                <h6 class="mb-0 fw-lighter me-5"><?php echo $table_title;?></h6>
                                <div class="text-end">
                                    <span class=" me-2">District :</span>
                                    
                                    <select id="selectField">
                                         <option value="All" selected>All</option>
                                        <?php  
                                        foreach ($user_district->result() as $row)  
                                        {  
                                        ?>
                                        <option value="<?php echo $row->district;?>"><?php echo $row->district;?></option>
                                        <?php }?>  
                                    </select>
                                    
                                </div>
                            </div>
                            <!-- <input id="myInput" type="text" placeholder="Search.."> -->
                            <div class="table-responsive py-3">
                    
                                <table id="tableID" class="table pt-5">
                                    <thead>
                                        <tr style="background: #0c3a3a;">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Blood</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Details</th>
                                            
                                            <!-- <th scope="col">Edit</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <?php  
                                        foreach ($user_data->result() as $row)  
                                        {  
                                        ?>
                                        <tr position="<?php echo $row->district;?>">  
                                            <td><?php echo $row->id;?></td> 
                                            <td><?php echo $row->name;?></td> 
                                            <td><?php echo $row->age;?></td> 
                                            <td><?php echo $row->group_name;?></td>
                                            <td><?php echo $row->phone;?></td>
                                            <td><?php echo $row->district;?></td>
                                            <td>
                                                <?php
                                                   if( $row->status == null){
                                                     echo "";
                                                   }
                                                   else{
                                                    if($row->status == 'Available'){
                                                        echo "<span class='bg-success p-1 px-2 rounded fs-10'>$row->status</span>";
                                                    }else{
                                                        echo "<span class='bg-gray p-1 px-2 rounded fs-10'>$row->status</span>";
                                                    }
                                                   }
                                                ?>
                                            </td>
                                            <td class=""><a class="text-info  md-ripples px-3" href="<?php echo base_url()?>donor-profile/<?php echo $row->id;?>"><i class="far fa-eye"></i></a></td> 
                                            </tr>  
                                    <?php }?>  
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


<script>
        $(document).ready(function() {

    function addRemoveClass(theRows) {

        theRows.removeClass("odd even");
        theRows.filter(":odd").addClass("odd");
        theRows.filter(":even").addClass("even");
    }

    var rows = $("tbody#myTable tr:not()");

    addRemoveClass(rows);


    $("#selectField").on("change", function() {

        var selected = this.value;

        if (selected != "All") {

            rows.filter("[position=" + selected + "]").show();
            rows.not("[position=" + selected + "]").hide();
            var visibleRows = rows.filter("[position=" + selected + "]");
            addRemoveClass(visibleRows);
        } else {

            rows.show();
            addRemoveClass(rows);

        }

    });
});
    </script>



   