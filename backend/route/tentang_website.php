<?php
$query = "SELECT * FROM website WHERE kode LIKE 'tentang_website'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$isi_id = $data['isi_id'];
$isi_en = $data['isi_en'];
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Tentang Website
    <small>Tentang Website</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tentang Website</li>
        <li class="active">Tentang Website</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <script src="standar_editor/ckeditor.js"></script>
    <form name="tentang_website" method="post" action="?module=tentang_website">  
    <div class="bs-example bs-example-tabs" role="tabpanel">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Bahasa Indonesia</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">English Version</a></li>
    </ul>        
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
          <table class="table">
              <tr>
                  <td width="10%">Deskripsi</td>
                  <td width="2%"></td>
                  <td width="78%"><textarea id="indonesia" name="isi_id" cols="80" rows="10"><?php echo $isi_id; ?></textarea></td>
              </tr>
          </table>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
          <table class="table">
              <tr>
                  <td>Description</td>
                  <td></td>
                  <td><textarea id="inggris" name="isi_en" cols="80" rows="10"><?php echo $isi_en; ?></textarea></td>
              </tr>
          </table>
      </div>
         <table class="table">
              <tr>
                  <td width="10%"></td>
                  <td width="2%"></td>
                  <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('Konten akan diedit?');"></td>
              </tr>        
          </table>
    </div>
    </div>
    </form>
    <!-- =========================================proses================================================ -->
    <?php
    if (isset($_POST['simpan'])){
        $isi_id = $_POST['isi_id'];
        $isi_en = $_POST['isi_en']?$_POST['isi_en']:$_POST['isi_id'];
        
        $query = "UPDATE website SET isi_id='$isi_id',isi_en='$isi_en' WHERE kode LIKE 'tentang_website'";
        $sql = mysql_query($query);
        
        if ($sql){        
                echo "<script>alert ('Konten berhasil diupdate, terima kasih')</script>";
		echo '<script type="text/javascript">window.location="?module=tentang_website"</script>'; 
            }
        }
    ?>
    <br>
    <br>
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
        </script>         
    
        <hr>
        <div class="row">
            <div class="col-md-3"><button class="btn btn-success col-md-12" disabled="disabled">Preview Indonesian Version</button></div>
            <div class="col-md-9"></div>
        </div>
        <br>
        <br>
        <div class="row"><?php echo $isi_id; ?></div>
        
        <hr>
        <div class="row">
            <div class="col-md-3"><button class="btn btn-primary col-md-12" disabled="disabled">Preview English Version</button></div>
            <div class="col-md-9"></div>
        </div>
        <br>
        <br>
        <div class="row"><?php echo $isi_en; ?></div>
        </div>  
    </div>
    </section>
</aside>