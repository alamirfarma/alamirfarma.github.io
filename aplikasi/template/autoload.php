<?php 

include 'class/Tanggal.php';
include 'murojaah/class/PickJuz.php';
include 'sambung ayat/class/Surah.php';
include 'sambung ayat/class/InstantSurah.php';


/* Murojaah Harian */

$tanggal = new Tanggal;

if (isset($_POST['juz'])) {
    $juz = new PickJuz($_POST['juz']);
    if ($_POST['juz']==="pilih") {
        $juzggl = "Silahkan pilih jumlah juz !";
    };
} elseif (!isset($_POST['juz'])) {
    $juzggl = "Silahkan pilih jumlah juz !";
};



/* Sambung Ayat */

$surah = new InstantSurah;

if (isset($_GET['namaSurah'])) {
  $nama = $_GET['namaSurah'];
} else {
  $_GET['namaSurah'] = "belum_ada";
  $nama = $_GET['namaSurah'];
};

$picksurah = $surah->getSurah($nama);




?>