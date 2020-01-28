<?php
include "header.php";
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="assets/img/kitap1.PNG" alt="Kitap 1">
        </div>
        <div class="item">
            <img src="assets/img/kitap2.PNG" alt="Kitap 2">
        </div>
        <div class="item">
            <img src="assets/img/kitap3.PNG" alt="Kitap 2">
        </div>
    </div>


    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="clearfix">&nbsp;</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-active list-group-item-success">Kategoriler</a>
                <a href="Edebiyat.php" class="list-group-item">Edebiyat</a>
                <a href="Bilim-Mühendislik.php" class="list-group-item">Bilim-Mühendislik</a>
                <a href="çocukkitapları.php" class="list-group-item">Çocuk Kitapları</a>
                <a href="Psikoloji.php" class="list-group-item">Psikoloji</a>
                <a href="Sınavahazırlık.php" class="list-group-item">Sınava Hazırlık</a>
                <a href="Din-Mitoloji.php" class="list-group-item">Din-Mitoloji</a>
                <a href="Yabancıdil.php" class="list-group-item">Yabancı Dil Öğrenimi</a>
                
            </div>
        </div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-sitemap" aria-hidden="true"></i> Haftanın Öne Çıkanları</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="thumbnail text-center">
                                <img src="https://cdn.kitapisler.com/products/45667/buyuk/Puan-Yayinlari-TYT-Turkce-Ogrete_45667_1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Türkçe Soru Bankası</h3>
                                    <p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i> İncele</button>



                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="thumbnail text-center">
                                <img src="https://cdn.kitapisler.com/products/46279/buyuk/Puan-Yayinlari-TYT-Matematik-Ogr_46279_1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Matematik Soru Bankası</h3>
                                    <p>
                                        <a href="#" class="btn btn-default" role="button">İncele</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="thumbnail text-center">
                                <img src="https://cdn.kitabinabak.com/Kibak/Main/P/e8/8f/b742b2d84f61bbfcdbaf5d31d862N/TYT-Matematik-Soru-Analizli-10-Arti-1-Deneme.jpg" alt="...">
                                <div class="caption">
                                    <h3>Matematik Deneme</h3>
                                    <p>
                                        <a href="#" class="btn btn-default" role="button">İncele</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="thumbnail text-center">
                                <img src="https://www.isemkitap.com/Webkontrol/UrunYonetimi/GaleriResim/KucukResim/united_kitap_g79503_k_DOsz4z6k.jpg" alt="...">
                               
                                <div class="caption">
                                    <h3>Sosyal B. Deneme</h3>
                                    <p>
                                        <a href="#" class="btn btn-default" role="button">İncele</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="thumbnail text-center">
                                <img src="https://www.kitapvekitap.com/u/kitapvekitap/img/c/t/e/tercih-akademi-yks-dil-ingilizce-kelime-ogrenme-yontemlerif266407f836eba765bb4ffd0329457bb.jpg" alt="...">
                                <div class="caption">
                                    <h3>İngilizce Kelime</h3>
                                    <p>
                                        <a href="#" class="btn btn-default" role="button">İncele</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="thumbnail text-center">
                                <img src="https://s.eticaretbox.com/2754/pictures/LXIXTEUEOS542018145816_YKS-DIL-INGILIZCE-GRAMER-kapak-internet.jpg" alt="...">
                                <div class="caption">
                                    <h3>İngilizce Gramer</h3>
                                    <p>
                                        <a href="#" class="btn btn-default" role="button">İncele</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- modal-->
            <div class="modal fade product_view" id="product_view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            <h3 class="modal-title">KİTAP DETAYI</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 product_img">
                                    <img src="https://s.eticaretbox.com/2754/pictures/LXIXTEUEOS542018145816_YKS-DIL-INGILIZCE-GRAMER-kapak-internet.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-6 product_content">
                                    <h4>Kitap adı: <span>Türkçe soru bankası</span></h4>
                                    <div class="rating">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        (10 görüntüleme)
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <select class="form-control" name="select">
                                                <option value="" selected="">Basım tarihi</option>
                                                <option value="">2018</option>

                                            </select>
                                        </div>

                                        <!-- end col -->
                                        <div class="col-md-4 col-sm-12">
                                            <select class="form-control" name="select">
                                                <option value="" selected="">Adet</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <div class="space-ten"></div>
                                    <div class="btn-ground">
                                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> sepete ekle </button>
                                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Favorilerime ekle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- modal-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-adjust" aria-hidden="true"></i> ÇOK SATILANLAR </h4>
                </div>
                <div class="panel-body">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-toggle="modal" data-target="#product_view" style="background-image:url(assets/img/kitap7.jpeg)"></div>
                            <div class="swiper-slide" data-toggle="modal" data-target="#product_view" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                            <div class="swiper-slide" style="background-image:url(assets/img/kitap5.jpeg)"></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <script src="assets/js/swiper-ezgi.js"></script>

               </div>
           </div>



            <!--yenigelenler-->

           <div class="panel panel-default">
               <div class="panel-heading">
                   <h4><i class="fa fa-camera-retro" aria-hidden="true"></i> YENİ GELENLER </h4>
               </div>
               <div id="yenigelenler">
                   <script src="assets/js/sayfayaswpekleme.js"></script>
               </div>

           </div>
            <!--haftanın yazarları  ı-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-camera-retro" aria-hidden="true"></i> HAFTANIN YAZARLARI</h4>
                </div>
                <div id="haftanınyazarları">

                </div>

            </div>






            <!--haftanın fırsatları  ı-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-camera-retro" aria-hidden="true"></i> HAFTANIN FIRSATLARI</h4>
                </div>
                <div id="haftanınfırsatları">

                </div>

            </div>
            <!--editörün seçimi-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-camera-retro" aria-hidden="true"></i> EDİTÖRÜN SEÇİMİ</h4>
                </div>
                <div id="editörünseçimi">

                </div>

            </div>

       </div>
   </div>
   </div>
   <?php
include "indexfooter.php";
?>