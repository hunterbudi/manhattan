<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>Ganti Password User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
            <li class="active">Ganti Password User</li>
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
                            if (isset($_POST['passsubmit'])) { // jika tombol editsubmit ditekan
                                //fungsi escape string
                                
                                $passwordlama = ($_POST['oldPass']);
                                $passwordbaru1 = ($_POST['newPass1']);
                                $passwordbaru2 = ($_POST['newPass2']);
                                $username=$_POST['username'];
                                $nip=$_POST['nip'];
                                $id=$_POST['id'];
                                
                                $query = "select * from user where id='$id' ";
                                $hasil = mysql_query($query);
                                $data = mysql_fetch_array($hasil);
                                $tglkini = date('Y-m-d');

                                //cek kesesuain password
                                $pengacak = "AJWKXLAJSCLWLW";
                                if (md5($pengacak . md5($passwordlama) . $pengacak) == $data['password']) {
                                    $cek=md5($pengacak . md5($passwordlama) . $pengacak);
                                   
                                            
                                    // jika password lama benar, maka cek kesesuaian password baru 1 dan 2
                                    if ($passwordbaru1 == $passwordbaru2) {
                                        // jika password baru 1 dan 2 sama, maka proses update password dilakukan
                                        // enkripsi password baru sebelum disimpan ke db
                                        $passwordbaruenkrip = md5($pengacak . md5($passwordbaru1) . $pengacak);
                                        $query = "UPDATE user SET password = '$passwordbaruenkrip' WHERE id='$id' ";
                                        $hasil = mysql_query($query);
                                        //jika berhasil tampilkan alert
                                        echo "<script>alert ('Ubah Password berhasil, Silahkan login kembali, terima kasih')</script>";
                                        echo "<script type='text/javascript'>window.location='?module=user_profil&id=$id'</script>";
                                    }
                                    else {
                                        //jika passwprd baru dan konfirmasi tidak sama
                                        echo "<script>alert ('Passwor Baru tidak sama dengan Confirmasi Password Baru, Ulangi lagi')</script>";
                                        echo "<script type='text/javascript'>window.location='?module=user_profil&id=$id'</script>";
                                    }
                                } else {
                                    //jika password baru tidak sama dengan password lama
                                        $pengacak = "AJWKXLAJSCLWLW";
                                        $passwordbaruenkrip = md5($pengacak . md5($passwordbaru1) . $pengacak);
                                        echo "password lama='$data[password]'";
                                        echo "<br/>";
                                        echo "password baru='$passwordbaruenkrip'";
                                        echo "<script>alert ('Passwor Lama yang Anda masukkan salah, Ulangi lagi')</script>";
                                        echo "<script type='text/javascript'>window.location='?module=user_profil&id=$id'</script>";
                                }
//                                ==============================================
                            }
                            else {
                                $id = $_GET['id']; // menangkap id
                                $sql = "SELECT * FROM user WHERE id=$id"; // memanggil data dengan id yang ditangkap tadi
                                $query = mysql_query($sql);
                                $data = mysql_fetch_array($query);
                                ?>
                                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  name="user_ganti_pass" action="?module=user_ganti_pass">
                                    <input class="form-control" name="nama" value="<?php echo $data['nama'] ?>" type="hidden">
                                    <input class="form-control" name="nip" value="<?php echo $data['nip'] ?>" type="hidden">
                                    <input class="form-control" name="id" value="<?php echo $data['id'] ?>" type="hidden">
                                    
                                    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                                        <h3>Personal info</h3>

                                        <input name="id" type="hidden" class="form-control" value="<?php echo $data['id'] ?>" >
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nama:</label>
                                            <div class="col-lg-4">
                                                <input disabled class="form-control" name="nama" value="<?php echo $data['nama'] ?>" type="text">
                                            </div>
                                            <label class="col-lg-2 control-label">NIP:</label>
                                            <div class="col-lg-4">
                                                <input disabled class="form-control" name="nip" value="<?php echo $data['nip'] ?>" type="text">
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

                                        <hr/>
                                        <h3>Ganti Password</h3>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Password Lama:</label>
                                            <div class="col-lg-4">
                                                <input  class="form-control" place-holder="masukkan password lama Anda" name="oldPass" value="" type="password" required autofocus>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Password Baru:</label>
                                            <div class="col-lg-4">
                                                <input  class="form-control" place-holder="masukkan password baru" name="newPass1" value="" type="password" required>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Confirmasi Password Baru:</label>
                                            <div class="col-lg-4">
                                                <input  class="form-control" place-holder="masukkan password baru" name="newPass2"  value="" type="password" required>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-8">
                                                <input class="btn btn-primary" type="submit" name="passsubmit" value="Ubah Password" onClick="return confirm('Password akan diperbaharui?');" />
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



