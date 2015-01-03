<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Announcement
    <small>Rekam Kegiatan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Announcement</li>
        <li class="active">Rekam Kegiatan</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <script src="standar_editor/ckeditor.js"></script>
    <form name="kegiatan" method="post" action="?module=kegiatan" enctype="multipart/form-data">  
    <div class="bs-example bs-example-tabs" role="tabpanel">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Bahasa Indonesia</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">English Version</a></li>
    </ul>        
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
          <table class="table">
              <tr>
                  <td width="20%">Judul Kegiatan</td>
                  <td width="2%"></td>
                  <td width="78%"><input type="text" name="judul_id" class="form-control"></td>
              </tr>
              <tr>
                  <td>Isi Kegiatan</td>
                  <td></td>
                  <td><textarea id="indonesia" name="isi_id" cols="80" rows="10"></textarea></td>
              </tr>
          </table>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
          <table class="table">
              <tr>
                  <td width="20%">Heading News</td>
                  <td width="2%"></td>
                  <td width="78%"><input type="text" name="judul_en" class="form-control"></td>
              </tr>
              <tr>
                  <td>Content</td>
                  <td></td>
                  <td><textarea id="inggris" name="isi_en" cols="80" rows="10"></textarea></td>
              </tr>
          </table>
      </div>
          <table class="table">
                <tr>
                  <td width="20%"></td>
                  <td width="2%"></td>
                  <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Kegiatan akan disimpan?');"></td>
                </tr>        
          </table>
    </div>
    </div>
    </form>
    <!-- =========================================proses================================================ -->
    <?php
    if (isset($_POST['simpan'])){
        $judul_id = $_POST['judul_id'];
        $judul_en = $_POST['judul_en']!=''?$_POST['judul_en']:$_POST['judul_id'];
        $isi_id = $_POST['isi_id'];
        $isi_en = $_POST['isi_en']!=''?$_POST['isi_en']:$_POST['isi_id'];    
        $uploader = $_SESSION['id'];
        $tgl_upload = gmdate('Y-m-d');
        $slug = slugify($judul_id);
        
        $query = "INSERT INTO kegiatan (judul_id,judul_en,isi_id,isi_en,uploader,tgl_upload,slug)"
                . " VALUES ('$judul_id','$judul_en','$isi_id','$isi_en','$uploader','$tgl_upload','$slug')";
        $sql = mysql_query($query);
        
        if ($sql){
            echo "<script>alert ('Kegiatan berhasil diupload, terima kasih')</script>";
            echo '<script type="text/javascript">window.location="?module=kegiatan"</script>'; 
        }
    }
    ?>
    <br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="40%">Judul Kegiatan</th>
                <th width="10%">Uploader</th>
            </tr>
        </thead>
        <tbody>
             <?php
           
            //Data mentah yang ditampilkan ke tabel                                
            $sql = mysql_query("SELECT * from kegiatan ORDER BY id DESC");                               
            $no = 1;
            while ($r = mysql_fetch_array($sql)) {
            $id = $r['id'];
            ?>
            
            <tr align='center'>
            <td class='odd gradeX'><?php echo $no ?></td>
            <td class='odd gradeX' align='left'><a data-toggle='collapse' data-parent='#accordion' href='<?php echo "#".$r['id'];?>'><?php echo $r['judul_id'];?></a>
            <div id='<?php echo $r["id"];?>' class='panel-collapse collapse'>
                    <div class='box-body'><?php echo $r["isi_id"];?></div>
            </div><br> Tanggal Upload <?php echo $r["tgl_upload"];?>   
            </td>
            <td class='odd gradeX'>
                <?php if($r['publish']==0){
                echo "<span> <button class='btn btn-outline btn-danger btn-xs' disabled='disabled'> <i class='fa fa-warning'></i></button></span>";
                echo "<span> <a href=?module=publish&pages=kegiatan&id=$id title='publish' class='btn btn-outline btn-warning btn-xs '> <i class='fa fa-upload'></i><span><strong><small></small></strong></span></a> </span>";
                echo "<span> <a href=?module=kegiatan_edit&id=$id title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i><span><strong><small></small></strong></span></a> </span>";
                echo "<span> <a href=?module=delete&pages=kegiatan&id=$id title='delete' class='btn btn-outline btn-danger btn-xs'.";?>
                    onClick="return confirm('Kegiatan akan dihapus, Anda yakin?');"
                    <?php echo "."."> <i class='fa fa-trash-o'></i><span><strong><small></small></strong></span></a> </span>";
                }
                
                else{
                    echo "<span><span> <button class='btn btn-outline btn-success btn-xs' disabled='disabled'> <i class='fa fa-check-square-o'></i></button> </span>";
                    echo "<span> <a href=?module=unpublish&pages=kegiatan&id=$id title='unpublished' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-download'></i><span><strong><small></small></strong></span></a> </span>";
                    echo "<span> <a href=?module=delete&pages=kegiatan&id=$id title='delete' class='btn btn-outline btn-danger btn-xs'.";?>
                    onClick="return confirm('Kegiatan akan dihapus, Anda yakin?');"
                    <?php echo "."."> <i class='fa fa-trash-o'></i><span><strong><small></small></strong></span></a> </span>";
                }
                ?>
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
        CKEDITOR.replace( 'isi_id',
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
        <script type="text/javascript">
        //CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'isi_en',
        {
        filebrowserBrowseUrl: 'kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: 'kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: 'kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: 'kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: 'kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: 'kcfinder/upload.php?type=flash'
        }
        );
        </script>         </div>
    </section>
</aside>