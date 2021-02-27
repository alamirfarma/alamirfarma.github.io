
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Aplikasi</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: left; font-size: 16px;">
                <b><?php echo $tanggal->get_hari().", ".$tanggal->get_tanggal()." ".$tanggal->get_bulan()." ".$tanggal->get_tahun()." "; ?></b> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                <a href=".." class="btn btn-danger square-btn-adjust"><b>Halaman Utama</b></a>
            </div> 
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <img src="assets/img/admin.jpg" class="user-image img-responsive"/>
					</li>
				
                    <li>
                        <a class="<?php echo $aktif_petunjuk ?>" href="?page=petunjuk"><i class="fa fa-info-circle fa-3x"></i> Petunjuk Penggunaan</a>
                    </li>

                    <li>
                        <a class="<?php echo $aktif_sambungayat ?>" href="?page=sambungayat"><i class="fa fa-retweet fa-3x"></i> Sambung Ayat</a>
                    </li>
                    
                    <li>
                        <a class="<?php echo $aktif_murojaah ?>" href="?page=murojaah"><i class="fa fa-calendar fa-3x"></i> Muroja'ah Harian</a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
