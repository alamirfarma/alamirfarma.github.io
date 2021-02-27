<?php 

include 'template/autoload.php';
include 'template/header.php';
include 'template/sidebar.php';

/* content */
if (isset($_GET['page'])) {
    if ($_GET['page']=='petunjuk') {
        include 'petunjuk.php';  
    };
    if ($_GET['page']=='sambungayat') {
        include 'sambungayat.php';  
    };
    if ($_GET['page']=='murojaah') {
        include 'murojaah.php';  
    };
} else {
    include 'petunjuk.php';   
};


include 'template/footer.php';
?>