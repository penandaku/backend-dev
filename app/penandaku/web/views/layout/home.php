<div class="jumbotron" style="background-image: url('<?php print cdn('img/wew.png') ?>'); position:relative;background-color:#1abc9c">
  <div class="container" style="color:#fff;margin-top:15px">
    <div class="col-md-8">
    <h2 style="font-family: 'Roboto'; font-weight:300;font-size:40px">Simple Apps for Save and Access <br> Bookmark online.</h2>
    <p style="font-family: 'Roboto'; font-weight:300;font-size:25px">Simpan dan Akses Bookmark Anda secara online dimana dan kapanpun saja secara mudah.</p>
    </div>
    <div class="col-md-4">
      <?php
        $attributes = array('id' => 'frm_login');
        echo form_open(base_url('join/'), $attributes)
        ?>
        <div class="form-group">
          <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>" id="nama" placeholder="Masukan Nama Anda."  style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('nama'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" id="username" placeholder="Masukan Username Anda." style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('username'); ?>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>" id="email" placeholder="Masukan Email Anda." style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="password" class="form-control" value="<?php echo set_value('password') ?>" id="password" placeholder="Masukan Password Anda." style="height:45px;font-size:16px;font-family:'Roboto';font-weight:normal">
          <?php echo form_error('password'); ?>
        </div>
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Creating account..." class="penandaku-btn-register btn btn-success btn-lg">Create Account</button>
          <span class="penandaku-note-register text-center">
            Dengan mengeklik "Create Account", berarti anda menyetujui
            <a class="text-white" href="<?php print base_url() ?>terms/" target="_blank">layanan</a> and
            <a class="text-white" href="<?php print base_url() ?>policies/" target="_blank">kebijakan privacy</a>. <span class="js-email-notice">kami.</span>
          </span>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<div id="loader" style="display:none">
   <img src="<?php print cdn('img/loader.svg') ?>" />
</div>
<div class="container">
  <div class="overlay-loader">

  </div>
  <div class="penandaku-batas"></div>
  <div class="row">
    <div class="col-md-9" style="font-family:'Roboto';font-weight:300;font-size:19px">
        <p style="font-size:25px;"> Tentang Kami</p>
        <p>Penandaku adalah App penyedia layanan penyimpanan bookmark secara online, sehingga anda tidak perlu kawatir menyimpan dan mengakses bookmark anda dimanapun dan kapanpun saja.</p>
    </div>
    <div class="col-md-3">
      <img class="img-responsive" src="<?php print cdn('img/home.svg') ?>" style="width:200px;margin-left:50px">
    </div>
  </div>
  <div class="penandaku-batas"></div>
  <div class="row" style="font-family:'Roboto';font-weight:300;font-size:16px">
    <div class="col-md-4">
      <p style="font-size:20px;text-align:center"><i class='fa fa-server'></i> UNLIMITED</p>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    </div>
    <div class="col-md-4">
      <p style="font-size:20px;text-align:center"><i class='fa fa-lock'></i> PRIVACY</p>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
   </div>
    <div class="col-md-4">
      <p style="font-size:20px;text-align:center"><i class='fa fa-cloud'></i> CLOUD</p>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
  </div>
  <div class="penandaku-batas"></div>
  </div>
  <div class="main-footer"></div>
  <hr style="margin-top:0px;width:100%">
