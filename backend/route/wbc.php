
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            WBC
            <small>Upload Warta Bea Cukai</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">WBC</li>
            <li class="active">Upload Warta Bea Cukai</li>
        </ol>
    </section>
    <!-- Main content -->

    <section class="content">

        <div class="col-md-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">WBC</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="user" action="?module=wbc">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Edisi WBC</label>
                            <div class="col-lg-4">
                                <input class="form-control"  name="edisi" value="" type="text" required autofocus>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">FILE PDF</label>
                            <div class="col-lg-4">
                                <input id="file-pdf"  name="namafile" type="file" multiple="true" >
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">FOTO</label>
                            <div class="col-lg-4">
                                <input id="file-1"  name="foto" type="file" multiple="true" >
                            </div>                            
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('WBC akan diupload?');">
                    </div>
                </form>
            </div><!-- /.box -->
            <!-- =========================================proses================================================ -->
            <?php
            if (isset($_POST['simpan'])) {
                $edisi = $_POST['edisi'];
                $tgl_upload = gmdate('Y-m-d');
                //filepdf
                $namafile = $_FILES['namafile']['name'];
                $uploaddirpdf = '../upload/wbc/file/';
                $fileNamepdf = 'WBC'.$edisi . $namafile;
                //foto
                $foto = $_FILES['foto']['name'];
                $uploaddirfoto = '../upload/wbc/foto/';
                $fileNamefoto = 'WBC'.$edisi . $foto;

                $query = "INSERT INTO wbc (edisi,namafile,foto)"
                        . " VALUES ('$edisi','$fileNamepdf','$fileNamefoto')";
                $sql = mysql_query($query);

                if ($sql) {
                    $uploadfilefoto = $uploaddirfoto . $fileNamefoto;
                    $pindahfoto = move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfilefoto);

                    $uploadfile = $uploaddirpdf . $fileNamepdf;
                    $pindah = move_uploaded_file($_FILES['namafile']['tmp_name'], $uploadfile);

                    if ($pindah && $pindahfoto) {
                        echo "<script>alert ('WBC berhasil diupload, terima kasih')</script>";
                        echo '<script type="text/javascript">window.location="?module=wbc"</script>';
                    }
                }
            }
            ?>
            <br><br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Edisi</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Data mentah yang ditampilkan ke tabel                                
                    $sql = mysql_query("SELECT * from wbc ORDER BY id DESC");
////                                              
                    $no = 1;
                    while ($r = mysql_fetch_array($sql)) {
                        $id = $r['id'];
                        ?>

                        <tr align='center'>
                            <td class='odd gradeX'><?php echo $no ?></td>
                            <td class='odd gradeX'><?php echo $r['edisi'] ?></td>
                            <td class='odd gradeX'>
                                
                                    <img  class="img-thumbnail" width="100" src="../upload/wbc/foto/<?php echo $r['foto'] ?>" />
                                
                            </td>
                            <td class='odd gradeX'>
                                
                                <a href=?module=delete&pages=wbc&id=<?php echo $id ?> title='delete' class='btn btn-outline btn-danger btn-xs ' onClick="return confirm('WBC edisi <?php echo $r['edisi'] ?> akan dihapus, Anda yakin?');" > <i class='fa fa-trash-o'></i><span><strong><small></small></strong></span></a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>


                </tbody>

            </table>  
        </div>

    </section>
</aside>
