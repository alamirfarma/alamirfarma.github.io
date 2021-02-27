<?php 

$_GET['title'] = "Sambung Ayat";

?>


<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
       <h2><?php echo $_GET['title'] ?></h2>   
      </div>
    </div><!-- /. ROW  -->
    <hr />

  <!-- ui -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading text-center">
							<form method="get" action="router.php">
								<select name="namaSurah">
									<option value = "belum_ada">Pilih Surah</option>
									<option value = "al_fatihah">Al-Fatihah</option>
									<option value = "al_baqarah">Al-Baqarah</option>
									<option value = "ali_imran">Ali-Imran</option>
									<option value = "an_nisa">An-Nisa</option>
									<option value = "al_maidah">Al-Maidah</option>
									<option value = "al_anam">Al-An'am</option>
									<option value = "al_araf">Al-A'raf</option>
									<option value = "al_anfal">Al-Anfal</option>
									<option value = "at_taubah">At-Taubah</option>
									<option value = "yunus">Yunus</option>
									<option value = "hud">Hud</option>
									<option value = "yusuf">Yusuf</option>
									<option value = "ar_rad">Ar-Ra'd</option>
									<option value = "ibrahim">Ibrahim</option>
									<option value = "al_hijr">Al-Hijr</option>
									<option value = "an_nahl">Al-Nahl</option>
									<option value = "al_isra">Al-Isra</option>
									<option value = "al_kahfi">Al-Kahfi</option>
									<option value = "maryam">Maryam</option>
									<option value = "thaha">Thaha</option>
									<option value = "al_anbiya">Al-Anbiya</option>
									<option value = "al_hajj">Al-Hajj</option>
									<option value = "al_muminun">Al-Mu`minun</option>
									<option value = "an_nur">An-Nur</option>
									<option value = "al_furqan">Al-Furqan</option>
									<option value = "asy_syuara">Asy-Syu'ara</option>
									<option value = "an_naml">An-Naml</option>
									<option value = "al_qashash">Al-Qashash</option>
									<option value = "al_ankabut">Al-Ankabut</option>
									<option value = "ar_rum">Ar-Rum</option>
									<option value = "luqman">Luqman</option>
									<option value = "as_sajdah">As-Sajdah</option>
									<option value = "al_ahzab">Al-Ahzab</option>
									<option value = "saba">Saba</option>
									<option value = "fathir">Fathir</option>
									<option value = "yasin">Yasin</option>
									<option value = "ash_shaffat">Ash-Shaffat</option>
									<option value = "shad">Shad</option>
									<option value = "az_zumar">Az-Zumar</option>
									<option value = "ghafir">Ghafir</option>
									<option value = "fushshilat">Fushshilat</option>
									<option value = "asy_syura">Asy-Syura</option>
									<option value = "az_zukhruf">Az-Zukhruf</option>
									<option value = "ad_dukhan">Ad-Dukhan</option>
									<option value = "al_jatsiyah">Al-Jatsiyah</option>
									<option value = "al_ahqaf">Al-Ahqaf</option>
									<option value = "muhammad">Muhammad</option>
									<option value = "al_fath">Al-Fath</option>
									<option value = "al_hujurat">Al-Hujurat</option>
									<option value = "qaf">Qaf</option>
									<option value = "adz_dzariyat">Adz-Dzariyat</option>
									<option value = "ath_thur">Ath-Thur</option>
									<option value = "an_najm">An-Najm</option>
									<option value = "al_qamar">Al-Qamar</option>
									<option value = "ar_rahman">Ar-Rahman</option>
									<option value = "al_waqiah">Al-Waqi'ah</option>
									<option value = "al_hadid">Al-Hadid</option>
									<option value = "al_mujadilah">Al-Mujadilah</option>
									<option value = "al_hasyr">Al-Hasyr</option>
									<option value = "al_mumtahanah">Al-Mumtahanah</option>
									<option value = "ash_shaf">Ash-Shaf</option>
									<option value = "al_jumuah">Al-Jumu'ah</option>
									<option value = "al_munafiqun">Al-Munafiqun</option>
									<option value = "at_taghabun">At-Taghabun</option>
									<option value = "ath_thalaq">Ath-Thalaq</option>
									<option value = "at_tahrim">At-Tahrim</option>
									<option value = "al_mulk">Al-Mulk</option>
									<option value = "al_qalam">Al-Qalam</option>
									<option value = "al_haqqah">Al-Haqqah</option>
									<option value = "al_maarij">Al-Ma'arij</option>
									<option value = "nuh">Nuh</option>
									<option value = "al_jinn">Al-Jinn</option>
									<option value = "al_muzzammil">Al-Muzzammil</option>
									<option value = "al_muddatstsir">Al-Muddatstsir</option>
									<option value = "al_qiyamah">Al-Qiyamah</option>
									<option value = "al_insan">Al-Insan</option>
									<option value = "al_mursalat">Al-Mursalat</option>
									<option value = "an_naba">An-Naba</option>
									<option value = "an_naziat">An-Nazi'at</option>
									<option value = "abasa">'Abasa</option>
									<option value = "at_takwir">At-Takwir</option>
									<option value = "al_infithar">Al-Infithar</option>
									<option value = "al_muthaffifin">Al-Muthaffifin</option>
									<option value = "al_insyiqaq">Al-Insyiqaq</option>
									<option value = "al_buruj">Al-Buruj</option>
									<option value = "ath_thariq">Ath-Thariq</option>
									<option value = "al_ala">Al-A'la</option>
									<option value = "al_ghasyiyah">Al-Ghasyiyah</option>
									<option value = "al_fajr">Al-Fajr</option>
									<option value = "al_balad">Al-Balad</option>
									<option value = "asy_syams">Asy-Syams</option>
									<option value = "al_lail">Al-Lail</option>
									<option value = "adh_dhuha">Adh-Dhuha</option>
									<option value = "al_insyirah">Al-Insyirah</option>
									<option value = "at_tin">At-Tin</option>
									<option value = "al_alaq">Al-'Alaq</option>
									<option value = "al_qadr">Al-Qadr</option>
									<option value = "al_bayyinah">Al-Bayyinah</option>
									<option value = "az_zalzalah">Az-Zalzalah</option>
									<option value = "al_adiyat">Al-'Adiyat</option>
									<option value = "al_qariah">Al-Qari'ah</option>
									<option value = "at_takatsur">At-Takatsur</option>
									<option value = "al_ashr">Al-'Ashr</option>
									<option value = "al_humazah">Al-Humazah</option>
									<option value = "al_fil">Al-Fil</option>
									<option value = "al_quraisy">Al-Quraisy</option>
									<option value = "al_maun">Al-Ma'un</option>
									<option value = "al_kautsar">Al-Kautsar</option>
									<option value = "al_kafirun">Al-Kafirun</option>
									<option value = "an_nashr">An-Nashr</option>
									<option value = "al_lahab">Al-Lahab</option>
									<option value = "al_ikhlas">Al-Ikhlas</option>
									<option value = "al_falaq">Al-Falaq</option>
									<option value = "an_nas">An-Nas</option>
								</select>
								<button type="submit" class="btn btn-primary btn-xs">
									<span class="fa fa-search"></span>&nbsp;&nbsp;Cek </button>
							</form>
          </div>        
          <div class="panel-body text-center"> 
			  		<div class='player'>
							<div class='right'>
								<div class='nav'>
									<h4 class='logo'>Sambung<span> Ayat</span>
								</div><br>
								<div class='album'>
									<img src="sambung ayat/images/quran.jpeg" />
								</div>
								<div class='song-meta-data'>
									<div class='title-sambung-ayat'><h3>Surah : <?php print($picksurah->get_nama()) ?></h3></div>
									<p>Ayat : <?php print($picksurah->get_random()) ?></p>
								</div>
								<div class='info'>
									<div class='song-played'>
										<iframe src="<?php print('sambung ayat/sound/'.$nama.'/'.$picksurah->get_random()) ?>.mp3" style="display: none;"></iframe>
										<audio autoplay controls muted src="<?php print('sambung ayat/sound/'.$nama.'/'.$picksurah->get_random()) ?>.mp3" type="audio/mpeg"></audio>
									</div>	
								</div><!-- info -->	
							</div><!-- right -->	
						</div><!-- player -->	                
					</div><!-- panel-body -->
        </div><!-- panel panel-default -->
      </div><!-- col-md-7 -->
    </div><!-- row -->
  </div><!-- /. PAGE INNER  -->
</div><!-- /. PAGE WRAPPER  -->
