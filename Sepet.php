   <?php
include "header.php";
?>
<br>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">ÜRÜN</th>
                        <th scope="col">STOK DURUMU</th>
                        <th scope="col" class="text-center">ADET</th>
                        <th scope="col" class="text-right">FİYAT</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>Ürün adı</td>
                        <td>Stokta</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">124,90 TL</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>Ürün adı</td>
                        <td>Stokta</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">33,90 TL</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>Ürün adı </td>
                        <td>Stokta</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">70,00 TL</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub-Total</td>
                        <td class="text-right">255,90 €</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Shipping</td>
                        <td class="text-right">6,90 €</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>346,90 €</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">


                     <a href="edebiyat.php"  class="btn btn-lg btn-block btn-success text-uppercase">  Alışverişe devam et</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Kontrol Et</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<br>
<br>
   <?php
include "footer.php";
?>