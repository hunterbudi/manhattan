<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Administrasi
    <small>Rekam Fta</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Administrasi</li>
        <li class="active">Rekam Fta</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <script src="ckeditor/ckeditor.js"></script>
    <form name="fta" method="post" action="?module=fta" enctype="multipart/form-data">  
    <div class="bs-example bs-example-tabs" role="tabpanel">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Bahasa Indonesia</a></li>
      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">English Version</a></li>
    </ul>        
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
          <table class="table">
              <tr>
                  <td width="20%">Judul</td>
                  <td width="2%"></td>
                  <td width="78%"><input type="text" name="judul_id" class="form-control"></td>
              </tr>
              <tr>
                  <td>Isi</td>
                  <td></td>
                  <td><textarea id="indonesia" name="isi_id" cols="80" rows="10"></textarea></td>
              </tr>
          </table>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
          <table class="table">
              <tr>
                  <td width="20%">Title</td>
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
                  <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('FAQ Fta akan disimpan?');"></td>
                </tr>        
          </table>
    </div>
    </div>
    </form>
    <!-- =========================================proses================================================ -->
    <?php
    if (isset($_POST['simpan'])){
        $judul_id = $_POST['judul_id'];
        $judul_en = $_POST['judul_en']?$_POST['judul_en']:$_POST['judul_id'];
        $isi_id = $_POST['isi_id'];
        $isi_en = $_POST['isi_en']?$_POST['isi_en']:$_POST['isi_id'];
        
        function newID() {
                    $now = date('Y');
                    $query = "SELECT max(urut) as maxID FROM administrasi where jenis='fta'";
                    $hasil = mysql_query($query);
                    $data = mysql_fetch_array($hasil);
                    $idMax = $data['maxID'];

                    $querybaru = "SELECT * FROM administrasi where urut='$idMax' and  jenis='fta'";
                    $hasilbaru = mysql_query($querybaru);
                    $databaru = mysql_fetch_array($hasilbaru);
                    $nobaru = $databaru['urut'];

                    $noUrut = (int) substr($nobaru, 0, 4);
                    $noUrut++;
                    $id = sprintf("%04s", $noUrut);
                    return $id;
                }

                $nourutbaru = newID();
        
        $query = "INSERT INTO administrasi (judul_id,judul_en,isi_id,isi_en,jenis,urut)"
                . " VALUES ('$judul_id','$judul_en','$isi_id','$isi_en','fta','$nourutbaru')";
        $sql = mysql_query($query);
        
        if ($sql){
            echo "<script>alert ('Administrasi Fta berhasil disimpan, terima kasih')</script>";
            echo '<script type="text/javascript">window.location="?module=fta"</script>'; 
        }
    }
    ?>
    <br><br>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="40%">Fta</th>
                <th width="10%">No Urut</th>
                <th width="10%">#action</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            //Data mentah yang ditampilkan ke tabel                                
            $sql = mysql_query("SELECT * from administrasi where jenis='fta' ORDER BY id DESC");                               
            $no = 1;
            while ($r = mysql_fetch_array($sql)) {
            $id = $r['id'];
           
            ?>
            
            <tr align='center'>
            <td class='odd gradeX'><?php echo  $no ?></td>
            <td class='odd gradeX' align='left'>
                <a data-toggle='collapse' data-parent='#accordion' href='#<?php echo $r['id'] ?>'><?php echo $r['judul_id'] ?></a>
            <div id='<?php echo  $r['id'] ?>' class='panel-collapse collapse'>
                    <div class='box-body'><?php echo $r['isi_id'] ?></div>
            </div>
            </td>
            <td class='odd gradeX'><?php echo $r['urut'] ?></td>
            <td class='odd gradeX'>
            <span> <a href=?module=fta_edit&id=<?php echo  $id ?> title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i></a></span>
            <span> <a href=?module=delete&pages=administrasi&id=<?php echo $id ?> title='delete' onClick="return confirm('FAQ FTA akan dihapus, Anda yakin?');"  class='btn btn-outline btn-danger btn-xs'> <i class='fa fa-trash-o'></i></a> </span>
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