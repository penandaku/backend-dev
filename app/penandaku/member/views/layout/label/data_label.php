<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-folder-open"></i> Label</div>
    <div class="panel-body">
      <a style="margin-bottom:10px;" href="<?php print base_url() ?>member/label/add/" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Label</a>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Label</th>
              <th>Descriptions</th>
            </tr>
          </thead>
          <?php
            $no = 1;
            foreach($data_label as $hasil) :
          ?>
          <tbody>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $hasil->nama_label; ?></td>
              <td><?php echo $hasil->descriptions; ?></td>
            </tr>
            <?php
              $no++;
              endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
