<footer>
  <div class="container">
    <p style="font-family: 'ubuntu'; font-weight:normal;font-size:15px">Copyright &copy; 2016 Penandaku, Inc. All Rights Reserved. <span style="float:right"> <a href="<?php print base_url() ?>about/" style="margin-left:20px"> About</a> <a href="<?php print base_url() ?>feedback/" style="margin-left:20px"> Feedbak</a> <a href="<?php print base_url() ?>bug/" style="margin-left:20px"> Report Bug</a> <a href="<?php print base_url() ?>terms/" style="margin-left:20px">Terms of Us</a> <a href="<?php print base_url() ?>policies/" style="margin-left:20px"> Privacy Policy</a> </span> </p>
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
