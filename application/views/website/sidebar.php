<div class="judul4"><strong><i class="fa fa-globe"></i> <?php echo $this->lang->line('nav_website'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='tentang_website'?'active':'';?>"><a href="<?php echo site_url('website/tentang_website'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tentang_website'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='peta_situs'?'active':'';?>"><a href="<?php echo site_url('website/peta_situs'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_peta_situs'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='sanggahan'?'active':'';?>"><a href="<?php echo site_url('website/sanggahan'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_sanggahan'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='syarat_penggunaan'?'active':'';?>"><a href="<?php echo site_url('website/syarat_penggunaan'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_syarat_penggunaan'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='privasi'?'active':'';?>"><a href="<?php echo site_url('website/privasi'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_privasi'); ?></a></li>
</ul>