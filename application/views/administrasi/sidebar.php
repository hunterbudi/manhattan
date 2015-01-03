<div class="judul4"><strong><i class="fa fa-arrow-circle-right"></i> <?php echo $this->lang->line('nav_administrasi'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='impor'?'active':'';?>"><a href="<?php echo site_url('administrasi/impor'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_impor'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='ekspor'?'active':'';?>"><a href="<?php echo site_url('administrasi/ekspor'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ekspor'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='fasilitas'?'active':'';?>"><a href="<?php echo site_url('administrasi/fasilitas'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_fasilitas'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='cukai'?'active':'';?>"><a href="<?php echo site_url('administrasi/cukai'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_cukai'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='aeo'?'active':'';?>"><a href="<?php echo site_url('administrasi/aeo'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_aeo'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='fta'?'active':'';?>"><a href="<?php echo site_url('administrasi/fta'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_fta'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='download'?'active':'';?>"><a href="<?php echo site_url('administrasi/download'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_download'); ?></a></li>
</ul>