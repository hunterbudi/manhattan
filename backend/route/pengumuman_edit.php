<?php
$id = antiinjection($_GET['id']);

$sql = mysql_query("SELECT * FROM pengumuman WHERE id='$id'");
$data = mysql_fetch_array($sql);

?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Announcement
    <small>Edit Pengumuman</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Announcement</li>
        <li class="active">Pengumuman</li>
        <li class="active">Edit Pengumuman</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <script src="ckeditor/ckeditor.js"></script>
    <form name="pengumuman_edit" method="post" action="?module=pengumuman_edit" enctype="multipart/form-data">  
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
                  <td width="78%"><input type="text" name="judul_id" class="form-control" value="<?php echo $data['judul_id'];?>"><input type="hidden" name="id" class="form-control" value="<?php echo $data['id'];?>"></td>
              </tr>
              <tr>
                  <td>Isi Berita</td>
                  <td></td>
                  <td><textarea id="indonesia" name="isi_id" cols="80" rows="10"><?php echo $data['isi_id'];?></textarea></td>
              </tr>
          </table>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
          <table class="table">
              <tr>
                  <td width="20%">Heading News</td>
                  <td width="2%"></td>
                  <td width="78%"><input type="text" name="judul_en" class="form-control"  value="<?php echo $data['judul_en'];?>"></td>
              </tr>
              <tr>
                  <td>Content</td>
                  <td></td>
                  <td><textarea id="inggris" name="isi_en" cols="80" rows="10"><?php echo $data['isi_en'];?></textarea></td>
              </tr>
          </table>
      </div>
         <table class="table">               
                <tr>
                  <td width="20%"></td>
                  <td width="2%"></td>
                  <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Pengumuman akan disimpan?');"></td>
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
        $foto = $tgl_upload.$_FILES['gambar']['name'];   
        $fileSize = $_FILES['gambar']['size'];
        $uploaddir = 'upload/head_berita/';
        $id = $_POST['id'];
        $slug = slugify($judul_id);
       
        $query = "UPDATE pengumuman SET judul_id='$judul_id', judul_en='$judul_en', isi_id='$isi_id', isi_en='$isi_en', uploader='$uploader', tgl_upload='$tgl_upload', slug='$slug' WHERE id='$id'";
        
        $sql = mysql_query($query);
        if($sql){
            echo "<script>alert ('Pengumuman berhasil diedit, terima kasih')</script>";
            echo '<script type="text/javascript">window.location="?module=pengumuman"</script>'; 
        }
        }       
    ?>
    <br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="40%">Judul Berita</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            //Data mentah yang ditampilkan ke tabel                                
            $sql = mysql_query("SELECT * from pengumuman ORDER BY id DESC");                               
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
                echo "<span> <a href=?module=publish&pages=pengumuman&id=$id title='publish' class='btn btn-outline btn-warning btn-xs '> <i class='fa fa-upload'></i><span><strong><small></small></strong></span></a> </span>";
                echo "<span> <a href=?module=pengumuman_edit&id=$id title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i><span><strong><small></small></strong></span></a> </span>";
                }
                else{
                    echo "<span><span> <button class='btn btn-outline btn-success btn-xs' disabled='disabled'> <i class='fa fa-check-square-o'></i></button> </span>";
                    echo "<span> <a href=?module=unpublish&pages=pengumuman&id=$id title='unpublished' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-download'></i><span><strong><small></small></strong></span></a> </span>";
                    };
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