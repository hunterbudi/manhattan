<div class="judul4"><strong><i class="fa fa-building-o"></i> <?php echo $this->lang->line('nav_tentang_kami'); ?></strong></div>
<div class="visible-desktop" style="margin-bottom:10px; ">
    <!--<img style="border-radius: 5px 5px 5px 0px;" src="<?php // echo base_url('asset/image/component/kpdjbc.jpg'); ?>" />-->
</div>
<ul class="mylist">
    <li class="<?php echo $this->uri->segment(2)=='sekilas'?'active':'';?>"><a href="<?php echo site_url('tentang/sekilas'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_sekilas'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='tupoksi'?'active':'';?>"><a href="<?php echo site_url('tentang/tupoksi'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tupoksi'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='visi_misi'?'active':'';?>"><a href="<?php echo site_url('tentang/visi_misi'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_visi_misi'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='logo'?'active':'';?>"><a href="<?php echo site_url('tentang/logo'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_logo'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='mars'?'active':'';?>"><a href="<?php echo site_url('tentang/mars'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_mars'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='kode_etik'?'active':'';?>"><a href="<?php echo site_url('tentang/kode_etik'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kode_etik'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='organisasi'?'active':'';?>"><a href="<?php echo site_url('tentang/organisasi'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_organisasi'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='video_profil'?'active':'';?>"><a href="<?php echo site_url('tentang/video_profil'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_video_profil'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='sejarah'?'active':'';?>"><a href="<?php echo site_url('tentang/sejarah'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_sejarah'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='kantor'?'active':'';?>"><a href="<?php echo site_url('tentang/kantor'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kantor'); ?></a></li>
    <li class="<?php echo $this->uri->segment(2)=='lokasi'?'active':'';?>"><a href="<?php echo site_url('tentang/lokasi'); ?>"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_lokasi'); ?></a></li>
</ul>