<div class="modal fade" id="DeleteAccount" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apakah Anda benar-benar yakin?</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning">
          <strong>Perhatian!</strong> Baca pesan peringatan dibawah ini.
        </div>

        <?php
          $attributes = array('id' => 'frm_login');
          echo form_open('member/dashboard/delete/', $attributes)
          ?>
          <div class="form-group">
            <p>
              Tindakan ini munkin tidak bisa dipulihkan, ini akan menghapus account Anda secara permanen.
            </p>
            <label style="font-weight:normal;margin-bottom:5px" for="username">Silahkan masukan username Anda untuk mengkonfirmasi.</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Deleting..." class="penandaku-btn-destroy btn btn-default btn-md" style="width:100%;color:#df3e3e">saya mengerti, tetap lanjutkan hapus</button>
          <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<div class="main-footer"></div>
<hr style="margin-top:0px;width:100%">
<footer>
  <div class="container">
    <p style="font-family: 'Roboto'; font-weight:normal;font-size:15px">Copyright &copy; 2016 Penandaku, Inc. All Rights Reserved. <span style="float:right"> <a href="<?php print base_url() ?>about/" style="margin-left:20px"> About</a> <a href="<?php print base_url() ?>feedback/" style="margin-left:20px"> Feedbak</a> <a href="<?php print base_url() ?>bug/" style="margin-left:20px"> Report Bug</a> <a href="<?php print base_url() ?>terms/" style="margin-left:20px">Terms of Us</a> <a href="<?php print base_url() ?>policies/" style="margin-left:20px"> Privacy Policy</a> </span> </p>
  </div>
</footer>
<script src="<?php print cdn('js/jquery.min.js') ?>"></script>
<script src="<?php print cdn('js/bootstrap.min.js') ?>"></script>
<script src="<?php print cdn('js/custom.js') ?>"></script>
<script src="<?php print cdn('js/ie10-viewport-bug-workaround.js') ?>"></script>
<script>
    $('.penandaku-btn-register').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-feedback').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-bug').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-label').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-bookmark').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-destroy').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $.ajaxSetup({
    beforeSend: function() {
       $('#loader').fadeIn();
       $('.overlay-loader').fadeIn();
    },
    complete: function(){
      $('#loader').fadeOut(1000);
      $('.overlay-loader').fadeOut(1000);
    },
    success: function() {}
    });
</script>
</body>
</html>
