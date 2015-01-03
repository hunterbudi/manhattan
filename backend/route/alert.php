<?php
$pages = antiinjection($_GET['pages']);
$id = antiinjection($_GET['id']);

switch($pages)
    {  
        case 'pengumuman':
            $sql = mysql_query("UPDATE $pages SET alert='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Pengumuman berhasil dimasukkan pada halaman utama')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
        case 'slide':
            $sql = mysql_query("UPDATE $pages SET publish='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Gambar telah diaktifkan pada tampilan slider')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;    }
?>

