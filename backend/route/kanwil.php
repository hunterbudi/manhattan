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
            KANTOR WILAYAH BEA CUKAI
            <small>Rekam Kantor Kanwil</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Kantor Wilayah Bea Cukai</li>
            <li class="active">Rekam Kantor Kanwil</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Rekam</h3>
                    <div class="modal-footer clearfix">
                        <a href="?module=kantor" class="btn btn-primary pull-right" ><i class="fa fa-building-o"></i> List KPPBC</a>
                    </div>
                    
                </div><!-- /.box-header -->
                <script src="ckeditor/ckeditor.js"></script>
                <form name="impor" method="post" action="?module=kanwil" enctype="multipart/form-data">  
                    <div class="box-body">  
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                                <table class="table">
                                    <tr>
                                        <td width="20%">Nama Kantor</td>
                                        <td width="2%"></td>
                                        <td width="78%" colspan="2"><input type="text" name="nama" class="form-control"></td>
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
            


                $query = "INSERT INTO kantor_kanwil (nama)"
                        . " VALUES ('$nama')";
                $sql = mysql_query($query);

                if ($sql) {
                    echo "<script>alert ('Kantor Wilayah Bea Cukai berhasil disimpan, terima kasih')</script>";
                    echo '<script type="text/javascript">window.location="?module=kanwil"</script>';
                }
            }
        ?>
        <br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="40%">Nama Kanwil</th>
                    
                    <th width="10%">#action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Data mentah yang ditampilkan ke tabel                                
                $sql = mysql_query("SELECT * from kantor_kanwil  ORDER BY id DESC");
                $no = 1;
                while ($r = mysql_fetch_array($sql)) {
                    $id = $r['id'];
                    ?>

                    <tr align='center'>
                        <td class='odd gradeX'><?php echo $no ?></td>
                        
                        <td class='odd gradeX'><?php echo $r['nama'] ?></td>
                        
                        <td class='odd gradeX'>
                            <span> <a href=?module=kanwil_edit&id=<?php echo $id ?> title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i></a></span>
                            <span> <a href=?module=delete&pages=kantor_kanwil&id=<?php echo $id ?> title='delete' onClick="return confirm('Kantor Bea Cukai akan dihapus, Anda yakin?');"  class='btn btn-outline btn-danger btn-xs'> <i class='fa fa-trash-o'></i></a> </span>
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