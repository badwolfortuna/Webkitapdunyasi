<!DOCTYPE php>
<php lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitap Dünyası</title>

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <!--swiper-->
    <link rel="stylesheet" href="assets/swiper-master/dist/css/swiper.min.css">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!--swiper-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/icon4.png" />
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <!--swiper-->
    <script src="assets/swiper-master/dist/js/swiper.min.js"></script>
    <!--jquery swiper linki için kullanıldı-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--footer-->
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/footer.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--footer-->
    <!--popup-->
    <link href="assets/css/popup.css" rel="stylesheet">

    <!--popup-->

    <![endif]-->
</head>
<body>


<nav class="navbar navbar-default ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" >Kitap Dünyası</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Arama..">
                </div>
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Yazarlar.php">Yazarlar</a></li>
                <li><a href="Yayınevi.php">Yayın Evleri</a></li>
                <li><a href="profil.php">Profil</a></li>

                <li><a class="btn-sepet btn btn-success" href="Sepet.php">
                    <i class="fa fa-shopping-cart"></i> Sepet

                </a></li>
                <li><a class="btn-giris btn btn-info" href="Giris.php">Giriş</a>
                </li>
                <li><a class="btn-kaydol btn btn-default" href="Kaydol.php">Kaydol</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>