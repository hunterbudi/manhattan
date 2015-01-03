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
                    <li class="active"><?php echo $this->lang->line('nav_website'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_tentang_website'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('website/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-laptop"></i> <?php echo $this->lang->line('nav_tentang_website'); ?></strong></div>
                        <div class="mycontent"><?php echo $isi; ?></div>
                    </div>
                </div>
                <br/>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>