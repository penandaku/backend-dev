<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fika Ridaul Maulayya">
    <link rel="icon" href="<?php print cdn('img/home.svg') ?>">
    <title><?php print $title ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php print cdn('css/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/ie10-viewport-bug-workaround.css') ?>">
    <link rel="stylesheet" href="<?php print cdn('css/jumbotron.css') ?>">
    <script src="<?php print cdn('js/ie-emulation-modes-warning.js') ?>"></script>
  </head>
  <body style="background-color:#f9f9f9">
    <div class="container" style="margin-top:40px">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="login-logo">
            <img src="<?php echo cdn('img/home.svg') ?>" style="width:120px;margin-bottom:20px">
        </div>
        <div class="error-login">
          <?php if(isset($error)) { echo $error; }; ?>
        </div>
          <div class="panel panel-default" style="font-family:'Roboto'">
            <div class="panel-body">
              <?php
                $attributes = array('id' => 'frm_join');
                echo form_open('join/', $attributes)
                ?>
                <div class="form-group">
                  <label style="font-weight:normal">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>" placeholder="Masukkan Nama Lengkap.">
                  <?php echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                  <label style="font-weight:normal">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" placeholder="Masukkan Username Anda.">
                  <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                  <label style="font-weight:normal">Email Aktif</label>
                  <input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>" placeholder="Masukkan Email Anda.">
                  <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                  <label style="font-weight:normal">Password <a href="<?php print base_url() ?>forgot-password/">(forgot password)</a></label>
                  <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Masukkan Password Anda.">
                  <?php echo form_error('password'); ?>
                </div>
                <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Creating account..." class="penandaku-btn-join btn btn-sm btn-success">Create an account</button>
              <?php echo form_close(); ?>
            </div>
        </div>
        <div class="create-account" style="font-family:'Roboto'">
          Sudah punya akun ! <a href="<?php print base_url() ?>login/">Login</a>.
        </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <script src="<?php print cdn('js/jquery.min.js') ?>"></script>
    <script src="<?php print cdn('js/bootstrap.min.js') ?>"></script>
    <script src="<?php print cdn('js/custom.js') ?>"></script>
    <script src="<?php print cdn('js/ie10-viewport-bug-workaround.js') ?>"></script>
    <script>
      $('.penandaku-btn-join').on('click', function() {
          var $this = $(this);
              $this.button('loading');
              setTimeout(function() {
                $this.button('reset');
              }, 800);
      });
    </script>
  </body>
</html>
