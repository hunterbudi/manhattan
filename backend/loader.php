<?php 
if (!isset($_REQUEST['module'])) {
$page = include 'route/dashboard.php';
} 
else {
    switch($_REQUEST['module'])
    {  
        case '':$page = include 'route/dashboard.php';break;//default
        case 'home':$page = include 'route/dashboard.php';break;      
        case 'slider':$page = include 'route/slider.php';break;
        case 'sekilas':$page = include 'route/sekilas.php';break;
        case 'sejarah':$page = include 'route/sejarah.php';break;
        case 'organisasi':$page = include 'route/organisasi.php';break;
        case 'tupoksi':$page = include 'route/tupoksi.php';break;
        case 'visi_misi':$page = include 'route/visi_misi.php';break;
        case 'logo':$page = include 'route/logo.php';break;
        case 'kode_etik':$page = include 'route/kode_etik.php';break;
        case 'logout':$page = include 'route/logout.php';break;    
         //user
        case 'user':$page = include 'route/user.php';break;
        case 'user_edit':$page = include 'route/user_edit.php';break;
        case 'user_profil':$page = include 'route/user_profil.php';break;
        case 'user_ganti_pass':$page = include 'route/user_ganti_pass.php';break;
        
        //announcement
        case 'berita':$page = include 'route/berita.php';break;
        case 'berita_edit':$page = include 'route/berita_edit.php';break;
        case 'kegiatan':$page = include 'route/kegiatan.php';break;
        case 'kegiatan_edit':$page = include 'route/kegiatan_edit.php';break;
        case 'pengumuman':$page = include 'route/pengumuman.php';break;
        case 'pengumuman_edit':$page = include 'route/pengumuman_edit.php';break;
        
        //tentang website
        case 'tentang_website':$page = include 'route/tentang_website.php';break;
        case 'peta_situs':$page = include 'route/peta_situs.php';break;
        case 'sanggahan':$page = include 'route/sanggahan.php';break;
        case 'syarat_penggunaan':$page = include 'route/syarat_penggunaan.php';break;
        case 'privasi':$page = include 'route/privasi.php';break;
        
        //Administrasi
        case 'impor':$page = include 'route/impor.php';break;
        case 'impor_edit':$page = include 'route/impor_edit.php';break;
        case 'ekspor':$page = include 'route/ekspor.php';break;
        case 'ekspor_edit':$page = include 'route/ekspor_edit.php';break;
        case 'fasilitas':$page = include 'route/fasilitas.php';break;
        case 'fasilitas_edit':$page = include 'route/fasilitas_edit.php';break;
        case 'cukai':$page = include 'route/cukai.php';break;
        case 'cukai_edit':$page = include 'route/cukai_edit.php';break;
        case 'aeo':$page = include 'route/aeo.php';break;
        case 'aeo_edit':$page = include 'route/aeo_edit.php';break;
        case 'fta':$page = include 'route/fta.php';break;
        case 'fta_edit':$page = include 'route/fta_edit.php';break;
        case 'lartas':$page = include 'route/lartas.php';break;
        case 'lartas_edit':$page = include 'route/lartas_edit.php';break;

        //kiriman pos, pelintas batas, barang penumpang
        case 'penumpang_sarkut':$page = include 'route/penumpang_sarkut.php';break;
        case 'penumpang_sarkut_edit':$page = include 'route/penumpang_sarkut_edit.php';break;
        case 'kiriman_pos':$page = include 'route/kiriman_pos.php';break;
        case 'kiriman_pos_edit':$page = include 'route/kiriman_pos_edit.php';break;
        case 'pelintas_batas':$page = include 'route/pelintas_batas.php';break;
        case 'pelintas_batas_edit':$page = include 'route/pelintas_batas_edit.php';break;
        
        //WBC
        case 'wbc':$page = include 'route/wbc.php';break;
        
        //KANTOR BC
        case 'kantor':$page = include 'route/kantor.php';break;
        case 'kantor_edit':$page = include 'route/kantor_edit.php';break;
        case 'kanwil':$page = include 'route/kanwil.php';break;
        case 'kanwil_edit':$page = include 'route/kanwil_edit.php';break;
        //delete, publish and unpublish all files
        case 'delete':$page = include 'route/delete.php';break;
        case 'publish':$page = include 'route/publish.php';break;
        case 'unpublish':$page = include 'route/unpublish.php';break;   
        case 'alert':$page = include 'route/alert.php';break;  
        case 'unalert':$page = include 'route/unalert.php';break;  
        
        //informasi
        case 'kurs':$page = include 'route/kurs.php';break;    
        case 'kurs_edit':$page = include 'route/kurs_edit.php';break;    
        case 'download':$page = include 'route/download.php';break;    
        case 'download_edit':$page = include 'route/download_edit.php';break;  
        case 'faq':$page = include 'route/faq.php';break;  
        case 'faq_edit':$page = include 'route/faq_edit.php';break;  
        
        //fasilitas
        case 'bebas_bm':$page = include 'route/bebas_bm.php';break;
        case 'bebas_bm_edit':$page = include 'route/bebas_bm_edit.php';break;
        case 'tambang':$page = include 'route/tambang.php';break;
        case 'tambang_edit':$page = include 'route/tambang_edit.php';break;
        case 'tpb':$page = include 'route/tpb.php';break;
        case 'tpb_edit':$page = include 'route/tpb_edit.php';break;
        case 'kite':$page = include 'route/kite.php';break;
        case 'kite_edit':$page = include 'route/kite_edit.php';break;
    };
    };
?>
-+
