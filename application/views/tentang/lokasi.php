        <?php 
        $this->load->view('include/header'); 
        $this->load->view('include/navigation'); 
        ?>
        <!--content start-->
        <div style="background-color: white">
            
            <!--<br/>-->
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url('home'); ?>"><?php echo $this->lang->line('nav_beranda'); ?></a> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_tentang_kami'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_lokasi'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('tentang/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-map-marker"></i> <?php echo $this->lang->line('nav_lokasi'); ?></strong></div>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126926.05740207467!2d106.87479337041287!3d-6.205640014546707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f48566a071ef%3A0x600f3ad15637ed13!2sDirektorat+Jenderal+Bea+dan+Cukai!5e0!3m2!1sen!2sid!4v1417710568409" width="100%" height="516" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>