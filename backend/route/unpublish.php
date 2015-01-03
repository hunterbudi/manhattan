<?php
$pages = antiinjection($_GET['pages']);
$id = antiinjection($_GET['id']);

switch($pages)
    {  
        case 'berita':
            $sql = mysql_query("UPDATE $pages SET publish='0' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Berita Tidak Ditampilkan Pada Halaman Website')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;

        case 'pengumuman':
            $sql = mysql_query("UPDATE $pages SET publish='0' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Pengumuman Tidak Ditampilkan Pada Halaman Website')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
        case 'kegiatan':
            $sql = mysql_query("UPDATE $pages SET publish='0' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Kegiatan Tidak Ditampilkan Pada Halaman Website')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
        case 'download':
            $sql = mysql_query("UPDATE $pages SET publish='0' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('File Tidak Ditampilkan pada Website')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            }
?>

