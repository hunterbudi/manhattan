        <?php 
        $this->load->view('include/header'); 
        $this->load->view('include/navigation'); 
        ?>
        <!--content start-->
        <div style="min-height: 300px">
            
            <!--<br/>-->
            <div class="container">
                <div style="padding-top: 90px; text-align: center">
                    <h1 class="text-warning"><i class="fa fa-circle-o-notch fa-spin"></i> Under Construction</h1>
                    <p><?php echo $this->lang->line('main_under_construction'); ?></p>
                </div>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>