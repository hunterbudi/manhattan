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
                    <li class="active"><?php echo $this->lang->line('nav_berita_utama'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_pengumuman'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_pengumuman_baca'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('berita/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-bullhorn"></i> <?php echo $this->lang->line('nav_pengumuman'); ?></strong></div>
                        <h4 class="media-heading media-heading-berita" style="margin-bottom: 0px">
                            <?php echo $judul ?>
                        </h4>
                        <small><i class="fa fa-calendar"></i> <?php echo $tgl ?></small>
                        <p style="text-align: justify; margin-top: 10px"><?php echo nl2br($isi) ?></p>
                        <br>
                        <div class="judul4"><strong><i class="fa fa-bullhorn"></i> <?php echo $this->lang->line('pengumuman_lain'); ?></strong></div>
                        <table width="100%">
                            <?php 
                            foreach ($pengumuman_lain as $row) {

                            $judul = 'judul_'.$this->session->userdata('language');
                            $isi = 'isi_'.$this->session->userdata('language');
                            $slug_url = 'berita/pengumuman/baca/'.$row->slug;
                            
                            ?>
                            <tr>
                                <td><a href="<?php echo site_url($slug_url) ?>"><?php echo $row->$judul ?></a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>