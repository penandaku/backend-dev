<footer>
  <div class="container">
    <p style="font-family: 'ubuntu'; font-weight:normal;font-size:15px">Copyright &copy; 2016 Penandaku, Inc. All Rights Reserved. <span style="float:right"> <a href="" style="margin-left:20px"> Berikan Saran</a> <a href="" style="margin-left:20px"> Laporkan Bug</a> <a href="" style="margin-left:20px">layanan</a> <a href="" style="margin-left:20px"> Kebijakan Privacy</a> </span> </p>
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
</script>
</body>
</html>
