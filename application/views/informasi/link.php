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
                    <li class="active"><?php echo $this->lang->line('nav_informasi'); ?> <span class="divider"><i class="fa fa-angle-right"></i></span></li>
                    <li class="active"><?php echo $this->lang->line('nav_link'); ?></li>
                </ul>
                <div class="row-fluid" style="min-height: 300px">
                    <div class="span3">
                        <?php $this->load->view('informasi/sidebar'); ?>
                    </div>
                    <div class="span9">
                        <div class="judul4"><strong><i class="fa fa-chain"></i> <?php echo $this->lang->line('nav_link'); ?></strong></div>
                        <div><strong class="question" data-id="1"><?php echo $this->lang->line('link_organisasi_internasional'); ?></strong></div>
                        <ul class="fa-ul answer" id="1">
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.wcoomd.org/"><?php echo $this->lang->line('link_wco'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.wto.org/"><?php echo $this->lang->line('link_wto'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.apec.org/"><?php echo $this->lang->line('link_apec'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.asean.org/"><?php echo $this->lang->line('link_asean'); ?></a></li>
                        </ul>
                        <div><strong class="question" data-id="2"><?php echo $this->lang->line('link_customs_internasional'); ?></strong></div>
                        <ul class="fa-ul answer" id="2">
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.au/site/index.cfm?nav_id=670&area_id=5"><?php echo $this->lang->line('link_australia'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.bn/"><?php echo $this->lang->line('link_brunei'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_kamboja'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.info.gov.hk/customs/eng/advice/items_e.html"><?php echo $this->lang->line('link_hongkong'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_jepang'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_korea'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_laos'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_malaysia'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_myanmar'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_philippines'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_singapura'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_thailand'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_usa'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.customs.gov.kh/"><?php echo $this->lang->line('link_vietnam'); ?></a></li>
                        </ul>
                        <div><strong class="question" data-id="3"><?php echo $this->lang->line('link_kelembagaan'); ?>Kelembagaan</strong></div>
                        <ul class="fa-ul answer" id="3">
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.indonesia.go.id/"><?php echo $this->lang->line('link_indonesia'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.insw.go.id/"><?php echo $this->lang->line('link_insw'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.depkeu.go.id/"><?php echo $this->lang->line('link_depkeu'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.ekon.go.id/"><?php echo $this->lang->line('link_ekon'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.kominfo.go.id/"><?php echo $this->lang->line('link_kominfo'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.depdag.go.id/"><?php echo $this->lang->line('link_depdag'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.depkes.go.id/"><?php echo $this->lang->line('link_depkes'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.dephub.go.id/"><?php echo $this->lang->line('link_dephub'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.kkp.go.id/"><?php echo $this->lang->line('link_kkp'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.esdm.go.id/"><?php echo $this->lang->line('link_esdm'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.menlh.go.id/"><?php echo $this->lang->line('link_menlh'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.kemenperin.go.id/"><?php echo $this->lang->line('link_kemenperin'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.dephut.go.id/"><?php echo $this->lang->line('link_dephut'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.deptan.go.id/"><?php echo $this->lang->line('link_deptan'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.dephan.go.id/"><?php echo $this->lang->line('link_dephan'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.polri.go.id/"><?php echo $this->lang->line('link_polri'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.postel.go.id/"><?php echo $this->lang->line('link_postel'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.pom.go.id/"><?php echo $this->lang->line('link_pom'); ?> </a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.bapeten.go.id/"><?php echo $this->lang->line('link_bapeten'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://karantina.deptan.go.id/"><?php echo $this->lang->line('link_karantina'); ?></a></li>
                        </ul>
                        <div><strong class="question" data-id="4"><?php echo $this->lang->line('link_keu'); ?></strong></div>
                        <ul class="fa-ul answer" id="4">
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.fiskal.kemenkeu.go.id/"><?php echo $this->lang->line('link_bkf'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.bppk.kemenkeu.go.id"><?php echo $this->lang->line('link_bppk'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.anggaran.kemenkeu.go.id"><?php echo $this->lang->line('link_dja'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.beacukai.go.id"><?php echo $this->lang->line('link_djbc'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.djkn.kemenkeu.go.id"><?php echo $this->lang->line('link_djkn'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.pajak.go.id/"><?php echo $this->lang->line('link_djp'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.perbendaharaan.go.id"<?php echo $this->lang->line('link_perbend'); ?>></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.djpk.kemenkeu.go.id/"><?php echo $this->lang->line('link_djpk'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.djpu.kemenkeu.go.id"><?php echo $this->lang->line('link_djpu'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.itjen.kemenkeu.go.id/"><?php echo $this->lang->line('link_itjen'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.setjen.kemenkeu.go.id"><?php echo $this->lang->line('link_setjen'); ?></a></li>
                        </ul>
                        <div><strong class="question" data-id="5"><?php echo $this->lang->line('link_kppbc'); ?></strong></div>
                        <ul class="fa-ul answer" id="5">
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://kpubeacukaipriok.net/"><?php echo $this->lang->line('link_priok'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://www.bcsoetta.net/"><?php echo $this->lang->line('link_soetta'); ?></a></li>
                            <li><i class="fa-li fa fa-caret-square-o-right"></i> <a target="_blank" href="http://bcperak.net/"><?php echo $this->lang->line('link_perak'); ?></a></li>
                        </ul>                    </div>
                </div>
                <br/>
            </div>
            <br/>
        </div>
        <!--content end-->
        
        <?php $this->load->view('include/footer');  ?>
        <script>
//            $.noConflict();
            $( document ).ready(function() {
                $(function(){
                    $(".answer").hide();
                    $(".question").click(function(){
                        var id = '#'+$(this).attr('data-id');
                        var question_mark = '#question_mark_'+$(this).attr('data-id');
                        $(id).toggle();
                        $(question_mark).toggleClass("fa-rotate-90");
                    });
                });
            });
        </script>
        <?php $this->load->view('include/footerscript');  ?>