<?php foreach ($list as $key => $value): ?>
  <div class="col-md-3 list">
    <div class="list-title"><?php echo $value['judul'] ?></div>
    <div class="list-content"><?php echo $value['deskripsi'] ?></div>
  </div>
<?php endforeach ?>