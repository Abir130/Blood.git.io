
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
                    <h6 class="mb-4 fw-lighter">Maintainers</h6>
					<div class="row justify-content-center">
                        <div class="p-4 text-success mb-5">
                        <p>
                            আপনাদের কথা চিন্তা করেই আমাদের এই ক্ষুদ্র উদ্যোগ ।  আমার প্রায় দেখেছি রক্তের জন্য মানুষ অনেক ভোগান্তিতে পড়েন । রক্তের ডোনার কোথায় পাবে কাকে ফোন দেবে ।এসব নিয়ে অনেক ভোগান্তিতে পড়তে হয় । এসব কিছু চিন্তা করেই আমাদের এই ছোট প্রচেষ্টা । আমরা আছি আপনাদের পাশে । আপনারাও আমাদের পাশে থাকুন আমাদের সহযোগিতা করুন । কোনো ভুল-ভ্রান্তি হলে আমাদের অবশ্যই জানান, ধন্যবাদ ।
                        </p>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-lg-0 mb-4">
                            <div class="card border-0 card-art p-1">
                                <div class="card-header border-0 p-0">
                                    <img class="w-100 rounded-top "  src="<?php echo base_url()?>/assets/img/ll.jpg" alt="">
                                </div>
                                <div class="card-body border-0 text-center bg-info py-2">
                                    <h6 class="text-dark mb-0">Abir Hossain</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-lg-0 mb-4">
                            <div class="card border-0 card-art p-1">
                                <div class="card-header border-0 p-0">
                                    <img class="w-100 rounded-top "  src="<?php echo base_url()?>/assets/img/abir.jpg" alt="">
                                </div>
                                <div class="card-body border-0 text-center bg-info py-2">
                                    <h6 class="text-dark mb-0">Tanvir</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-lg-0 mb-4">
                            <div class="card border-0 card-art p-1">
                                <div class="card-header border-0 p-0">
                                    <img class="w-100 rounded-top "  src="<?php echo base_url()?>/assets/img/arif.jpg" alt="">
                                </div>
                                <div class="card-body border-0 text-center bg-info py-2">
                                    <h6 class="text-dark mb-0">Arif</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-lg-0 mb-4">
                            <div class="card border-0 card-art p-1">
                                <div class="card-header border-0 p-0">
                                    <img class="w-100 rounded-top "  src="<?php echo base_url()?>/assets/img/riaz.jpg" alt="">
                                </div>
                                <div class="card-body border-0 text-center bg-info py-2">
                                    <h6 class="text-dark mb-0">Shajid</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-lg-0 mb-4">
                            <div class="card border-0 card-art p-1">
                                <div class="card-header border-0 p-0">
                                    <img class="w-100 rounded-top "  src="<?php echo base_url()?>/assets/img/torikul.jpg" alt="">
                                </div>
                                <div class="card-body border-0 text-center bg-info py-2">
                                    <h6 class="text-dark mb-0">Rakib</h6>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 text-success text-center mt-5">
                            <p>
                                <span class="fs-3">***</span>  রক্তদান একটি মহৎ কাজ । রক্তদান করে আপনিও হতে পারেন একজন মহৎ ব্যক্তি <span class="fs-3">***</span>
                            </p>
                        </div>
                    </div>
			    </div>
            	
            </div>
            <!-- Blank End -->

           <?php $this->load->view('common/footer-bottom') ?>

        </div>
        <!-- Content End -->
    </div>
		
	

