<?php
$pages = antiinjection($_GET['pages']);
$id = antiinjection($_GET['id']);

switch($pages)
    {  
        case 'pengumuman':
            $sql = mysql_query("UPDATE $pages SET alert='0' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Pengumuman berhasil dikeluarkan dari halaman utama')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
        case 'slide':
            $sql = mysql_query("UPDATE $pages SET publish='0' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Gambar telah dinonaktifkan dari tampilan slider')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;    }
?>

