
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    Informasi
    <small>FAQ</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Informasi</li>
        <li class="active">FAQ</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <script src="ckeditor/ckeditor.js"></script>
        <?php
        if (isset($_POST['simpan'])) { // jika tombol editsubmit ditekan
            $id = $_POST['id']; // variable nama = apa yang diinput pada name "nama" 
            $pertanyaan_id = $_POST['pertanyaan_id'];
            $jawaban_id = $_POST['jawaban_id'];
            $pertanyaan_en = $_POST['pertanyaan_en'];
            $jawaban_en = $_POST['jawaban_en'];
            $urut = $_POST['urut'];

            $edit = mysql_query("UPDATE faq SET
							pertanyaan_id='$pertanyaan_id',
							pertanyaan_en='$pertanyaan_en',
                                                        jawaban_id='$jawaban_id',
                                                        jawaban_en='$jawaban_en',
                                                        urut='$urut'
					WHERE id='$id'");
            if ($edit){
            echo "<script>alert ('FAQ berhasil diperbaharui, terima kasih')</script>";
            echo "<script type='text/javascript'>window.location='?module=faq'</script>";
            }
            else {
                echo "error".mysql_error();
            }
        } else {
            $id = $_GET['id']; // menangkap id
            $sql = "SELECT * FROM faq WHERE id=$id"; // memanggil data dengan id yang ditangkap tadi
            $query = mysql_query($sql);
            $data = mysql_fetch_array($query);
            ?>
            <form name="faq_edit" method="post" action="?module=faq_edit">  
                <input name="id" type="hidden" class="form-control" value="<?php echo $data['id'] ?>" >
                <div class="bs-example bs-example-tabs" role="tabpanel">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Bahasa Indonesia</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">English Version</a></li>
                    </ul>        
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                            <table class="table">
                                <tr>
                                    <td width="20%">Pertanyaan</td>
                                    <td width="2%"></td>
                                    <td width="78%"><input type="text" name="pertanyaan_id" value="<?php echo $data['pertanyaan_id'] ?>" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Jawaban</td>
                                    <td></td>
                                    <td><textarea id="indonesia" name="jawaban_id" cols="80" rows="10"><?php echo $data['jawaban_id'] ?></textarea></td>
                                </tr>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
                            <table class="table">
                                <tr>
                                    <td width="20%">Question</td>
                                    <td width="2%"></td>
                                    <td width="78%"><input type="text" name="pertanyaan_en" value="<?php echo $data['pertanyaan_en'] ?>" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Answer</td>
                                    <td></td>
                                    <td><textarea id="inggris" name="jawaban_en" cols="80" rows="10"><?php echo $data['jawaban_en'] ?></textarea></td>
                                </tr>
                            </table>
                        </div>
                        <table class="table">
                            <tr>
                                <td width="20%">No Urut</td>
                                <td width="2%"></td>
                                <td width="78%" ><div class="col-md-2"><input type="text" name="urut" value="<?php echo $data['urut'] ?>" class="form-control "></div></td>
                            </tr>
                            <tr>
                                <td width="20%"></td>
                                <td width="2%"></td>
                                <td width="78%"><input type="submit" class="btn btn-primary" value="SIMPAN" name="simpan" onClick="return confirm('FAQ akan disimpan?');"></td>
                            </tr>        
                        </table>
                    </div>
                </div>
            </form>
        <?php } ?>
        <!-- =========================================proses================================================ -->

        <br><br>
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="40%">Pertanyaan</th>
                <th width="10%">No Urut</th>
                <th width="10%">#action</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            //Data mentah yang ditampilkan ke tabel                                
            $sql = mysql_query("SELECT * from faq ORDER BY id DESC");                               
            $no = 1;
            while ($r = mysql_fetch_array($sql)) {
            $id = $r['id'];
           ?>
            
            <tr align='center'>
            <td class='odd gradeX'><?php echo  $no ?></td>
            <td class='odd gradeX' align='left'>
                <a data-toggle='collapse' data-parent='#accordion' href='#<?php echo $r['id'] ?>'><?php echo $r['pertanyaan_id'] ?></a>
            <div id='<?php echo  $r['id'] ?>' class='panel-collapse collapse'>
                    <div class='box-body'><?php echo $r['jawaban_id'] ?></div>
            </div>
            </td>
            <td class='odd gradeX'><?php echo $r['urut'] ?></td>
            <td class='odd gradeX'>
            <span> <a href=?module=faq_edit&id=<?php echo  $id ?> title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i></a></span>
            <span> <a href=?module=delete&pages=faq&id=<?php echo $id ?> title='delete' onClick="return confirm('FAQ akan dihapus, Anda yakin?');"  class='btn btn-outline btn-danger btn-xs'> <i class='fa fa-trash-o'></i></a> </span>
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
                                CKEDITOR.replace('jawaban_id',
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
            CKEDITOR.replace('jawaban_en',
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