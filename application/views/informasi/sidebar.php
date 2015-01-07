<div class="judul4"><strong><i class="fa fa-lightbulb-o"></i> <?php echo $this->lang->line('nav_informasi'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='faq'?'active':'';?>"><a href="<?php echo site_url('informasi/faq'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_faq'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='lartas'?'active':'';?>"><a href="<?php echo site_url('informasi/lartas'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_lartas'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='ppjk'?'active':'';?>"><a href="<?php echo site_url('informasi/ppjk'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ppjk'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='ppid'?'active':'';?>"><a href="<?php echo site_url('informasi/ppid'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ppid'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='link'?'active':'';?>"><a href="<?php echo site_url('informasi/link'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_link'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='download'?'active':'';?>"><a href="<?php echo site_url('informasi/download'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_download'); ?></a></li>
</ul>