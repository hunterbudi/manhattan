<?php
function sql($tgl) {
$tglsql=substr($tgl,6,4)."-".substr($tgl,3,2)."-".substr($tgl,0,2);
return $tglsql;
}

function view($tgl) {
$tglview=substr($tgl,8,2)."/".substr($tgl,5,2)."/".substr($tgl,0,4);
return $tglview;
}

?>