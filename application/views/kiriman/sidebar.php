<div class="judul4"><strong><i class="fa fa-plane"></i> <?php echo $this->lang->line('nav_kiriman_dll'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='penumpang_sarkut'?'active':'';?>"><a href="<?php echo site_url('kiriman/penumpang_sarkut'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_penumpang_sarkut'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='kiriman_pos'?'active':'';?>"><a href="<?php echo site_url('kiriman/kiriman_pos'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kiriman_pos'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='pelintas'?'active':'';?>"><a href="<?php echo site_url('kiriman/pelintas'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_pelintas'); ?></a></li>
</ul>