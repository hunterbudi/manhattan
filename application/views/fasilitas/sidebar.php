<div class="judul4"><strong><i class="fa fa-arrow-circle-right"></i> <?php echo $this->lang->line('nav_fasilitas'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='pembebasan'?'active':'';?>"><a href="<?php echo site_url('fasilitas/pembebasan'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_pembebasan'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='pertambangan'?'active':'';?>"><a href="<?php echo site_url('fasilitas/pertambangan'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_pertambangan'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='tpb'?'active':'';?>"><a href="<?php echo site_url('fasilitas/tpb'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tpb'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='kite'?'active':'';?>"><a href="<?php echo site_url('fasilitas/kite'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kite'); ?></a></li>
</ul>