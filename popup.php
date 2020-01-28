<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<div class="container">
    <div class="row">
        <div class='modal fade' id='myModal'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class='modal-title'>
                            <strong>MODAL WITH JQUERY COOKIE</strong>
                        </h4>
                    </div>
                    <!-- / modal-header -->
                    <div class='modal-body'>
                        <img class="img-responsive" src="http://placehold.it/600x350&text=MODAL" />
                    </div>
                    <!-- / modal-body -->
                    <div class='modal-footer'>
                        <div class="checkbox pull-right">
                            <label>
                                <input class='modal-check' name='modal-check' type="checkbox"> Don't Show
                            </label>
                        </div>
                        <!--/ checkbox -->
                    </div>
                    <!--/ modal-footer -->
                </div>
                <!-- / modal-content -->
            </div>
            <!--/ modal-dialog -->
        </div>
        <!-- / modal -->
    </div>
    <!-- / row -->
</div>
<!-- / container -->

</body>
</php>