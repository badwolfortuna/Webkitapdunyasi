   <?php
include "header.php";
?>
<br>
<div class="container search-table">
    <div class="search-box">
        <div class="row">
            <div class="col-md-3">
                <h5>Yazarlar</h5>
            </div>
            <div class="col-md-9">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Yazar isimi">
                <script>
                            $(document).ready(function () {
                                $("#myInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
            </div>
        </div>
    </div>
    <div class="search-list">
        <h3>10 Sonuç bulundu</h3>
        <table class="table" id="myTable">
            <thead>
            <tr>
                <th>Yazar Ad-Soyad</th>
                <th>Kategori</th>
            </tr>
            </thead>
            <tbody>


            <tr>
                <td>Sabaattin Ali</td>
                <td>Edebiyat</td>
            </tr>
            <tr>
                <td>J. K. Rowling</td>
                <td>Çocuk Kitapları</td>
            </tr>
            <tr>
                <td>George Orwell</td>
                <td>Edebiyat</td>
            </tr>
            <tr>
                <td>Orhan Pamuk</td>
                <td>Web Development</td>
            </tr>
            <tr>
                <td>Jules Verne</td>
                <td>Web Design</td>
            </tr>
            <tr>
                <td>William Shakespeare</td>
                <td>Programming Language</td>
            </tr>
            <tr>
                <td>Victor Hugo</td>
                <td>App Development</td>
            </tr>
            <tr>
                <td>Cengiz Aytmatov</td>
                <td>Web Delopment</td>
            </tr>
            </tbody>
        </table>

    </div>
</div>
   <?php
include "footer.php";
?>