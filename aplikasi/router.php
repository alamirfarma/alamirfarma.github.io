<?php 

$namaSurah = $_GET['namaSurah'];

if (!isset($_GET['page'])) {
        header('location: ../aplikasi/?page=sambungayat&namaSurah='.$namaSurah);
};



?>