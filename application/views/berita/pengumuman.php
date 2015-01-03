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
                    <li class="active"><?php echo $this->lang->line('nav_pengumuman'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <div class="judul4"><strong><i class="fa fa-search"></i> <?php echo $this->lang->line('pengumuman_search'); ?></strong></div>
                        <form action="<?php echo site_url('berita/pengumuman'); ?>" method="post">
                            <div class="input-append input-block-level" id="my_append">
                                <input name="keyword" class="" type="text" id="keyword" placeholder="<?php echo $this->lang->line('pengumuman_search'); ?>" value="<?php echo $keyword ?>">
                                <?php 
                                if ($keyword){
                                ?>
                                <span class="add-on"><a href="<?php echo site_url('berita/pengumuman') ?>" class="btn" id="my_search_reset_button">Reset</a></span>
                                <?php
                                }
                                ?>
                                <span class="add-on"><button class="btn" id="my_search_button"><i class="icon-search"></i></button></span>
                            </div>                        
                        </form>
                        <?php $this->load->view('berita/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-bullhorn"></i> <?php echo $this->lang->line('nav_pengumuman'); ?></strong></div>
                        <?php 
                        if ($total_rows>0) {
                        ?>
                        <ul class="media-list">
                            <?php 
                            foreach ($pengumuman as $row) {

                            $judul = strip_tags('judul_'.$this->session->userdata('language'));
                            $isi = strip_tags('isi_'.$this->session->userdata('language'));
                            $slug_url = 'berita/pengumuman/baca/'.$row->slug;
                            
                            if ($this->session->userdata('language')==='en') 
                            {
                                $tgl_upload = tgl_en($row->tgl_upload);
                            }
                            else 
                            {
                                $tgl_upload = tgl_id($row->tgl_upload);
                            }
                            
                            ?>
                            <li class="media">
                                <div class="media-body">
                                    <h4 class="media-heading media-heading-berita" style="margin-bottom: 0px">
                                        <a href="<?php echo site_url($slug_url) ?>">
                                            <?php echo  highlight_phrase($row->$judul, $keyword, '<span style="background-color:#FFFB37">', '</span>') ?>
                                        </a>
                                    </h4>
                                    <small><i class="fa fa-calendar"></i> <?php echo $tgl_upload ?></small>
                                    <div style="text-align: justify">
                                        <?php 
                                            $isi = word_limiter(strip_tags($row->$isi), 40);
                                            echo  highlight_phrase($isi, $keyword, '<span style="background-color:#FFFB37">', '</span>');
                                        ?>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                        }
                        else
                        {
                            echo $this->lang->line('pengumuman_tidak_ada');
                            echo '<strong> ';
                            echo $keyword;
                            echo '.</strong>';
                        }
                        ?>
                        
                        <div class="pagination pagination-centered">
                            <?php echo $links; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>