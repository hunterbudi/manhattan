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
                    <li class="active"><?php echo $this->lang->line('nav_website'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_peta_situs'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('website/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-sitemap"></i> <?php echo $this->lang->line('nav_peta_situs'); ?></strong></div>
                        <div class="mycontent">
                            <ul class="fa-ul" style="margin-left: 0px">
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_beranda'); ?>
                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tentang_kami'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_sekilas'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tupoksi'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_visi_misi'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_logo'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_mars'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kode_etik'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_organisasi'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_video_profil'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_sejarah'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kantor'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_lokasi'); ?></li>
                                    </ul>

                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_berita_utama'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_berita'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_pengumuman'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kegiatan'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_wbc'); ?></li>
                                    </ul>
                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kiriman_dll'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kiriman_pos'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_penumpang_sarkut'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_pelintas'); ?></li>
                                    </ul>
                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_informasi'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_faq'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_peraturan'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tarif'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_kurs'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_statistik'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_lartas'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ppjk'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ppid'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_link'); ?></li>
                                    </ul>
                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_administrasi'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_impor'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ekspor'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_fasilitas'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_cukai'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_aeo'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_fta'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_download'); ?></li>
                                    </ul>
                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_aplikasi_layanan'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_portal_pengguna_jasa'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_registrasi_kepabeanan'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_registrasi_ppjk'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_layanan_informasi'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_pengaduan'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_contact_center'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_majalah'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_intranet'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_oa'); ?></li>
                                    </ul>
                                </li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_website'); ?>
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_tentang_website'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_peta_situs'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_sanggahan'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_syarat_penggunaan'); ?></li>
                                        <li><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_privasi'); ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <?php $this->load->view('include/footerscript');  ?>