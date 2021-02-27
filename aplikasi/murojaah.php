<?php 

$_GET['title'] = "Murojaah Harian";

?>


<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2><?php echo $_GET['title'] ?></h2>   
            </div>
        </div><!-- /. ROW  -->
        <hr />

        <!-- content -->

        <div class="col-md-6 col-sm-6">
            <div class="text-center panel panel-info">
                <div class="panel-heading">
                    <b>Hari ini tanggal <?php echo $tanggal->get_tanggal(); ?></b>
                </div>
                <div class="panel-body">
                    <p> Jumlah Juz : 
                        <form method="post" action="?page=murojaah">
                            <select name="juz">
                                <option value="pilih">Pilih</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select><br><br>
                            <button type="submit" class="btn btn-info btn-xs"><span class="fa fa-search"></span>&nbsp;&nbsp;Cek Juz</button>

                        </form>
                    </p>
                </div>
                <div class="panel-footer">
                    <b><?php 

                    if (!isset($_POST['juz'])||$_POST['juz']==="pilih") {
                        echo $juzggl;
                    } elseif (isset($_POST['juz'])) {
                        echo $juz->getJuz();
                    } else {
                        echo $juzggl;
                    };

                    ?></b>
                </div>
            </div>
        </div>

    </div><!-- /. PAGE INNER  -->
</div><!-- /. PAGE WRAPPER  -->
