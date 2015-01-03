<?php
session_destroy();
// Tampilkan bye bye
echo "<script>alert('Anda Telah Berhasil Logout, Sampai Jumpa Lagi')</script>";
// arahkan kepada file index
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>