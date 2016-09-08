<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <div class="list-group-item" style="background-color:#f5f5f5">Panel System</div>
        <a href="<?php print base_url() ?>member/dashboard/" class="list-group-item <?php if(isset($dashboard)) { echo 'active-panel-member'; } ?>"><i class="fa fa-home"></i> Dashboard </a>
        <a href="<?php print base_url() ?>member/bookmark/" class="list-group-item <?php if(isset($bookmark)) { echo 'active-panel-member'; } ?>"><i class="fa fa-bookmark"></i> Kelola Bookmark</a>
        <a href="<?php print base_url() ?>member/label/" class="list-group-item <?php if(isset($label)) { echo 'active-panel-member'; } ?>"><i class="fa fa-folder-open"></i> Kelola Label</a>
        <a href="<?php print base_url() ?>member/export/" class="list-group-item <?php if(isset($export)) { echo 'active-panel-member'; } ?>"><i class="fa fa-cloud-download"></i> Export Bookmark</a>
        <a href="<?php print base_url() ?>member/bookmark/delete-all/" class="list-group-item <?php if(isset($delete_all)) { echo 'active-panel-member'; } ?>"><i class="fa fa-times-circle"></i> Hapus Semua</a>
        <a href="<?php print base_url() ?>member/setting/" class="list-group-item <?php if(isset($setting)) { echo 'active-panel-member'; } ?>"><i class="fa fa-cogs"></i> Setting</a>
      </div>
      <div class="list-group">
        <div class="list-group-item" style="background-color:#900;color:#fff">Delete account</div>
        <a href="" data-toggle="modal" data-target="#DeleteAccount" class="list-group-item"><i class="fa fa-user-times"></i> Hapus Account</a>
      </div>
    </div>
