        <?php 
        $this->load->view('include/header'); 
        ?>
        <link href="<?php echo base_url('asset/css/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet">
        <?php
        $this->load->view('include/navigation'); 
        ?>
        <!--content start-->
        <div style="background-color: white">
            <br/>
            <div class="container">
                <?php
                if ($pengumuman_alert_count===1)
                {
                ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="fa fa-warning"></i> <?php echo $this->lang->line('beranda_pengumuman_penting'); ?></strong>
                        <?php
                        foreach ($pengumuman_alert as $row_pengumuman_alert) {
                        $judul = 'judul_'.$this->session->userdata('language');
                        $slug_url = 'berita/pengumuman/baca/'.$row_pengumuman_alert->slug;
                        ?>
                        <span>
                            <a style="color: white" href="<?php echo site_url($slug_url) ?>">
                                <?php echo $row_pengumuman_alert->$judul ?>
                            </a>
                        </span>
                        <?php 
                        }
                        ?>
                </div>
                <?php
                }
                
                if ($pengumuman_alert_count>1)
                {
                ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?php echo $this->lang->line('beranda_pengumuman_penting'); ?></strong>
                    <ul style="margin-bottom: 5px; margin-left: 5px !important" class="fa-ul">
                        <?php
                        foreach ($pengumuman_alert as $row_pengumuman_alert) {
                        $judul = 'judul_'.$this->session->userdata('language');
                        $slug_url = 'berita/pengumuman/baca/'.$row_pengumuman_alert->slug;
                        ?>
                        <li>
                            <a style="color: white" href="<?php echo site_url($slug_url) ?>">
                                <i class="fa fa-warning"></i> <?php echo $row_pengumuman_alert->$judul ?>
                            </a>
                        </li>
                        <?php 
                        }
                        ?>
                        </ul>
                </div>
                <?php
                }
                ?>
                
                <div class="row-fluid visible-desktop">
                    <div class="span6">
                        <div id="myCarousel" class="carousel slide">
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="item active">
                                  <img style="height: 223px; width: 100%" src="<?php echo base_url('upload/slide/cc.gif'); ?>" alt="">
                              </div>
                              <div class="item">
                                  <img style="height: 223px; width: 100%" src="<?php echo base_url('upload/slide/kurs.gif'); ?>" alt="">
                              </div>
                              <div class="item">
                                  <img style="height: 223px; width: 100%" src="<?php echo base_url('upload/slide/gedung.gif'); ?>" alt="">
                              </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                          </div>
                    </div>
                    <div class="span6">
                        <div class="card">
                            <div class="label-logo">
                                <h3 class="card-heading simple" style="color: #022F5A !important">
                                    <i class="fa fa-newspaper-o"></i> <?php echo $this->lang->line('nav_berita'); ?>
                                    <div class="pull-right"><img src="<?php echo base_url('asset/image/component/label-logo.png'); ?>" /></div>
                                </h3>
                            </div>
                            <div id="operplow" style="height: 100px; overflow: auto" class="card-body" data-mcs-theme="minimal-dark">
                                <ul style="margin-left: 15px">
                                    <?php 
                                    foreach ($kiriman as $row_kiriman) {
                                    $judul = 'judul_'.$this->session->userdata('language');
                                    ?>
                                    <li>
                                        <a style="color: #444" href="<?php echo site_url('kiriman/kiriman_pos'); ?>">
                                            <?php echo $row_kiriman->$judul ?>
                                        </a>
                                    </li>
                                    <?php 
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-actions">
                                <a href="<?php echo site_url('kiriman/kiriman_pos'); ?>" class="btn btn-block"><?php echo $this->lang->line('main_selengkapnya'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid hidden-desktop">
                    <div class="span12">
                        <div id="myCarousel2" class="carousel slide">
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel2" data-slide-to="1"></li>
                              <li data-target="#myCarousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="item active">
                                  <img style="height: 223px; width: 100%" src="<?php echo base_url('upload/slide/kapal.jpg'); ?>" alt="">
                              </div>
                              <div class="item">
                                  <img style="height: 223px; width: 100%" src="<?php echo base_url('upload/slide/kimia.jpg'); ?>" alt="">
                              </div>
                              <div class="item">
                                  <img style="height: 223px; width: 100%" src="<?php echo base_url('upload/slide/kpdjbc.jpg'); ?>" alt="">
                              </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
                            <a class="right carousel-control" href="#myCarousel2" data-slide="next">&rsaquo;</a>
                          </div>
                    </div>
                </div>
                <div class="row-fluid hidden-desktop">
                    <div class="span12">
                        <div class="card">
                            <div class="label-logo">
                                <h3 class="card-heading simple" style="color: #022F5A !important">
                                    <i class="fa fa-newspaper-o"></i> <?php echo $this->lang->line('nav_berita'); ?>
                                    <div class="pull-right"><img src="<?php echo base_url('asset/image/component/label-logo.png'); ?>" /></div>
                                </h3>
                            </div>
                            <div class="card-body" data-mcs-theme="minimal-dark">
                                <ul style="margin-left: 15px">
                                    <?php 
                                    foreach ($kiriman as $row_kiriman) {
                                    $judul = 'judul_'.$this->session->userdata('language');
                                    ?>
                                    <li>
                                        <a style="color: #444" href="<?php echo site_url('kiriman/kiriman_pos'); ?>">
                                            <?php echo $row_kiriman->$judul ?>
                                        </a>
                                    </li>
                                    <?php 
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-actions">
                                <a href="<?php echo site_url('kiriman/kiriman_pos'); ?>" class="btn btn-block"><?php echo $this->lang->line('main_selengkapnya'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--berita-->
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home"><i class="fa fa-suitcase"></i> <?php echo $this->lang->line('nav_penumpang'); ?></a></li>
                            <li><a href="#profile"><i class="fa fa-cube"></i> <?php echo $this->lang->line('nav_kiriman'); ?></a></li>
                            <li><a href="#messages"><i class="fa fa-car"></i> <?php echo $this->lang->line('nav_pelintas'); ?></a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                Apakah barang penumpang ? <br>
                                Bagaimana prosedur barang penumpang ? <br>
                            </div>
                            <div class="tab-pane" id="profile">
                                Apakah barang kiriman ? <br>
                                Bagaimana prosedur barang kiriman ? 
                            </div>
                            <div class="tab-pane" id="messages">
                                Apakah barang pelintas batas ? <br>
                                Bagaimana prosedur barang pelintas batas ? 
                            </div>
                            <div class="tab-pane" id="settings">...</div>
                        </div>
                        
                        <table width="100%">
                            <?php 
                            foreach ($berita as $row_berita) {
                            $judul = 'judul_'.$this->session->userdata('language');
                            $slug_url = 'berita/berita/baca/'.$row_berita->slug;
                            ?>
                            <tr>
                                <td>
                                    <a style="color: #444" href="<?php echo site_url($slug_url) ?>">
                                        <?php echo $row_berita->$judul ?>
                                    </a>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </table>

                        <div class="judul4">
                            <strong><i class="fa fa-bullhorn"></i> <?php echo $this->lang->line('nav_pengumuman'); ?></strong>
                            <div class="pull-right text-right">
                                <a href="<?php echo site_url('berita/pengumuman'); ?>"><small><?php echo $this->lang->line('main_index'); ?></small></a>
                            </div>
                        </div>
                        <div class="isi_juddul4">
                            <table width="100%">
                                <?php 
                                foreach ($pengumuman as $row_pengumuman) {
                                $judul = 'judul_'.$this->session->userdata('language');
                                $slug_url = 'berita/pengumuman/baca/'.$row_pengumuman->slug;
                                ?>
                                <tr>
                                    <td>
                                        <a style="color: #444" href="<?php echo site_url($slug_url) ?>">
                                            <?php echo $row_pengumuman->$judul ?>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                }
                                ?>
                            </table>    
                        </div>
                    </div>

                    <div class="span4">
                        <div class="judul4"><strong><i class="fa fa-info-circle"></i> <?php echo $this->lang->line('nav_informasi'); ?></strong></div>
                        <div class="isi_judsul4">
                            <ul class="mylist">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_faq'); ?></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_lartas'); ?></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ppjk'); ?></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_ppid'); ?></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_link'); ?></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('nav_download'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span2">
                        <div class="judul4"><strong><i class="fa fa-list-alt"></i> <?php echo $this->lang->line('nav_wbc'); ?></strong></div>
                        <div class="text-center isi_juddul4">
                            <a href="<?php echo site_url('berita/wbc'); ?>">
                                <div class="wbc_box">
                                    <?php 
                                    $foto = 'upload/wbc/foto/'.$wbc->foto;
                                    ?>
                                    <a href="<?php echo site_url('berita/wbc'); ?>">
                                        <img width="160px" src="<?php echo base_url($foto); ?>" title="<?php echo $this->lang->line('nav_wbc'); ?>"/>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="visible-desktop shortcut-row">
                    <div class="row-fluid">
                            <ul class="inline">
                                <li class="span6" style="margin-left: 5px">
                                    <div class="span3 shortcut-box-first">
                                        <a target="_blank" href="http://customer.beacukai.go.id/">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_portal_pengguna_jasa'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/portal_pengguna_jasa.gif'); ?>"/>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="span3 shortcut-box">
                                        <a target="_blank" href="#">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_registrasi_kepabeanan'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/registrasi_kepabeanan.gif'); ?>"/>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="span3 shortcut-box">
                                        <a target="_blank" href="http://103.12.81.2/appreg/">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_registrasi_ppjk'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/registrasi_ppjk.gif'); ?>"/>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="span3 shortcut-box">
                                        <a target="_blank" href="http://peraturan.beacukai.go.id/">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_peraturan'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/direktori_peraturan.gif'); ?>"/>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="span6" style="margin-left: 5px">
                                    <div class="span3 shortcut-box">
                                        <div class="shortcut-holder">
                                            <a target="_blank" href="http://eservice.insw.go.id/index.cgi?page=hs-code-information.html">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_tarif'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/browse_tarif.gif'); ?>"/>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="span3 shortcut-box">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_kurs'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/kurs.gif'); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span3 shortcut-box">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_pengaduan'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/pengaduan.gif'); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span3 shortcut-box">
                                        <div class="shortcut-holder">
                                            <div class="shortcut-title">
                                                <strong><small><?php echo $this->lang->line('nav_contact_center'); ?></small></strong>
                                            </div>
                                            <div class="shortcut-hover">
                                                <img class="shortcut-img" src="<?php echo base_url('asset/image/shortcut/contact_center.gif'); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </div>
                </div>
                <br>
                <!--eselon I-->
                <?php $this->load->view('include/eselonI'); ?>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        
        <!--eselon I dan slider home aja-->
        <script src="<?php echo base_url(); ?>asset/9bitStudios-flexisel-c787002/js/jquery.flexisel.js"></script>
        
        <script src="<?php echo base_url(); ?>asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            $('#myTab a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
            
            $('.title').tooltip();

//            slider utama
            $('#myCarousel').carousel({
                pause: 'hover'
            });
            $('#myCarousel2').carousel({
                pause: 'hover'
            });
            
//            flexisel eselon1
            $(window).load(function() {
//                $.noConflict();
                $("#eselon1").flexisel({
                    visibleItems: 8,
                    animationSpeed: 200,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    clone:true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                      portrait: {
                        changePoint:480,
                        visibleItems: 2
                      }, 
                      landscape: {
                        changePoint:640,
                        visibleItems: 3
                      },
                      tablet: {
                        changePoint:768,
                        visibleItems: 4
                      },
                      box: {
                        changePoint:979,
                        visibleItems: 6
                      }
                    }
                });
            });
            
            (function($){
                $(window).load(function(){
                    $("#operplow").mCustomScrollbar({
                            scrollButtons:{enable:false},
                            theme:"minimal-dark"
                    });
                });
            })(jQuery);
        </script>
        
        <?php $this->load->view('include/footerscript');  ?>