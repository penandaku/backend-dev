<div class="bug-page" style="background-image: url('<?php print cdn('img/wew.png') ?>'); position:relative;background-color:#333">
  <div class="container">
    <div class="col-md-8">
      <p class="bug-title-top"><i class="fa fa-bug"></i> Report Bug </p>
      <p class="bug-descriptions-top">Report Bug dari anda sangat bermanfaat bagi kami dalam prosess pengembangan Penandaku kedepannya.</p>
    </div>
  </div>
</div>
<div id="loader" style="display:none">
   <img src="<?php print cdn('img/loader.svg') ?>" />
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2 class="bug-title text-center">Report Bug Penandaku</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <p class="bug-descriptions text-center">
        Report Bug dari anda sangat bermanfaat bagi kami dalam prosess pengembangan Penandaku kedepannya.
      </p>
    </div>
  </div>
  <div class="row" style="margin-top:30px;margin-bottom:30px">
    <div class="col-md-6 col-md-offset-3">
      <?php
        $attributes = array('id' => 'frm_login');
        echo form_open('bug/', $attributes)
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
          <label for="fullname" style="font-family:'ubuntu';font-weight:normal">
              Report Bug
          </label>
          <textarea class="form-control" name="pesan" rows="6"  placeholder="Masukan Laporan Bug dari Anda." style="font-family:'Roboto';font-weight:normal"></textarea>
        </div>
        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Sending..." class="penandaku-btn-bug btn btn-success">Kirim Laporan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<div class="main-footer"></div>
<hr style="margin-top:0px;width:100%">
