<?php 

if (isset($_GET['page'])) {
    if ($_GET['page']=='petunjuk') {
        $page = "Petunjuk Penggunaan";
        $aktif_petunjuk = "active-menu";  
        $aktif_sambungayat = "";  
        $aktif_murojaah = "";  
    };
    if ($_GET['page']=='sambungayat') {
        $page = "Sambung Ayat";  
        $aktif_petunjuk = "";  
        $aktif_sambungayat = "active-menu";  
        $aktif_murojaah = ""; 
    };
    if ($_GET['page']=='murojaah') {
        $page = "Muroja'ah Harian";
        $aktif_petunjuk = "";  
        $aktif_sambungayat = "";  
        $aktif_murojaah = "active-menu";   
    };
} else {
    $page = "Petunjuk Penggunaan"; 
    $aktif_petunjuk = "active-menu";  
    $aktif_sambungayat = "";  
    $aktif_murojaah = "";  
};

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page; ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<!-- Sambung Ayat -->

    <link href="sambung ayat/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:400,700" rel="stylesheet">
    <link rel="stylesheet" href="sambung ayat/css/normalize.min.css">
    <link rel="stylesheet" href="sambung ayat/css/style.css">


</head>