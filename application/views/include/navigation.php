
    </head>
    <body>
        <!--header start-->
        <div class="myheader">
            <div class="container">
                <div class="row-fluid">
                    <div class="span9">
                        <div style="padding-top:25px">
                            <div>
                                <div style="float: left">
                                    <img src="<?php echo base_url('asset/image/component/logo1.png'); ?>" style="margin-right: 15px"/>
                                </div>
                                <div class="headertextbox">
                                    <span class="headertext">
                                        <?php echo $this->lang->line('main_djbc'); ?>
                                    </span><br/>
                                    <span class="headertext">
                                        <?php echo $this->lang->line('main_kemenkeu'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="text-right searchbox">
                            <div style="color:white"><small>
                                    <a class="bahasa" href="<?php echo site_url('language/bahasa'); ?>">Bahasa Indonesia</a> | 
                                    <a class="bahasa" href="<?php echo site_url('language/english'); ?>">English</a>
                                    <!--<a class="bahasa" href="<?php echo base_url() ?>about/destroylang.html">x</a>-->
                                </small></div>
                            <form class="form-search">
                                <div class="input-append input-block-level">
                                    <input type="text" class="mysearch" />
                                    <a class="btn add-on mysearchbtn"><i class="icon-search"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="myheaderbottom">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="navbar yamm">
                            <div class="navbar-inner">
                              <div class="container">
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav1">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                  <a class="brand" target="_blank" href="http://www.kemenkeu.go.id"><img src="<?php echo base_url('asset/image/component/logo.png'); ?>" /></a>
                                <div class="nav-collapse collapse" id="nav1">
                                  <ul class="nav">
                                    <!-- home -->
                                    <li>
                                        <a href="<?php echo site_url('home'); ?>" class="dropdown-toggle"> <?php echo $this->lang->line('nav_beranda'); ?> </a>
                                    </li>

                                    <!--tentang kami-->
                                    <li class="dropdown yamm-fullwidth">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $this->lang->line('nav_tentang_kami'); ?> <b class="caret"></b> </a>
                                      <ul class="dropdown-menu" style="min-width:400px; max-width:750px">
                                        <li>
                                          <!-- Content container to add padding -->
                                          <div class="yamm-content">
                                            <ul class="span5 unstyled">
                                              <!--<li><p><strong>Informasi tentang Direktorat Jenderal Bea dan Cukai</strong></p></li>-->
                                              <li>
                                                  <a href="<?php echo site_url('tentang/sekilas'); ?>"> <?php echo $this->lang->line('nav_sekilas'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/tupoksi'); ?>"> <?php echo $this->lang->line('nav_tupoksi'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/visi_misi'); ?>"> <?php echo $this->lang->line('nav_visi_misi'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/logo'); ?>"> <?php echo $this->lang->line('nav_logo'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/mars'); ?>"> <?php echo $this->lang->line('nav_mars'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/kode_etik'); ?>"> <?php echo $this->lang->line('nav_kode_etik'); ?></a>
                                              </li>
                                            </ul>
                                            <ul class="span3 unstyled">
                                              <li>
                                                  <a href="<?php echo site_url('tentang/organisasi'); ?>"> <?php echo $this->lang->line('nav_organisasi'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/video_profil'); ?>"> <?php echo $this->lang->line('nav_video_profil'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/sejarah'); ?>"> <?php echo $this->lang->line('nav_sejarah'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/kantor'); ?>"> <?php echo $this->lang->line('nav_kantor'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('tentang/lokasi'); ?>"> <?php echo $this->lang->line('nav_lokasi'); ?></a>
                                              </li>
                                            </ul>
                                              <ul class="span4 unstyled visible-desktop">
                                                  <img style="width: 100%; height: 120px" src="<?php echo base_url('asset/image/component/tentang_kami.gif'); ?>" />
                                              </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </li>
                                    
                                    <!--pabean-->
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $this->lang->line('nav_pabean'); ?> <b class="caret"></b> </a>
                                      <ul class="dropdown-menu" style="width:350px">
                                        <li>
                                          <!-- Content container to add padding -->
                                          <div class="yamm-content">
                                            <ul class="span6 unstyled">
                                              <!--<li><p><strong>Informasi tentang Direktorat Jenderal Bea dan Cukai</strong></p></li>-->
                                              <li>
                                                  <a href="<?php echo site_url('pabean/impor'); ?>"> <?php echo $this->lang->line('nav_impor'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('pabean/ekspor'); ?>"> <?php echo $this->lang->line('nav_ekspor'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('pabean/aeo'); ?>"> <?php echo $this->lang->line('nav_aeo'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('pabean/fta'); ?>"> <?php echo $this->lang->line('nav_fta'); ?></a>
                                              </li>
                                            </ul>
                                              <ul class="span6 unstyled visible-desktop">
                                                  <img style="width: 100%; height: 80px" src="<?php echo base_url('asset/image/component/berita.gif'); ?>" />
                                              </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </li>
                                    
                                    <!--cukai-->
                                    <li>
                                        <a href="<?php echo site_url('cukai/cukai'); ?>" class="dropdown-toggle"> <?php echo $this->lang->line('nav_cukai'); ?> </a>
                                    </li>
                                    
                                    <!--fasilitas-->
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $this->lang->line('nav_fasilitas'); ?> <b class="caret"></b> </a>
                                      <ul class="dropdown-menu" style="width:350px">
                                        <li>
                                          <!-- Content container to add padding -->
                                          <div class="yamm-content">
                                              <ul class="span5 unstyled visible-desktop">
                                                  <img style="width: 100%; height: 80px" src="<?php echo base_url('asset/image/component/informasi.gif'); ?>" />
                                              </ul>
                                            <ul class="span7 unstyled">
                                              <!--<li><p><strong>Informasi tentang Direktorat Jenderal Bea dan Cukai</strong></p></li>-->
                                              <li>
                                                  <a href="<?php echo site_url('fasilitas/pembebasan'); ?>"> <?php echo $this->lang->line('nav_pembebasan'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('fasilitas/pertambangan'); ?>"> <?php echo $this->lang->line('nav_pertambangan'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('fasilitas/tpb'); ?>"> <?php echo $this->lang->line('nav_tpb'); ?></a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo site_url('fasilitas/kite'); ?>"> <?php echo $this->lang->line('nav_kite'); ?></a>
                                              </li>
                                            </ul>
                                          </div>
                                        </li>
                                      </ul>
                                    </li>
                                    
                                    <!-- statistik -->
                                    <li class="dropdown">
                                        <a href="<?php echo site_url('statistik/statistik'); ?>" class="dropdown-toggle"> <?php echo $this->lang->line('nav_statistik'); ?> </a>
                                    </li>

                                  </ul>
                                </div><!--/.nav-collapse -->
                              </div>
                            </div>
                        </div><!-- yumm navbar -->
                    </div>
                </div>
            </div>
        </div>
        <!--header end-->