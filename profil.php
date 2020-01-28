   <?php
include "header.php";
?>
<br>
<br>


<div class="container">
<div class="row">
    <div class="col-md-3 ">
        <div class="list-group ">
            <a href="#" class="list-group-item list-group-item-action active">HESAP</a>
            <a href="#" class="list-group-item list-group-item-action">Siparişler</a>
            <a href="#" class="list-group-item list-group-item-action">İadeler</a>
            <a href="#" class="list-group-item list-group-item-action">Yardım</a>
            <a href="#" class="list-group-item list-group-item-action">Favorilerim</a>



        </div>
    </div>

    <div class="col-md-9" style="background-color:#e9f0f9">

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <h2>Kullanıcı Bilgileri</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Kullanıcı Adı*</label>
                                <div class="col-8">
                                    <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Ad </label>
                                <div class="col-8">
                                    <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Soyad</label>
                                <div class="col-8">
                                    <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Cinsiyet</label>
                                <div class="col-8">
                                    <select id="select" name="select" class="custom-select">
                                        <option value="kadın">Kadın</option>
                                        <option value="admin">Erkek</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Şehir</label>
                                <div class="col-8">
                                    <select id="şehir" name="select" class="custom-select">
                                        <option value="tur">Antalya</option>
                                        <option value="Us">Samsun</option>
                                        <option value="Us">İstanbul</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label>
                                <div class="col-8">
                                    <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">YENİ ŞİFRE</label>
                                <div class="col-8">
                                    <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Profilimi güncelle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>
</div>
   <?php
include "footer.php";
?>