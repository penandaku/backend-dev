<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-folder-open"></i> Form Label</div>
    <div class="panel-body">
      <?php
        $attributes = array('id' => 'frm_label');
        echo form_open('member/label/add/', $attributes)
        ?>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Nama Label
          </label>
          <input type="text" class="form-control" name="nama_label" value="<?php echo set_value('nama_label') ?>"  placeholder="Nama Label" style="font-family:'Roboto';font-weight:normal">
          <?php echo form_error('nama_label'); ?>
        </div>
        <div class="form-group">
          <label for="fullname" style="font-family:'Roboto';font-weight:normal">
              Descriptions
          </label>
          <textarea class="form-control" name="descriptions" rows="6"  placeholder="Masukan Keterangan Label." style="font-family:'Roboto';font-weight:normal"><?php echo set_value('descriptions') ?></textarea>
          <?php echo form_error('descriptions'); ?>
        </div>
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Saving..." class="penandaku-btn-label btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

</div>
</div>
