<?php
$pages = antiinjection($_GET['pages']);
$id = antiinjection($_GET['id']);

switch($pages)
    {  
        case 'berita':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Berita Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;

        case 'pengumuman':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Pengumuman Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
        case 'kegiatan':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Kegiatan Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
            //kiriman
     case 'kiriman':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
            
            //administrasi
      case 'administrasi':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
                  //WBC
      case 'wbc':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
            //user
      case 'user':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            if ($sql){
                echo "<script>alert('User Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;

      case 'slide':
            $cek = mysql_query("SELECT * FROM $pages WHERE id='$id'");
            $data = mysql_fetch_array($cek);
            $namafile = $data['namafile'];
            unlink("../upload/slide/".$namafile);
            
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Gambar Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
      case 'kurs':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;  
                  
      case 'download':
            $cek = mysql_query("SELECT * FROM $pages WHERE id='$id'");
            $hc = mysql_fetch_array($cek);
            $namafile = $hc['file'];    
            unlink("../upload/download/".$namafile);
            
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('File Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;  
            
      case 'faq':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('FAQ Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;  
            
      case 'kantor_kppbc':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('FAQ Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break; 
            
      case 'kantor_kanwil':
            $sql = mysql_query("DELETE FROM $pages WHERE id='$id'");
            $query = "SELECT * FROM $pages ORDER BY id";
            $hasil = mysql_query($query);
            $no = 1;
            
            while ($data  = mysql_fetch_array($hasil))
            {
               $id = $data['id'];

               $query2 = "UPDATE $pages SET id = $no WHERE id = $id";
               mysql_query($query2);

               $no++;
            }

            $query = "ALTER TABLE $pages  AUTO_INCREMENT = $no";
            $final = mysql_query($query); 

            if ($final){
                echo "<script>alert('FAQ Berhasil di delete')</script>";
                echo "<script>history.go(-1)</script>"; 
            }
            break;
            
        
            
            }

?>

