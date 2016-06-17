<?php include('../_partials/top.php') ?>

<h1 class="page-header">Galeri</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<div class="row">
  <?php foreach ($data_galeri as $galeri): ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="../../assets/upload/<?php echo $galeri['path_galeri'] ?>" data-lightbox="galeri" data-title="<?php echo $galeri['caption_galeri'] ?>">
        <img src="../../assets/upload/<?php echo $galeri['path_galeri'] ?>">
      </a>
      <div class="caption">
        <p><?php echo $galeri['caption_galeri'] ?></p>
        <p><small><?php echo $galeri['tautan_galeri'] ?></small></p>
        <p>
          <a href="../../assets/upload/<?php echo $galeri['path_galeri'] ?>" data-lightbox="galeri2" data-title="<?php echo $galeri['caption_galeri'] ?>" class="btn btn-primary btn-sm" role="button">
            <i class="glyphicon glyphicon-zoom-in"></i>
          </a>
          <a href="delete.php?id_galeri=<?php echo $galeri['id_galeri'] ?>&path_galeri=<?php echo $galeri['path_galeri'] ?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin hapus foto ini?')">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<?php include('../_partials/bottom.php') ?>
