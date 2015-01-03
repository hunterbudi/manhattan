<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Slider
    <small>Slider Management</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Editor Tampilan Slide</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="slider" action="?module=slider">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Masukkan Gambar</label>
                            <div class="col-lg-4">
                                <input id="slider"  name="namafile" type="file" multiple="true" >
                            </div>                            
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Gambar akan diupload?');">
                    </div>
                </form>
            </div><!-- /.box -->
            <!-- =========================================proses================================================ -->
            <?php
            if (isset($_POST['simpan'])) {
                $namafile = $_FILES['namafile']['name'];
                $uploaddir = '../upload/slide/';

                $query = "INSERT INTO slide (namafile) VALUES ('$namafile')";
                $sql = mysql_query($query);

                if ($sql) {
                    $uploadfile = $uploaddir . $namafile;
                    $pindahfoto = move_uploaded_file($_FILES['namafile']['tmp_name'], $uploadfile);
                    
                    if ( $pindahfoto) {
                        echo "<script>alert ('Gambar Berhasil diupload, terima kasih')</script>";
                        echo '<script type="text/javascript">window.location="?module=slider"</script>';
                    }
                }
            }
            ?>
            <br><br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Gambar</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            //Data mentah yang ditampilkan ke tabel                                
            $sql = mysql_query("SELECT * from slide ORDER BY id DESC");                           
            $no = 1;
            while ($r = mysql_fetch_array($sql)) {
            $id = $r['id'];
            ?>
            <tr align='center'>
                <td class='odd gradeX'><img src="../upload/slide/<?php echo $r['namafile'];  ?>" width="450px auto" height="250px auto"></td>
                <td class='odd gradeX'>
                <?php
                if($r['publish']=='0'){
                    echo "<span> <a href=?module=alert&pages=slide&id=$id title='Masukkan ke Slider' class='btn btn-outline btn-danger btn-xs'.";?>
                    onClick="return confirm('Gambar akan ditampilkan pada slider, Anda yakin?');"
                    <?php echo "."."> <i class='fa fa-times-circle'></i><span><strong><small></small></strong></span></a> </span>";                    
                }
                else {
                    echo "<span> <a href=?module=unalert&pages=slide&id=$id title='Keluarkan dari Slider' class='btn btn-outline btn-warning btn-xs'.";?>
                    onClick="return confirm('Gambar akan dinonaktifkan dari tampilan slider, Anda yakin?');"
                    <?php echo "."."> <i class='fa fa-star'></i><span><strong><small></small></strong></span></a> </span>";
                }
                ?>
                <a href=?module=delete&pages=slide&id=<?php echo $id ?> title='delete' class='btn btn-outline btn-danger btn-xs ' onClick="return confirm('Gambar pada slider akan dihapus, Anda yakin?');" > <i class='fa fa-trash-o'></i><span><strong><small></small></strong></span></a>
                </td>
                </tr>
            <?php
            $no++;
            }
            ?>
            </tbody>

        </table>
    </section>
</aside>