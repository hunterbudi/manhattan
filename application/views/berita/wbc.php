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
                    <li class="active"><?php echo $this->lang->line('nav_berita'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_wbc'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('berita/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-newspaper-o"></i> <?php echo $this->lang->line('nav_wbc'); ?></strong></div>
                        <div class="mycontent">
                            <?php
                            $chunks = array_chunk($wbc, 4);
                            foreach($chunks as $chunk){ 
                            ?>
                            <div class="row-fluid" style="">
                                <ul style="margin-left: 5px">
                                    <?php
                                    foreach($chunk as $row){ 
                                    ?>
                                    <li class="span3 text-center wbc_box">
                                        <div><?php echo $this->lang->line('wbc_edisi'); ?> : <?php echo $row->edisi ?></div>
                                        <?php 
                                        $foto = 'upload/wbc/foto/'.$row->foto;
                                        $namafile = 'upload/wbc/file/'.$row->namafile;
                                        ?>
                                        <a target="_blank" href="<?php echo base_url($namafile); ?>">
                                            <img style="max-height: 190px" src="<?php echo base_url($foto); ?>"/>
                                        </a>
                                    </li>
                                    <?php 
                                    }; 
                                    ?>
                                </ul>
                            </div>
                            <?php 
                            }; 
                            ?>
                            <div class="pagination pagination-centered">
                                <?php echo $links; ?>
                            </div>
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