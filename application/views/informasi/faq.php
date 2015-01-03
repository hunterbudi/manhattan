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
                    <li class="active"><?php echo $this->lang->line('nav_informasi'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_faq'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <div class="judul4"><strong><i class="fa fa-search"></i> <?php echo $this->lang->line('faq_search'); ?></strong></div>
                        <form action="<?php echo site_url('informasi/faq'); ?>" method="post">
                            <div class="input-append input-block-level" id="my_append">
                                <input name="keyword" class="" type="text" id="keyword" placeholder="<?php echo $this->lang->line('faq_search'); ?>" value="<?php echo $keyword ?>">
                                <?php 
                                if ($keyword){
                                ?>
                                <span class="add-on"><a href="<?php echo site_url('informasi/faq') ?>" class="btn" id="my_search_reset_button">Reset</a></span>
                                <?php
                                }
                                ?>
                                <span class="add-on"><button class="btn" id="my_search_button"><i class="icon-search"></i></button></span>
                            </div>                        
                        </form>
                        <?php $this->load->view('informasi/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-question"></i> <?php echo $this->lang->line('nav_faq'); ?></strong></div>
                        <?php 
                        if ($total_rows>0) {
                        ?>
                            <?php 
                            foreach ($faq as $row) {

                            $pertanyaan = strip_tags('pertanyaan_'.$this->session->userdata('language'));
                            $jawaban = strip_tags('jawaban_'.$this->session->userdata('language'));
                            ?>
                            <div class="question" data-id="<?php echo $row->id ?>">
                                <strong><i id="question_mark_<?php echo $row->id ?>" class="fa fa-caret-right"></i> 
                                    <?php echo  highlight_phrase($row->$pertanyaan, $keyword, '<span style="background-color:#FFFB37">', '</span>') ?>
                                </strong>
                            </div>
                            <div class="answer" id="<?php echo $row->id ?>">
                                <?php echo  highlight_phrase($row->$jawaban, $keyword, '<span style="background-color:#FFFB37">', '</span>') ?>
                            </div>
                            <?php
                            }
                        }
                        else
                        {
                            echo $this->lang->line('faq_tidak_ada');
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
//            $.noConflict();
            $( document ).ready(function() {
                $(function(){
                    $(".answer").hide();
                    $(".question").click(function(){
                        var id = '#'+$(this).attr('data-id');
                        var question_mark = '#question_mark_'+$(this).attr('data-id');
                        $(id).toggle();
                        $(question_mark).toggleClass("fa-rotate-90");
                    });
                });
            });
        </script>
        <?php $this->load->view('include/footerscript');  ?>