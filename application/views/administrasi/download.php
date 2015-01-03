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
                    <li class="active"><?php echo $this->lang->line('nav_administrasi'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_download'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <div class="judul4"><strong><i class="fa fa-search"></i> <?php echo $this->lang->line('download_search'); ?></strong></div>
                        <form action="<?php echo site_url('administrasi/download'); ?>" method="post">
                            <div class="input-append input-block-level" id="my_append">
                                <input name="keyword" class="" type="text" id="keyword" placeholder="<?php echo $this->lang->line('download_search'); ?>" value="<?php echo $keyword ?>">
                                <?php 
                                if ($keyword){
                                ?>
                                <span class="add-on"><a href="<?php echo site_url('administrasi/download') ?>" class="btn" id="my_search_reset_button">Reset</a></span>
                                <?php
                                }
                                ?>
                                <span class="add-on"><button class="btn" id="my_search_button"><i class="icon-search"></i></button></span>
                            </div>                        
                        </form>
                        <?php $this->load->view('administrasi/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-cloud-download"></i> <?php echo $this->lang->line('nav_download'); ?></strong></div>
                        <?php 
                        if ($total_rows>0) {
                        ?>
                            <?php 
                            foreach ($download as $row) {

                            $judul = strip_tags('judul_'.$this->session->userdata('language'));
                            $isi = strip_tags('isi_'.$this->session->userdata('language'));
                            $file = 'upload/download/'.$row->file;
                            ?>
                            <div title="<?php echo $this->lang->line('administrasi_dowload_detail'); ?>" class="download-title" data-id="<?php echo $row->id ?>">
                                <i id="download-title_mark_<?php echo $row->id ?>" class="fa fa-caret-right"></i> 
                                    <strong><?php echo  highlight_phrase($row->$judul, $keyword, '<span style="background-color:#FFFB37">', '</span>') ?></strong>
                                <span class="pull-right">
                                    <a title="download" class="download" target="_blank" href="<?php echo base_url($file); ?>"><i class="fa fa-download"></i> Download</a>
                                </span>
                            </div>
                            <div class="download-detail" id="<?php echo $row->id ?>">
                                <?php echo  highlight_phrase($row->$isi, $keyword, '<span style="background-color:#FFFB37">', '</span>') ?>
                            </div>
                            <?php
                            }
                        }
                        else
                        {
                            echo $this->lang->line('download_tidak_ada');
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
                <br/>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        <script>
            $('.download-title').tooltip();

//            $.noConflict();
            $( document ).ready(function() {
                $(function(){
                    $(".download-detail").hide();
                    $(".download-title").click(function(){
                        var id = '#'+$(this).attr('data-id');
                        var question_mark = '#download-title_mark_'+$(this).attr('data-id');
                        $(id).toggle();
                        $(question_mark).toggleClass("fa-rotate-90");
                    });
                });
            });
            
        </script>
        <?php $this->load->view('include/footerscript');  ?>