<!--footer start-->
        <div class="container-fluid mytopfooter">
            <br/>
            <div class="container">
                <div class="row-fluid link-footer">
                    <div class="span3">
                        <address>
                            <strong><?php echo $this->lang->line('nav_kantor_pusat'); ?></strong><br>
                            <?php echo $this->lang->line('nav_jalan'); ?><br>
                            <?php echo $this->lang->line('nav_kota'); ?><br>
                            <abbr title="Telepon"><i class="fa fa-phone"></i> </abbr> &nbsp;&nbsp;<?php echo $this->lang->line('nav_telepon'); ?><br>
                            <abbr title="Fax"><i class="fa fa-fax"></i> </abbr> &nbsp;<?php echo $this->lang->line('nav_fax'); ?><br>
                            <?php echo auto_link($this->lang->line('nav_website_resmi')); ?>
                        </address>
                    </div>
                    <div class="span3">
                        <strong><?php echo $this->lang->line('nav_aplikasi_layanan'); ?></strong><br>
                        <ul class="fa-ul list-footer">
                            <li><i class="fa-li fa fa-angle-right"></i><a target="_blank" href="http://customer.beacukai.go.id/"><?php echo $this->lang->line('nav_portal_pengguna_jasa'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><?php echo $this->lang->line('nav_registrasi_kepabeanan'); ?></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a target="_blank" href="http://103.12.81.2/appreg/"><?php echo $this->lang->line('nav_registrasi_ppjk'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><?php echo $this->lang->line('nav_layanan_informasi'); ?></li>
                            <li><i class="fa-li fa fa-angle-right"></i><?php echo $this->lang->line('nav_pengaduan'); ?></li>
                            <li><i class="fa-li fa fa-angle-right"></i><?php echo $this->lang->line('nav_contact_center'); ?></li>
                        </ul>
                    </div>
                    <div class="span3">
                        <strong><?php echo $this->lang->line('nav_aplikasi_layanan'); ?></strong><br>
                        <ul class="fa-ul list-footer">
                            <li><i class="fa-li fa fa-angle-right"></i><a target="_blank" href="http://peraturan.beacukai.go.id/"><?php echo $this->lang->line('nav_peraturan'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a target="_blank" href="http://eservice.insw.go.id/index.cgi?page=hs-code-information.html"><?php echo $this->lang->line('nav_tarif'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><?php echo $this->lang->line('nav_kurs'); ?></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a href="<?php echo site_url('berita/wbc'); ?>"><?php echo $this->lang->line('nav_majalah'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a target="_blank" href="http://intranet.beacukai.go.id/"><?php echo $this->lang->line('nav_intranet'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a target="_blank" href="https://vpn.customs.go.id/sap"><?php echo $this->lang->line('nav_oa'); ?></a></li>
                        </ul>
                    </div>
                    <div class="span3">
                        <strong><?php echo $this->lang->line('nav_website'); ?></strong><br>
                        <ul class="fa-ul list-footer">
                            <li><i class="fa-li fa fa-angle-right"></i><a href="<?php echo site_url('website/tentang_website'); ?>"><?php echo $this->lang->line('nav_tentang_website'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a href="<?php echo site_url('website/peta_situs'); ?>"><?php echo $this->lang->line('nav_peta_situs'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a href="<?php echo site_url('website/sanggahan'); ?>"><?php echo $this->lang->line('nav_sanggahan'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a href="<?php echo site_url('website/syarat_penggunaan'); ?>"><?php echo $this->lang->line('nav_syarat_penggunaan'); ?></a></li>
                            <li><i class="fa-li fa fa-angle-right"></i><a href="<?php echo site_url('website/privasi'); ?>"><?php echo $this->lang->line('nav_privasi'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid myfooter">
            <div class="container">
                <div class="row-fluid">
                    <div class="span9">
                        <div style="padding:10px 0px">
                            <table>
                                <tr>
                                    <td rowspan="2"><img src="<?php echo base_url('asset/image/component/logo-bawah.png') ?>"/>&nbsp;&nbsp;</td>
                                    <td>
                                        <small><?php echo $this->lang->line('main_hak_cipta'); ?></small><br/>
                                        <small><?php echo $this->lang->line('nav_jalan'); ?>, <?php echo $this->lang->line('nav_kota'); ?></small>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="span3">
                        <div style="padding-top:13px" class="pull-right">
                            <img src="<?php echo base_url('asset/image/component/fb.png') ?>"/>
                            <img src="<?php echo base_url('asset/image/component/tw.png') ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <a id="back-to-top" class="back-to-top" href="#top"><i class="fa fa-chevron-up"></i> </a>
        <!--footer end-->
        <script src="<?php echo base_url('asset/js/jquery-1.10.2.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/bootplus/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
            $("#back-to-top").hide();
                $(function () {
                    $(window).scroll(function(){
                        if ($(window).scrollTop()>100){
                            $("#back-to-top").fadeIn(1000);
                        }
                        else
                        {
                            $("#back-to-top").fadeOut(1000);
                        }
                    });
                    //back to top
                    $("#back-to-top").click(function(){
                        $('body,html').animate({scrollTop:0},1000);
                        return false;
                    });
                });
            });
        </script>