<div class="container">
<div class="card-columns listrecent">
<?php foreach ($post as $postKey) : ?>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">
        <?php echo $postKey['title'] ?>
      </h4>
      <img class="img-thumbnail" src="<?php echo BASE_URL . 'media/image/' . $postKey['image'] ?>">
      <p class="card-text">e aw</p>
      <a href="#"  class="btn btn-outline-secondary">Acessar post</a>
      <a href="<?php echo BASE_URL . 'post/updatePost/' . $postKey['id'] ?>" class="btn btn-outline-secondary">Editar Post</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div>