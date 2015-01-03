        <?php 
        $this->load->view('include/header'); 
        $this->load->view('include/navigation'); 
        ?>
        <!--content start-->
        <div style="min-height: 300px">
            
            <!--<br/>-->
            <div class="container">
                <div style="padding-top: 90px; text-align: center">
                    <h1 class="text-error"><i class="fa fa-warning"></i> Error 404</h1>
                    <p><?php echo $this->lang->line('main_error_404'); ?></p>
                </div>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>