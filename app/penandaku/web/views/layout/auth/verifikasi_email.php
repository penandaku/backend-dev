<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fika Ridaul Maulayya">
    <link rel="icon" href="<?php print cdn('img/favicon.png') ?>">
    <title><?php print $title ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100">
    <link rel="stylesheet" href="<?php print cdn('css/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/ie10-viewport-bug-workaround.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/jumbotron.css') ?>">
    <script src="<?php print cdn('js/ie-emulation-modes-warning.js') ?>"></script>
  </head>
  <body style="background-color:#f9f9f9">
    <div class="container" style="margin-top:150px">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="login-logo">
            <img src="<?php echo cdn('img/2.svg') ?>" style="width:300px;margin-bottom:20px">
        </div>
        <div class="create-account" style="font-family:'ubuntu'">
          Silahkan cek email <b><?php echo $email ?></b> untuk mengaktifkan akun Anda.
        </div>
        <div class="button-verify">
          <a href="<?php echo base_url() ?>" type="reset" class="btn btn-success" style="width:100%">Kembali ke Beranda</a>
      </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <script src="<?php print cdn('js/jquery.min.js') ?>"></script>
    <script src="<?php print cdn('js/bootstrap.min.js') ?>"></script>
    <script src="<?php print cdn('js/custom.js') ?>"></script>
    <script src="<?php print cdn('js/ie10-viewport-bug-workaround.js') ?>"></script>
  </body>
</html>
