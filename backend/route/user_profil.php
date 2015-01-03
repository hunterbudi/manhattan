<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>Edit User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
        </ol>
    </section>
    <section class="content">
        <!-- MAILBOX BEGIN -->
        <div class="mailbox row">
            <div class="col-xs-12">

                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <?php
                            if (isset($_POST['editsubmit'])) { // jika tombol editsubmit ditekan
                            $id = $_POST['id']; // variable nama = apa yang diinput pada name "nama" 
                            $nama = $_POST['nama'];
                            $nip = $_POST['nip'];

                            $edit = mysql_query("UPDATE user SET
                                                                nama='$nama',
                                                                nip='$nip'                                                        
                                                WHERE id='$id'");
                            echo "<script>alert ('User berhasil diperbaharui, terima kasih')</script>";
                            echo "<script type='text/javascript'>window.location='?module=user_profil&id=$id'</script>";
                            }
                            elseif (isset($_POST['uploadsubmit'])) { // jika tombol editsubmit ditekan
                            $id = $_POST['id']; // variable nama = apa yang diinput pada name "nama" 
                            $nama = $_POST['nama'];
                            $nip = $_POST['nip'];
                            
                            $tgl_upload = gmdate('Y-m-d');
                            $foto = $_FILES['avatar']['name'];  
                            $fileName = $tgl_upload."-".$foto;
                            $uploaddir = '../upload/user_photo/';
                            
                            $edit = mysql_query("UPDATE user SET
                                                                avatar='$fileName'                                               
                                                WHERE id='$id'");
                            
                            if ($edit){
                                $uploadfile = $uploaddir . $fileName;
                                $pindah = move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);

                                if($pindah){
                                    echo "<script>alert ('Photo User berhasil diperbaharui, terima kasih')</script>";
                                    echo "<script type='text/javascript'>window.location='?module=user_profil&id=$id'</script>";
                                }
                            }
                            else {
                                echo "Error!".mysql_error();
                                    echo "<script>alert ('Photo User Gagal diperbaharui, terima kasih')</script>";
                                    echo "<script type='text/javascript'>window.location='?module=user_profil&id=$id'</script>";
                            }
                            
                            }else {
                                $id = $_GET['id']; // menangkap id
                                $sql = "SELECT * FROM user WHERE id=$id"; // memanggil data dengan id yang ditangkap tadi
                                $query = mysql_query($sql);
                                $data = mysql_fetch_array($query);
                                ?>
                                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="user_profil" action="?module=user_profil">
                                    <input class="form-control" name="id" value="<?php echo $data['id'] ?>" type="hidden">
                                    <div class="col-md-4 col-sm-6 col-xs-12">

                                        <div class="text-center">
                                            <img src="../upload/user_photo/<?php echo $data['avatar'] ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                                            <h6>Upload Foto Lainnya....</h6>
                                            <input id="file-1" name="avatar" type="file" value="<?php echo $data['avatar'] ?>" class="text-center center-block well well-sm">

                                        </div>
                                        <div class="box-footer">
                                            <input class="btn btn-primary" type="submit" name="uploadsubmit" value="Upload" /> 
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                                        <div class="modal-footer clearfix">
                                            <a href="?module=user_ganti_pass&id=<?php echo $data['id'] ?>" class="btn btn-warning pull-right" ><i class="fa fa-key"></i> Ganti Password</a>
                                        </div>
                                        <fieldset> 
                                        <legend><h3>Personal info</h3></legend>
                                        
                                        </fieldset>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nama:</label>
                                            <div class="col-lg-6">
                                                <input class="form-control" name="nama" value="<?php echo $data['nama'] ?>" type="text">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                            <label class="col-lg-2 control-label">NIP:</label>
                                            <div class="col-lg-5">
                                                <input class="form-control" name="nip" value="<?php echo $data['nip'] ?>" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <label class="col-md-2 control-label">Username:</label>
                                            <div class="col-md-3">
                                                <input disabled class="form-control" value="<?php echo $data['username'] ?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">User Group:</label>
                                            <div class="col-lg-3">
                                                <input disabled class="form-control" name="usergroup" value="<?php echo $data['usergroup'] ?>" type="text">
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-8">
                                                <input class="btn btn-primary" type="submit" name="editsubmit" value="Edit" onClick="return confirm('User akan diperbaharui?');" />
                                                <span></span>
                                                <a href="?module=user"><button type="button" class="btn btn-default">Cancel</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



