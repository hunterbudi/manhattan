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
                    <li class="active"><?php echo $this->lang->line('nav_cukai'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('administrasi/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4">
                            <strong><i class="fa fa-barcode"></i> <?php echo $this->lang->line('nav_cukai'); ?></strong>
                            <span class="expand pull-right"><?php echo $this->lang->line('main_expand'); ?></span>
                        </div>
                        
                        <?php 
                        
                        $judul = 'judul_'.$this->session->userdata('language');
                        $isi = 'isi_'.$this->session->userdata('language');
                        
                        foreach ($rows as $row) {
                        ?>
                        <div class="question" data-id="<?php echo $row->id; ?>">
                            <strong><i id="question_mark_<?php echo $row->id; ?>" class="fa fa-caret-right" question_mark="1"></i> 
                                <?php echo $row->$judul; ?>
                            </strong>
                        </div>
                        <div class="answer" id="<?php echo $row->id; ?>">
                            <?php echo $row->$isi; ?>
                        </div>
                        <?php
                        }
                        ?>
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
            
            function getAllElementsWithAttribute(attribute)
            {
              var matchingElements = [];
              var allElements = document.getElementsByTagName('*');
              for (var i = 0, n = allElements.length; i < n; i++)
              {
                if (allElements[i].getAttribute(attribute))
                {
                  // Element exists with attribute. Add to array.
                  matchingElements.push(allElements[i]);
                }
              }
              return matchingElements;
            }
            
            var expand = "<?php echo $this->lang->line('main_expand'); ?>";
            var collapse = "<?php echo $this->lang->line('main_collapse'); ?>";

            $(".expand").click(function(){
                if($(this).text()==expand){
                    $('.answer').show();
                    $(this).text(collapse);
                    var question_mark = getAllElementsWithAttribute('question_mark');
                    $(question_mark).removeClass("fa-rotate-90");
                    $(question_mark).addClass("fa-rotate-90");
                }else{
                    $('.answer').hide();
                    $(this).text(expand);
                    var question_mark = getAllElementsWithAttribute('question_mark');
                    $(question_mark).removeClass("fa-rotate-90");
                }
            });
            
        </script>
        <?php $this->load->view('include/footerscript');  ?>