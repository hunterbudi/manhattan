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
                    <li class="active"><?php echo $this->lang->line('nav_kurs'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('informasi/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-newspaper-o"></i> <?php echo $this->lang->line('nav_kurs'); ?></strong></div>
                        <ul class="nav nav-tabs" id="tabKurs">
                            <li class="active"><a href="#terbaru">Kurs Terbaru</a></li>
                            <li><a href="#browse">Browse Kurs</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="terbaru">
                                <!--<strong>Skep Kurs Terbaru</strong>-->
                                <table style="margin-bottom: 10px; font-weight: bold">
                                    <tr>
                                        <td width="100px">Skep</td>
                                        <td width="10px">:</td>
                                        <td>51/KM.11/2014</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Skep</td>
                                        <td>:</td>
                                        <td>12-12-2014</td>
                                    </tr>
                                    <tr>
                                        <td>Periode</td>
                                        <td>:</td>
                                        <td>03-12-2014 s/d 09-12-2014</td>
                                    </tr>

                                </table>
                                <table class="table table-bordered table-condensed table-striped table-hover">
                                    <tr>
                                        <th>Valuta</th>
                                        <th>Value (Rp)</th>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane" id="browse">
                                <table style="margin-bottom: 10px; font-weight: bold">
                                    <tr>
                                        <td width="100px">Skep</td>
                                        <td width="10px">:</td>
                                        <td>51/KM.11/2014</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Skep</td>
                                        <td>:</td>
                                        <td>12-12-2014</td>
                                    </tr>
                                    <tr>
                                        <td>Periode</td>
                                        <td>:</td>
                                        <td>03-12-2014 s/d 09-12-2014</td>
                                    </tr>

                                </table>
                                <table class="table table-bordered table-condensed table-striped table-hover">
                                    <tr>
                                        <th>Valuta</th>
                                        <th>Value (Rp)</th>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </table>
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
        <script>
            $('#tabKurs a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
        </script>
        <?php $this->load->view('include/footerscript');  ?>