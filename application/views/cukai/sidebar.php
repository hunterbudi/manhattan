<div class="judul4"><strong><i class="fa fa-arrow-circle-right"></i> <?php echo $this->lang->line('nav_cukai'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='cukai'?'active':'';?>"><a href="<?php echo site_url('cukai/cukai'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_cukai'); ?></a></li>
</ul>