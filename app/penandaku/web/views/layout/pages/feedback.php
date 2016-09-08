<div class="feedback-page" style="background-image: url('<?php print cdn('img/wew.png') ?>'); position:relative;background-color:#333">
  <div class="container">
    <div class="col-md-8">
      <p class="feedback-title-top"><i class="fa fa-bell-o"></i> FeedBack </p>
      <p class="feedback-descriptions-top">Feedback dari anda sangat bermanfaat bagi kami dalam prosess pengembangan Penandaku kedepannya.</p>
    </div>
  </div>
</div>
<div id="loader" style="display:none">
   <img src="<?php print cdn('img/loader.svg') ?>" />
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2 class="feedback-title text-center">Feedback Penandaku</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <p class="feedback-descriptions text-center">
        Feedback dari anda sangat bermanfaat bagi kami dalam prosess pengembangan Penandaku kedepannya.
      </p>
    </div>
  </div>
  <div class="row" style="margin-top:30px;margin-bottom:30px">
    <div class="col-md-6 col-md-offset-3">
      <?php
        $attributes = array('id' => 'frm_login');
        echo form_open('feedback/', $attributes)
        ?>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Nama Lengkap
          </label>
          <input type="text" class="form-control" name="nama"  placeholder="Nama Lengkap" style="font-family:'Roboto';font-weight:normal">
        </div>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Email Aktif
          </label>
          <input type="text" class="form-control" name="email"  placeholder="Email Aktif" style="font-family:'Roboto';font-weight:normal">
        </div>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Pesan Feedback
          </label>
          <textarea class="form-control" name="pesan" rows="6"  placeholder="Masukan Pesan Feedback Anda." style="font-family:'ubuntu';font-weight:normal"></textarea>
        </div>
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Sending..." class="penandaku-btn-feedback btn btn-success">Kirim Feedback</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<div class="main-footer"></div>
<hr style="margin-top:0px;width:100%">
