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
                    <h3 class="box-title">Edit</h3>
                    <div class="modal-footer clearfix">
                         <a href="?module=kantor" class="btn btn-primary pull-right" ><i class="fa fa-building-o"></i> List KPPBC</a>
                    </div>
                </div><!-- /.box-header -->
                <script src="ckeditor/ckeditor.js"></script>
                <?php
        if (isset($_POST['simpan'])) { // jika tombol editsubmit ditekan
            $id = $_POST['id']; // variable nama = apa yang diinput pada name "nama" 
            $nama = $_POST['nama'];
            

            $edit = mysql_query("UPDATE kantor_kanwil SET
							nama='$nama'
					WHERE id='$id' ");
            echo "<script>alert ('Kantor Wilayah Bea Cukai diperbaharui, terima kasih')</script>";
            echo "<script type='text/javascript'>window.location='?module=kanwil'</script>";
        } else {
            $id = $_GET['id']; // menangkap id
            
            $sql = "SELECT * FROM kantor_kanwil WHERE id='$id' "; // memanggil data dengan id yang ditangkap tadi
            $query = mysql_query($sql);
            $data = mysql_fetch_array($query);
            ?>
                <form name="impor" method="post" action="?module=kanwil_edit" enctype="multipart/form-data">  
                    <input type="hidden" value="<?php echo $data['id'] ?>" name="id" >
                    <div class="box-body">  
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                                <table class="table">
                                    <tr>
                                        <td width="20%">Nama Kantor</td>
                                        <td width="2%"></td>
                                        <td width="78%" colspan="2"><input type="text" value="<?php echo $data['nama'] ?>" name="nama" class="form-control"></td>
                                    </tr>
                                    

                                </table>
                            </div>

                            <table class="table">
                                <tr>
                                    <td width="20%"></td>
                                    <td width="2%"></td>
                                    <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Perubahan Kantor WIlayah akan disimpan?');"></td>
                                </tr>        
                            </table>
                        </div>
                    </div>
                </form>
        <?php } ?>
            </div>
        

        <!-- =========================================proses================================================ -->
        
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