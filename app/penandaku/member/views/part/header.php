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
          <a class="penandaku-logo-navbar" href="<?php print base_url() ?>">
               <img class="penandaku-logo" src="<?php print cdn('img/wew.svg') ?>" alt="Penandaku.com - Simple Apps for Save and Access <br> Bookmark online" />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php if($this->session->userdata('member_id')) { ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print $this->session->userdata('nama'); ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print base_url() ?>member/dashboard/"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a href="<?php print base_url() ?>member/setting/"><i class="fa fa-cogs"></i> Setting</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php print base_url() ?>member/dashboard/logout/"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          <?php }elseif($this->session->userdata('auth_id')) { ?>
              menu administrator
          <?php }else{ ?>
            <?php
              $attributes = array('id' => 'frm_login', 'class' => 'navbar-form navbar-right');
              echo form_open('login/', $attributes)
              ?>
                <div class="form-group">
                  <input type="text" name="username" placeholder="Username or Email" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Signing in..." class="penandaku-login btn btn-default" style="font-family:ubuntu">Sign in</button>
                <a href="<?php print base_url() ?>join?source=header&utf8=✓" type="submit" class="btn btn-success" style="font-family:ubuntu">Sign up</a>
              <?php echo form_close(); ?>
         <?php } ?>
        </div>
      </div>
    </nav>
