<script>
    function open_child(url, title, w, h) {
        var left = (screen.width / 2) - (w / 2);
        var top = (screen.height / 2) - (h / 2);
        w = window.open(url, title, 'toolbar=no, location=no, directories=no, \n\
        status=no, menubar=no, scrollbar=no, resizabel=no, copyhistory=no,\n\
        width=' + w + ',height=' + h + ',top=' + top + ',left=' + left);
    }
    ;
</script>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            KANTOR BEA CUKAI
            <small>Rekam Kantor Bea Cukai</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Kantor Bea Cukai</li>
            <li class="active">Rekam Kantor Bea Cukai</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Rekam</h3>
                    <div class="modal-footer clearfix">
                        <a href="?module=kanwil" class="btn btn-primary pull-right" ><i class="fa fa-building-o"></i> List Kantor Wilayah</a>
                    </div>
                    
                </div><!-- /.box-header -->
                <script src="standar_editor/ckeditor.js"></script>
                <form name="impor" method="post" action="?module=kantor" enctype="multipart/form-data">  
                    <div class="box-body">  
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                                <table class="table">
                                    <tr>
                                        <td width="20%">Nama Kantor</td>
                                        <td width="2%"></td>
                                        <td width="78%" colspan="2"><input type="text" name="nama" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Nama Kanwil</td>
                                        <td width="2%"></td>
                                        <td width="50%">
                                            <input id="nama_kanwil" type="text" name="nama_kanwil" class="form-control" />
                                        </td>
                                        <td width="3%">
                                            <button class="btn btn-warning" onclick="open_child('route/alookup_kanwil.php', 'Look Up', '600', '500');
                                                return false;"><i class="fa fa-bars"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Profil</td>
                                        <td width="2%"></td>
                                        <td width="78%" colspan="2"><textarea id="indonesia" name="profil" cols="80" rows="10"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Koordinat</td>
                                        <td width="2%"></td>
                                        <td width="30%" colspan="2"><input type="text" name="koordinat" class="form-control"></td>
                                    </tr>

                                </table>
                            </div>

                            <table class="table">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="2%"></td>
                                    <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Kantor Baru akan disimpan?');"></td>
                                </tr>        
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        <!-- =========================================proses================================================ -->
        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $profil = $_POST['profil'];
            $koordinat = $_POST['koordinat'];
            $nama_kanwil = $_POST['nama_kanwil'];


                $query = "INSERT INTO kantor_kppbc (nama,profil,koordinat,nama_kanwil)"
                        . " VALUES ('$nama','$profil','$koordinat','$nama_kanwil')";
                $sql = mysql_query($query);

                if ($sql) {
                    echo "<script>alert ('Kantor Bea Cukai berhasil disimpan, terima kasih')</script>";
                    echo '<script type="text/javascript">window.location="?module=kantor"</script>';
                }
            }
        ?>
        <br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="40%">Nama Kantor</th>
                    <th width="10%">Nama Kanwil</th>
                    <th width="10%">Koordinat</th>
                    <th width="10%">#action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Data mentah yang ditampilkan ke tabel                                
                $sql = mysql_query("SELECT * from kantor_kppbc  ORDER BY id DESC");
                $no = 1;
                while ($r = mysql_fetch_array($sql)) {
                    $id = $r['id'];
                    ?>

                    <tr align='center'>
                        <td class='odd gradeX'><?php echo $no ?></td>
                        <td class='odd gradeX' align='left'>
                            <a data-toggle='collapse' data-parent='#accordion' href='#<?php echo $r['id'] ?>'><?php echo $r['nama'] ?></a>
                            <div id='<?php echo $r['id'] ?>' class='panel-collapse collapse'>
                                <div class='box-body'><?php echo $r['profil'] ?></div>
                            </div>
                        </td>
                        <td class='odd gradeX'><?php echo $r['nama_kanwil'] ?></td>
                        <td class='odd gradeX'><?php echo $r['koordinat'] ?></td>
                        <td class='odd gradeX'>
                            <span> <a href=?module=kantor_edit&id=<?php echo $id ?> title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i></a></span>
                            <span> <a href=?module=delete&pages=kantor_kppbc&id=<?php echo $id ?> title='delete' onClick="return confirm('Kantor Bea Cukai akan dihapus, Anda yakin?');"  class='btn btn-outline btn-danger btn-xs'> <i class='fa fa-trash-o'></i></a> </span>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>    

        <script type="text/javascript">
    //CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace('profil',
            {
                filebrowserBrowseUrl: 'kcfinder/browse.php?type=files',
                filebrowserImageBrowseUrl: 'kcfinder/browse.php?type=images',
                filebrowserFlashBrowseUrl: 'kcfinder/browse.php?type=flash',
                filebrowserUploadUrl: 'kcfinder/upload.php?type=files',
                filebrowserImageUploadUrl: 'kcfinder/upload.php?type=images',
                filebrowserFlashUploadUrl: 'kcfinder/upload.php?type=flash'
            }
    );
        </script>    
             </div>
      
        
    </section>
</aside>