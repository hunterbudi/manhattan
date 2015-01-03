<?php
$pages = antiinjection($_GET['pages']);
$id = antiinjection($_GET['id']);

switch($pages)
    {  
        case 'berita':
            $sql = mysql_query("UPDATE $pages SET publish='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Berita Berhasil diunggah')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;

        case 'pengumuman':
            $sql = mysql_query("UPDATE $pages SET publish='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Pengumuman Berhasil diunggah')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
        case 'kegiatan':
            $sql = mysql_query("UPDATE $pages SET publish='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Kegiatan Berhasil diunggah')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
        case 'kurs':
            $sql = mysql_query("UPDATE $pages SET publish='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('Kurs Berhasil diunggah')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;    
            
        case 'download':
            $sql = mysql_query("UPDATE $pages SET publish='1' WHERE id='$id'");
            if ($sql){
                echo "<script>alert('File Berhasil diunggah')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;              
            }
?>

