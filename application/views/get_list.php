<?php foreach ($list as $key => $value): ?>
  <div class="col-md-3 list">
    <div class="list-title">
    	<?php echo $value['judul'] ?>
    	<button type="button" class="close btn_hapus" data-id="<?php echo $value['id_list'] ?>" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="list-content"><?php echo $value['deskripsi'] ?></div>
  </div>
<?php endforeach ?>