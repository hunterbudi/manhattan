<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>Rekam User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
        </ol>
    </section>
    <!-- Main content -->

    <section class="content">
        <!-- MAILBOX BEGIN -->
        <div class="mailbox row">
            <div class="col-xs-12">

                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-8 col-sm-6">
                                    <?php
                                    if (isset($_POST['editsubmit'])) { // jika tombol editsubmit ditekan
                                        
                                        $nama = $_POST['nama'];
                                        $nip = $_POST['nip'];
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                        $usergroup = $_POST['usergroup'];
                                        
                                        $pengacak = "AJWKXLAJSCLWLW";
                                        $passEnkrip = md5($pengacak . md5($password) . $pengacak);
                                        $sql = "SELECT * FROM user where nip='$nip'  ";
                                        $query = mysql_query($sql);
                                        $cek = mysql_numrows($query);
                                        if ($cek > 0) {
                                            echo '<script type="text/javascript">
                                            alert("User sudah ada di database");</script>';
                                            echo '<script type="text/javascript">window.location="home.php?module=user"</script>';
                                        } else {
                                            $query = "INSERT INTO user (nama,nip,username,password,usergroup)"
                                                    . " VALUES ('$nama','$nip','$username','$passEnkrip','$usergroup')";
                                            $sql = mysql_query($query);
                                            echo "<script>alert ('User berhasil ditambahkan, terima kasih')</script>";
                                            echo "<script type='text/javascript'>window.location='?module=user'</script>";
                                        }
                                    } else {
                                        ?>
                                        <h3>Personal info</h3>
                                        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="user" action="?module=user">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nama Lengkap</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control"  name="nama" value="" type="text">
                                                </div>
                                                <label class="col-lg-2 control-label">NIP</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control" name="nip" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">

                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">User Group</label>
                                                <div class="col-lg-4">
                                                    <select class="form-control" name="usergroup" >
                                                        <option value="">::Pilih::</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="operator">Operator</option>
                                                    </select>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Username:</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="username" value="" type="text">
                                                </div>
                                                <label class="col-md-2 control-label">Password:</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="password" value="" type="password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-8">
                                                    <input class="btn btn-primary" type="submit" name="editsubmit" value="Simpan" onClick="return confirm('User akan disimpan?');" />
                                                    <span></span>
                                                    <input class="btn btn-default" value="Cancel" type="reset">
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
                                <div class="col-md-9 col-sm-8">
                                    <div class="box">

                                        <div class="box-header">
                                            <h3 class="box-title">User</h3>                                    
                                        </div><!-- /.box-header -->
                                        <div class="box-body table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama User</th>
                                                        <th>NIP</th>
                                                        <th>Username</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    //Data mentah yang ditampilkan ke tabel                                
                                                    $sql = mysql_query("SELECT * from user ORDER BY id DESC");
////                                              
                                                    $no = 1;
                                                    while ($r = mysql_fetch_array($sql)) {
                                                        $id = $r['id'];
                                                        ?>

                                                        <tr align='center'>
                                                                <td class='odd gradeX'><?php echo $no  ?></td>
                                                                <td class='odd gradeX'><?php echo $r['nama']  ?></td>
                                                                <td class='odd gradeX'><?php echo $r['nip']  ?></td>
                                                                <td class='odd gradeX'><?php echo $r['username']  ?></td>
                                                                <td class='odd gradeX'>
                                                                <a href=?module=user_edit&id=<?php echo $id ?> title='edit' class='btn btn-outline btn-primary btn-xs '> <i class='fa fa-edit'></i><span><strong><small></small></strong></span></a> | 
                                                                <a href=?module=delete&pages=user&id=<?php echo $id ?> title='delete' class='btn btn-outline btn-danger btn-xs ' onClick="return confirm('User <?php echo $r['nama']  ?> akan dihapus, Anda yakin?');" > <i class='fa fa-trash-o'></i><span><strong><small></small></strong></span></a>
                                                                </td>
                                                        </tr>
                                                        <?php
                                                        $no++;
                                                    }
                                                    ?>


                                                </tbody>

                                            </table>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col (RIGHT) -->
                            </div>



                        </div><!-- /.row -->
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
        </div>
        <!-- MAILBOX END -->
    </section><!-- /.content --> 
</aside>
