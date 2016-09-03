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
  <body>
    <nav class="penandaku-navbar navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img class="penandaku-logo" src="assets/img/penandyaku.png" height="30" alt="Penandaku.com">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form action="<?php print base_url() ?>member/auth/" accept-charset="utf-8" method="POST" class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Username or Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Signing in..." class="penandaku-login btn btn-default" style="font-family:ubuntu">Sign in</button>
              <a href="<?php print base_url() ?>join?utf8=✓&source=header" type="submit" class="btn btn-success" style="font-family:ubuntu">Sign up</a>
            </form>
        </div>
      </div>
    </nav>
