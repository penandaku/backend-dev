<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-folder-open"></i> Form Bookmark</div>
    <div class="panel-body">
      <?php
        $attributes = array('id' => 'frm_bookmark');
        echo form_open('member/bookmark/add/', $attributes)
        ?>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Judul Bookmark
          </label>
          <input type="text" class="form-control" name="judul_bookmark"  placeholder="Judul Bookmark" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('judul_bookmark'); ?>
        </div>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Label Bookmark
          </label>
          <input type="text" class="form-control" name="label_bookmark"  placeholder="Label Bookmark" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('label_bookmark'); ?>
        </div>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              URL Bookmark
          </label>
          <input type="text" class="form-control" name="url_bookmark"  placeholder="URL Bookmark" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('url_bookmark'); ?>
        </div>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Descriptions
          </label>
          <textarea class="form-control" name="descriptions" rows="6"  placeholder="Masukan Keterangan Label." style="font-family:'Roboto';font-weight:normal"></textarea>
          <?php echo form_error('descriptions'); ?>
        </div>
        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Menyimpan..." class="penandaku-btn-bookmark btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

</div>
</div>
