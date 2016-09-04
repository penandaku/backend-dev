<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fika Ridaul Maulayya">
    <link rel="icon" href="favicon.ico">
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
          <div class="panel panel-default" style="font-family:'ubuntu'">
            <div class="panel-body">
              <?php if(isset($error)) { echo $error; }; ?>
              <form role="form" action="<?php print base_url() ?>login/" method="POST" accept-charset="utf-8">
                <div class="form-group">
                  <label style="font-weight:normal" for="exampleInputEmail1">Username or Email</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter username or email">
                </div>
                <div class="form-group">
                  <label style="font-weight:normal" for="exampleInputPassword1">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
                  <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Signing in..." class="penandaku-btn-login btn btn-sm btn-success">Sign in</button>
              </form>
            </div>
        </div>
        <div class="create-account" style="font-family:'ubuntu'">
          Daftar gratis ! <a href="">Buat akun baru</a>.
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
      $('.penandaku-btn-login').on('click', function() {
          var $this = $(this);
              $this.button('loading');
              setTimeout(function() {
                $this.button('reset');
              }, 800);
      });
    </script>
  </body>
</html>