<div class="jumbotron" style="background-image: url('<?php print cdn('img/bg.jpg') ?>'); position:relative;background-color:#1abc9c">
  <div class="container" style="color:#fff;margin-top:15px">
    <div class="col-md-8">
    <h2 style="font-family: 'ubuntu'; font-weight:normal;font-size:40px">Simple Apps for Save and Access <br> Bookmark online.</h2>
    <p style="font-family: 'ubuntu'; font-weight:inherit;font-size:25px">Simpan dan Akses Bookmark Anda secara online dimana dan kapanpun saja secara mudah.</p>
    </div>
    <div class="col-md-4">
      <?php
        $attributes = array('id' => 'frm_login');
        echo form_open(base_url('/'), $attributes)
        ?>
        <div class="form-group">
          <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>" id="nama" placeholder="Masukan Nama Anda."  style="height:45px;font-size:16px;font-family:'ubuntu'">
          <?php echo form_error('nama'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" id="username" placeholder="Masukan Username Anda." style="height:45px;font-size:16px;font-family:'ubuntu'">
          <?php echo form_error('username'); ?>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>" id="email" placeholder="Masukan Email Anda." style="height:45px;font-size:16px;font-family:'ubuntu'">
          <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
          <input type="text" name="password" class="form-control" value="<?php echo set_value('password') ?>" id="password" placeholder="Masukan Password Anda." style="height:45px;font-size:16px;font-family:'ubuntu'">
          <?php echo form_error('password'); ?>
        </div>
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Creating account..." class="penandaku-btn-register btn btn-success btn-lg">Sign up for Penandaku.com</button>
          <span class="penandaku-note-register text-center">
            Dengan mengeklik "Sign up for Penandaku.com", berarti anda menyetujui
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
    <div class="col-md-9" style="font-family:'ubuntu'">
        <h3>Tentang Kami</h3>
        <p>Penandaku adalah perusahaan penyedia layanan penyimpanan bookmark secara online, sehingga anda tidak perlu kawatir menyimpan dan mengakses bookmark anda dimanapun dan kapanpun saja.</p>
    </div>
    <div class="col-md-3">
      <img class="img-responsive" src="<?php print cdn('img/login.svg') ?>" style="width:300px">
    </div>
  </div>
  <div class="penandaku-batas"></div>
  <div class="row">
    <div class="col-md-5">
      <img class="img-responsive" src="<?php print cdn('img/penandaku-laptop.png') ?>" style="width:500px">
    </div>
    <div class="col-md-7" style="font-family:'ubuntu'">
        <h3>Bergabung Sebagai Pengembang</h3>
        <p>bergabunglah dengan para pengembang kami, guna mengembangkan penandaku.com agar lebih baik lagi kedepannya.</p>
        <button type="button" class="btn btn-success">Join Sebagai Pengembang</button>
    </div>
  </div>
  <div class="penandaku-batas"></div>
  </div>
  <div class="main-footer"></div>
  <hr style="margin-top:0px;width:100%">
