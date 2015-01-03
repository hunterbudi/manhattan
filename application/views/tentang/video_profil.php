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
                    <li class="active"><?php echo $this->lang->line('nav_video_profil'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('tentang/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-video-camera"></i> <?php echo $this->lang->line('nav_video_profil'); ?></strong></div>
                        <div id="video-box" style="max-width: 640px; overflow: hidden" class="thumbnail">
                            <video id="video1" width="100%" height="360px" controls>
                               <source src="<?php echo base_url($src); ?>" type='video/mp4' />
                               <?php echo $this->lang->line('main_video_tag_unsupport'); ?>
                            </video>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        <script type="text/javascript">
            var lebar = $("#video-box").width();
            var tinggix = 0.5625 * lebar;
            var tinggi = parseInt(tinggix)+'px';
            document.getElementById("video-box").style.height=tinggi;
        </script>
        <?php $this->load->view('include/footerscript');  ?>