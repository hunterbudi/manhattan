<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('tgl_id'))
{
    function tgl_id($tgl)
    {
        $tanggal = substr($tgl,8,2);
        $bulan   = bulan_id(substr($tgl,5,2));
        $tahun   = substr($tgl,0,4);
        return $tanggal." ".$bulan." ".$tahun;        
    }
}

if ( ! function_exists('bulan_id'))
{
    function bulan_id($bln)
    {
        switch ($bln)
        {
            case 1: return "Januari";break;
            case 2: return "Februari";break;
            case 3: return "Maret";break;
            case 4: return "April";break;
            case 5: return "Mei";break;
            case 6: return "Juni";break;
            case 7: return "Juli";break;
            case 8: return "Agustus";break;
            case 9: return "September";break;
            case 10: return "Oktober";break;
            case 11: return "November";break;
            case 12: return "Desember";break;
        }
    }
}

if ( ! function_exists('tgl_en'))
{
    function tgl_en($tgl)
    {
        $tanggal = substr($tgl,8,2);
        $bulan   = bulan_en(substr($tgl,5,2));
        $tahun   = substr($tgl,0,4);
        return $tanggal." ".$bulan." ".$tahun;        
    }
}

if ( ! function_exists('bulan_en'))
{
    function bulan_en($bln)
    {
        switch ($bln)
        {
            case 1: return "January";break;
            case 2: return "February";break;
            case 3: return "March";break;
            case 4: return "April";break;
            case 5: return "May";break;
            case 6: return "June";break;
            case 7: return "July";break;
            case 8: return "August";break;
            case 9: return "September";break;
            case 10: return "October";break;
            case 11: return "November";break;
            case 12: return "December";break;
        }
    }
}

/* End of file fungsi_helper.php */
/* Location: ./application/helper/fungsi_helper.php */