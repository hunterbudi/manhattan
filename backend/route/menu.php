<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../upload/user_photo/<?php echo $_SESSION['avatar'] ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['username'];?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="?module=home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="?module=slider">
                                <i class="fa fa-film"></i> <span>Slider</span>
                            </a>
                        </li>
                        <li class="<?php if (($_REQUEST['module']=='wbc')){ echo 'active'; } ?>">
                            <a href="?module=wbc">
                                <i class="fa fa-book"></i> <span>WBC</span>
                            </a>
                        </li>
                        <li class="treeview <?php if (($_REQUEST['module']=='berita')||($_REQUEST['module']=='kegiatan')||($_REQUEST['module']=='pengumuman')||($_REQUEST['module']=='berita_edit')||($_REQUEST['module']=='kegiatan_edit')||($_REQUEST['module']=='pengumuman_edit')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-volume-up"></i>
                                <span>Announcement</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=berita"><i class="fa fa-angle-double-right"></i> Berita</a></li>
                                <li><a href="?module=pengumuman"><i class="fa fa-angle-double-right"></i> Pengumuman</a></li>

                            </ul>
                        </li>
                        <li class="treeview <?php if (($_REQUEST['module']=='impor')||($_REQUEST['module']=='impor_edit')||($_REQUEST['module']=='ekspor')||($_REQUEST['module']=='ekspor_edit')||($_REQUEST['module']=='fasilitas')||($_REQUEST['module']=='fasilitas_edit')||($_REQUEST['module']=='aeo')||($_REQUEST['module']=='aeo_edit')||($_REQUEST['module']=='fta')||($_REQUEST['module']=='fta_edit')||($_REQUEST['module']=='lartas')||($_REQUEST['module']=='lartas_edit')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Pabean</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=impor"><i class="fa fa-angle-double-right"></i> Impor</a></li>
                                <li><a href="?module=ekspor"><i class="fa fa-angle-double-right"></i> Ekspor</a></li>
                                <li><a href="?module=aeo"><i class="fa fa-angle-double-right"></i> AEO</a></li>
                                <li><a href="?module=fta"><i class="fa fa-angle-double-right"></i> FTA</a></li>
                                <li><a href="?module=lartas"><i class="fa fa-angle-double-right"></i> Larangan dan Pembatasan</a></li>
                                
                            </ul>
                        </li>
                        <li class="<?php if (($_REQUEST['module']=='cukai')){ echo 'active'; } ?>">
                            <a href="?module=cukai">
                                <i class="fa fa-barcode"></i> <span>Cukai</span>
                            </a>
                        </li>
                        <li class="treeview <?php if (($_REQUEST['module']=='bebas_bm')||($_REQUEST['module']=='bebas_bm_edit')||($_REQUEST['module']=='tambang')||($_REQUEST['module']=='tambang_edit')||($_REQUEST['module']=='tpb')||($_REQUEST['module']=='tpb_edit')||($_REQUEST['module']=='kite')||($_REQUEST['module']=='kite_edit')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-star"></i>
                                <span>Fasilitas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=bebas_bm"><i class="fa fa-angle-double-right"></i> Pembebasan Bea Masuk</a></li>
                                <li><a href="?module=tambang"><i class="fa fa-angle-double-right"></i> Pertambangan</a></li>
                                <li><a href="?module=tpb"><i class="fa fa-angle-double-right"></i> TPB</a></li>
                                <li><a href="?module=kite"><i class="fa fa-angle-double-right"></i> KITE</a></li>
                                
                                
                            </ul>
                        </li>
                        <li class="treeview <?php if (($_REQUEST['module']=='penumpang_sarkut')||($_REQUEST['module']=='penumpang_sarkut_edit')||($_REQUEST['module']=='kiriman_pos')||($_REQUEST['module']=='kiriman_pos_edit')||($_REQUEST['module']=='pelintas_batas')||($_REQUEST['module']=='pelintas_batas_edit')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>PPLB, Kiriman dan Pos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=penumpang_sarkut"><i class="fa fa-angle-double-right"></i> Barang Penumpang</a></li>
                                <li><a href="?module=kiriman_pos"><i class="fa fa-angle-double-right"></i> Kiriman Pos</a></li>
                                <li><a href="?module=pelintas_batas"><i class="fa fa-angle-double-right"></i> Pelintas Batas</a></li>

                            </ul>
                        </li>                        
                        <li class="treeview <?php if (($_REQUEST['module']=='kurs')||($_REQUEST['module']=='download')||($_REQUEST['module']=='faq')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-bullhorn"></i>
                                <span>Informasi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=kurs"><i class="fa fa-angle-double-right"></i> Kurs</a></li>
                                <li><a href="?module=download"><i class="fa fa-angle-double-right"></i> Download</a></li>
                                <li><a href="?module=faq"><i class="fa fa-angle-double-right"></i> FAQ</a></li>

                            </ul>
                        </li>  
                        <li class="<?php if (($_REQUEST['module']=='user')){ echo 'active'; } ?>">
                            <a href="?module=user">
                                <i class="fa fa-users"></i> <span>User</span>
                            </a>
                        </li>                        
                        <li class="treeview <?php if (($_REQUEST['module']=='sekilas')||($_REQUEST['module']=='tupoksi')||($_REQUEST['module']=='visi_misi')||($_REQUEST['module']=='logo')||($_REQUEST['module']=='kode_etik')||($_REQUEST['module']=='sejarah')||($_REQUEST['module']=='organisasi')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-question"></i>
                                <span>Tentang Bea Cukai</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=sekilas"><i class="fa fa-angle-double-right"></i> Sekilas Bea Cukai</a></li>
                                <li><a href="?module=tupoksi"><i class="fa fa-angle-double-right"></i> Tupoksi</a></li>
                                <li><a href="?module=visi_misi"><i class="fa fa-angle-double-right"></i> Visi dan Misi</a></li>
                                <li><a href="?module=logo"><i class="fa fa-angle-double-right"></i> Logo Bea dan Cukai</a></li>
                                <li><a href="?module=kode_etik"><i class="fa fa-angle-double-right"></i> Kode Etik</a></li>
                                <li><a href="?module=organisasi"><i class="fa fa-angle-double-right"></i> Organisasi</a></li>
                                <li><a href="?module=sejarah"><i class="fa fa-angle-double-right"></i> Sejarah Bea dan Cukai</a></li>
                                <li><a href="?module=kantor"><i class="fa fa-angle-double-right"></i> Kantor</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if (($_REQUEST['module']=='tentang_website')||($_REQUEST['module']=='peta_situs')||($_REQUEST['module']=='sanggahan')||($_REQUEST['module']=='syarat_penggunaan')||($_REQUEST['module']=='privasi')){ echo 'active'; } ?>">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Tentang Website</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?module=tentang_website"><i class="fa fa-angle-double-right"></i> Tentang Website</a></li>
                                <li><a href="?module=peta_situs"><i class="fa fa-angle-double-right"></i> Peta Situs</a></li>
                                <li><a href="?module=sanggahan"><i class="fa fa-angle-double-right"></i> Sanggahan</a></li>
                                <li><a href="?module=syarat_penggunaan"><i class="fa fa-angle-double-right"></i> Syarat Penggunaan</a></li>
                                <li><a href="?module=privasi"><i class="fa fa-angle-double-right"></i> Privasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>