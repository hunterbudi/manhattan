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
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                <h3>Personal info</h3>
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
                    echo "<script type='text/javascript'>window.location='?module=user'</script>";
                } else {
                    $id = $_GET['id']; // menangkap id
                    $sql = "SELECT * FROM user WHERE id=$id"; // memanggil data dengan id yang ditangkap tadi
                    $query = mysql_query($sql);
                    $data = mysql_fetch_array($query);
                    ?>
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="useredit" action="?module=user_edit">
                        <input name="id" type="hidden" class="form-control" value="<?php echo $data['id'] ?>" >
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nama:</label>
                            <div class="col-lg-4">
                                <input class="form-control" name="nama" value="<?php echo $data['nama'] ?>" type="text">
                            </div>
                            <label class="col-lg-2 control-label">NIP:</label>
                            <div class="col-lg-4">
                                <input class="form-control" name="nip" value="<?php echo $data['nip'] ?>" type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label">User Group:</label>
                            <div class="col-lg-4">
                                <input disabled class="form-control" name="usergroup" value="<?php echo $data['usergroup'] ?>" type="text">
                            </div>
                            <label class="col-md-2 control-label">Username:</label>
                            <div class="col-md-4">
                                <input disabled class="form-control" value="<?php echo $data['username'] ?>" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input class="btn btn-primary" type="submit" name="editsubmit" value="Edit" onClick="return confirm('User akan diperbaharui?');" />
                                <span></span>
                                <a href="?module=user"><button type="button" class="btn btn-default">Cancel</button></a>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>

    </section>
