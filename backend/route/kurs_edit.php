<?php
$id = antiinjection($_GET['id']);
$sql = mysql_query("SELECT * FROM kurs WHERE id='$id'");
$data = mysql_fetch_array($sql);
$start = view($data['start']);
$stop = view($data['stop']);
$view = $start." - ".$stop;
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Informasi
            <small>Kurs</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Informasi</li>
            <li class="active">Kurs</li>
        </ol>
    </section>
    <!-- Main content -->

    <section class="content">

        <div class="col-md-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Update Kurs</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="kurs" action="?module=kurs_edit">
                    <br>
                    <br>
                    <div class="box-body">
                        <div class="form-group">
                             <label class="col-lg-4 control-label">Masukkan Nomor KEP</label>
                                <div class="input-group col-lg-4">
                                    <div class="input-group-addon">
                                    <i class="fa fa-plus"></i>
                                    </div>
                                    <input type="text" class="form-control" name="no_kep"  required="required" value="<?php echo $data['no_kep'];?>"/>
                                </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                             <label class="col-lg-4 control-label">Masukkan Tanggal KEP</label>
                                <div class="input-group col-lg-4">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" name="tgl_kep" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  required="required"  value="<?php echo view($data['tgl_kep']);?>"/>
                                </div><!-- /.input group -->
                        </div><!-- /.form group -->                             
                        <div class="form-group">
                            <label class="col-lg-4 control-label">Masukkan Periode KEP</label>
                                <div class="input-group col-lg-4">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="periode" id="reservation"  required="required" value="<?php echo $view ?>"/>
                                </div> 
                        </div>                    
                    </div>                   
                    <div class="row">        
                            <div class="col-md-1">USD</div>
                            <div class="col-md-2"><input type="text" name="usd" class="form-control" required="required"  value="<?php echo $data['usd'];?>"></div>
                            <div class="col-md-1">AUD</div>
                            <div class="col-md-2"><input type="text" name="aud" class="form-control" required="required" value="<?php echo $data['aud'];?>"></div>
                            <div class="col-md-1">CAD</div>
                            <div class="col-md-2"><input type="text" name="cad" class="form-control" required="required" value="<?php echo $data['cad'];?>"></div>
                            <div class="col-md-1">DKK</div>
                            <div class="col-md-2"><input type="text" name="dkk" class="form-control" required="required" value="<?php echo $data['dkk'];?>"></div>
                    </div>
                    <div class="row">        
                            <div class="col-md-1">HKD</div>
                            <div class="col-md-2"><input type="text" name="hkd" class="form-control" required="required" value="<?php echo $data['hkd'];?>"></div>
                            <div class="col-md-1">MYR</div>
                            <div class="col-md-2"><input type="text" name="myr" class="form-control" required="required" value="<?php echo $data['myr'];?>"></div>
                            <div class="col-md-1">NZD</div>
                            <div class="col-md-2"><input type="text" name="nzd" class="form-control" required="required" value="<?php echo $data['nzd'];?>"></div>
                            <div class="col-md-1">NOK</div>
                            <div class="col-md-2"><input type="text" name="nok" class="form-control" required="required" value="<?php echo $data['nok'];?>"></div>
                    </div>
                    <div class="row">        
                            <div class="col-md-1">GBP</div>
                            <div class="col-md-2"><input type="text" name="gbp" class="form-control" required="required" value="<?php echo $data['gbp'];?>"></div>
                            <div class="col-md-1">SGD</div>
                            <div class="col-md-2"><input type="text" name="sgd" class="form-control" required="required" value="<?php echo $data['sgd'];?>"></div>
                            <div class="col-md-1">SEK</div>
                            <div class="col-md-2"><input type="text" name="sek" class="form-control" required="required" value="<?php echo $data['sek'];?>"></div>
                            <div class="col-md-1">CHF</div>
                            <div class="col-md-2"><input type="text" name="chf" class="form-control" required="required" value="<?php echo $data['chf'];?>"></div>
                    </div>  
                    <div class="row">        
                            <div class="col-md-1">JPY</div>
                            <div class="col-md-2"><input type="text" name="jpy" class="form-control" required="required" value="<?php echo $data['jpy'];?>"></div>
                            <div class="col-md-1">MMK</div>
                            <div class="col-md-2"><input type="text" name="mmk" class="form-control" required="required" value="<?php echo $data['mmk'];?>"></div>
                            <div class="col-md-1">INR</div>
                            <div class="col-md-2"><input type="text" name="inr" class="form-control" required="required" value="<?php echo $data['inr'];?>"></div>
                            <div class="col-md-1">KWD</div>
                            <div class="col-md-2"><input type="text" name="kwd" class="form-control" required="required" value="<?php echo $data['kwd'];?>"></div>
                    </div>  
                    <div class="row">        
                            <div class="col-md-1">PKR</div>
                            <div class="col-md-2"><input type="text" name="pkr" class="form-control" required="required" value="<?php echo $data['pkr'];?>"></div>
                            <div class="col-md-1">PHP</div>
                            <div class="col-md-2"><input type="text" name="php" class="form-control" required="required" value="<?php echo $data['php'];?>"></div>
                            <div class="col-md-1">SAR</div>
                            <div class="col-md-2"><input type="text" name="sar" class="form-control" required="required" value="<?php echo $data['sar'];?>"></div>
                            <div class="col-md-1">LKR</div>
                            <div class="col-md-2"><input type="text" name="lkr" class="form-control" required="required" value="<?php echo $data['lkr'];?>"></div>
                    </div>  
                    <div class="row">        
                            <div class="col-md-1">THB</div>
                            <div class="col-md-2"><input type="text" name="thb" class="form-control" required="required" value="<?php echo $data['thb'];?>"></div>
                            <div class="col-md-1">BND</div>
                            <div class="col-md-2"><input type="text" name="bnd" class="form-control" required="required" value="<?php echo $data['bnd'];?>"></div>
                            <div class="col-md-1">EUR</div>
                            <div class="col-md-2"><input type="text" name="eur" class="form-control" required="required" value="<?php echo $data['eur'];?>"></div>
                            <div class="col-md-1">CNY</div>
                            <div class="col-md-2"><input type="text" name="cny" class="form-control" required="required" value="<?php echo $data['cny'];?>"></div>
                    </div>  
                    <div class="row">        
                            <div class="col-md-1">KRW</div>
                            <div class="col-md-2"><input type="text" name="krw" class="form-control" required="required" value="<?php echo $data['krw'];?>"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2"></div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Kurs akan diupload?');">
                    </div>
                </form>
            </div><!-- /.box -->
            <!-- =========================================proses================================================ -->
            <?php
            if (isset($_POST['simpan'])) {
                
                date_default_timezone_set('UTC');
                //cek dulu sudah pernah diupload belum
                $no_kep = $_POST['no_kep'];
                $tgl_kep = sql($_POST['tgl_kep']);
                $periode = $_POST['periode'];
                $start = substr($periode,6,4)."-".substr($periode,0,2)."-".substr($periode,3,2);
                $stop = substr($periode,19,4)."-".substr($periode,13,2)."-".substr($periode,16,2);            
                
                //kurs
                $usd = $_POST['usd'];
                $aud = $_POST['aud'];
                $cad = $_POST['cad'];
                $dkk = $_POST['dkk'];
                $hkd = $_POST['hkd'];
                $myr = $_POST['myr'];
                $nzd = $_POST['nzd'];
                $nok = $_POST['nok'];
                $gbp = $_POST['gbp'];
                $sgd = $_POST['sgd'];
                $sek = $_POST['sek'];
                $chf = $_POST['chf'];
                $jpy = $_POST['jpy'];
                $mmk = $_POST['mmk'];
                $inr = $_POST['inr'];
                $kwd = $_POST['kwd'];
                $pkr = $_POST['pkr'];
                $php = $_POST['php'];
                $sar = $_POST['sar'];
                $lkr = $_POST['lkr'];
                $thb = $_POST['thb'];
                $bnd = $_POST['bnd'];
                $eur = $_POST['eur'];
                $cny = $_POST['cny'];
                $krw = $_POST['krw'];
                
                $query = "UPDATE kurs SET no_kep='$no_kep',tgl_kep='$tgl_kep',start='$start',stop='$stop',usd='$usd',aud='$aud',cad='$cad',dkk='$dkk',hkd='$hkd',myr='$myr',nzd='$nzd',nok='$nok',gbp='$gbp',sgd='$sgd',sek='$sek',chf='$chf',jpy='$jpy',mmk='$mmk',inr='$inr',kwd='$kwd',pkr='$pkr',php='$php',sar='$sar',lkr='$lkr',thb='$thb',bnd='$bnd',eur='$eur',cny='$cny',krw='$krw',jarak='$jarak' WHERE id='$id'";
            
                $sql = mysql_query($query);
                
                if ($sql){
                    echo "<script>alert ('Kurs berhasil diedit, terima kasih')</script>";
                    echo '<script type="text/javascript">window.location="?module=kurs"</script>';  
                }
                }
            ?>
            <br><br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="15%">No KEP / Tanggal</th>
                        <th width="20%">Periode Kep</th>
                        <th width="55%">Detail Kurs</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Data mentah yang ditampilkan ke tabel                                
                    $sql = mysql_query("SELECT * from kurs ORDER BY id DESC");
////                                              
                    $no = 1;
                    while ($r = mysql_fetch_array($sql)) {
                        ?>

                        <tr align='center'>
                            <td class='odd gradeX' align="left"><?php echo $r['no_kep']; ?><br>Tanggal <?php echo view($r['tgl_kep']); ?></td>
                            <td class='odd gradeX' align="left"><?php echo view($r['start']); ?> s.d. <?php echo view($r['stop']); ?></td>
                            <td class='odd gradeX'>
                                <a data-toggle='collapse' data-parent='#accordion' href='<?php echo "#".$r['id'];?>'>Detail Info Kurs</a>
                                <div id='<?php echo $r["id"];?>' class='panel-collapse collapse'>
                                        <div class='box-body'>                         
                                            <?php
                                            $id = $r['id'];
                                            $sqlvalas = mysql_query("SELECT * FROM kurs WHERE id='$id'");
                                            $datavalas = mysql_fetch_array($sqlvalas);
                                            ?>
                                            <table class="table table-stripped">
                                                <thead>
                                                    <tr>    
                                                    <td>No</td>
                                                    <td>Valuta</td>
                                                    <td>Value</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dollar Amerika Serikat (USD)</td>
                                                        <td><?php echo $datavalas['usd'];?></td>
                                                    </tr>    
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Dollar Australia (AUD)</td>
                                                        <td><?php echo $datavalas['aud'];?></td>
                                                    </tr>                                                   
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Dollar Kanada (CAD)</td>
                                                        <td><?php echo $datavalas['cad'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Kroner Denmark (DKK)</td>
                                                        <td><?php echo $datavalas['dkk'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Dollar Hongkong (HKD)</td>
                                                        <td><?php echo $datavalas['hkd'];?></td>
                                                    </tr>                                                      
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Ringgit Malaysia (AUD)</td>
                                                        <td><?php echo $datavalas['myr'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Dollar Selandia Baru (NZD)</td>
                                                        <td><?php echo $datavalas['nzd'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Kroner Norwegia (NOK)</td>
                                                        <td><?php echo $datavalas['nok'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Poundsterling Inggris (GBP)</td>
                                                        <td><?php echo $datavalas['gbp'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Dollar Singapura (SGD)</td>
                                                        <td><?php echo $datavalas['sgd'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Kroner Swedia (SEK)</td>
                                                        <td><?php echo $datavalas['sek'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Franc Swiss (CHF)</td>
                                                        <td><?php echo $datavalas['chf'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Yen Jepang (JPY)</td>
                                                        <td><?php echo $datavalas['jpy'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Kyat Myanmar (MMK)</td>
                                                        <td><?php echo $datavalas['mmk'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Rupee India (INR)</td>
                                                        <td><?php echo $datavalas['inr'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Dinar Kuwait (KWD)</td>
                                                        <td><?php echo $datavalas['kwd'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Rupee Pakistan (PKR)</td>
                                                        <td><?php echo $datavalas['pkr'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Peso Philipina (PHP)</td>
                                                        <td><?php echo $datavalas['php'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Riyal Saudi Arabia (SAR)</td>
                                                        <td><?php echo $datavalas['sar'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Rupee Sri Lanka (LKR)</td>
                                                        <td><?php echo $datavalas['lkr'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>21</td>
                                                        <td>Baht Thailand (THB)</td>
                                                        <td><?php echo $datavalas['thb'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>22</td>
                                                        <td>Dollar Brunei Darussalam (BND)</td>
                                                        <td><?php echo $datavalas['bnd'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>23</td>
                                                        <td>Euro (EUR)</td>
                                                        <td><?php echo $datavalas['eur'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>24</td>
                                                        <td>Renminbi Tiongkok (CNY)</td>
                                                        <td><?php echo $datavalas['cny'];?></td>
                                                    </tr>  
                                                    <tr>
                                                        <td>25</td>
                                                        <td>Won Korea (KRW)</td>
                                                        <td><?php echo $datavalas['krw'];?></td>
                                                    </tr>                                                 
                                                </tbody>
                                            </table>
                                        </div>
                            </td>
                            <td class='odd gradeX'>                          
                                <span><a href=?module=publish&pages=kurs&id=<?php echo $id ?> title='upload' class='btn btn-outline btn-warning btn-xs ' onClick="return confirm('Kurs berdasarkan KMK-<?php echo $r['no_kep'] ?> akan diupload, Anda yakin?');" > <i class='fa fa-upload'></i><span><strong><small></small></strong></span></a></span>
                                <span><a href=?module=kurs_edit&id=<?php echo $id ?> title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i><span><strong><small></small></strong></span></a> </span></span>
                                <span><a href=?module=delete&pages=kurs&id=<?php echo $id ?> title='delete' class='btn btn-outline btn-danger btn-xs ' onClick="return confirm('Kurs berdasarkan KMK-<?php echo $r['no_kep'] ?> akan dihapus, Anda yakin?');" > <i class='fa fa-trash-o'></i><span><strong><small></small></strong></span></a></span>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>


                </tbody>

            </table>  
        </div>

    </section>
</aside>
