<div class="feedback-page" style="background-image: url('<?php print cdn('img/wew.png') ?>'); position:relative;background-color:#333">
  <div class="container">
    <div class="col-md-8">
      <p class="feedback-title-top"><i class="fa fa-male"></i> Join <strong>PENANDA</strong> KU </p>
      <p class="feedback-descriptions-top">Aplikasi sederhana untuk menyimpan dan akses Bookmark secara online dimanapun dan kapanpun.</p>
    </div>
  </div>
</div>
<div id="loader" style="display:none">
   <img src="<?php print cdn('img/loader.svg') ?>" />
</div>
<div class="container" style="margin-bottom:50px">
  <div class="row">
      <div class="col-md-12">
        <div class="col-md-2">
        </div>
          <div class="col-md-5">
            <label style="font-size:18px;font-weight:400;margin-bottom:20px">Create new account</label>
              <?php if(isset($error)) { echo $error; } ?>
              <?php
              $attributes = array('id' => 'frm_join');
              echo form_open('join/', $attributes)
              ?>
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
                <label style="font-weight:normal">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Masukkan Password Anda.">
                <?php echo form_error('password'); ?>
              </div>
              <div class="form-group">
                <?php echo $recaptcha_html;?>
                <?php echo form_error('g-recaptcha-response'); ?>
              </div>
              <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Creating account..." class="penandaku-btn-join btn btn-sm btn-success">Create an account</button>
            <?php echo form_close(); ?>
          </div>
          <div class="col-md-3">
            <div class="list-group">
              <div class="list-group-item" style="background-color:#555;color:#fff;text-align:center">Join <strong>PENDANDA</strong> KU</div>
              <div class="list-group-item"><i class="fa fa-check"></i> Unlimited Storage</div>
              <div class="list-group-item"><i class="fa fa-check"></i> Privacy Data</div>
              <div class="list-group-item"><i class="fa fa-check"></i> Cloud Server</div>
            </div>
          </div>
      </div>
  </div>
</div>
<div class="main-footer"></div>
<hr style="margin-top:0px;width:100%">
