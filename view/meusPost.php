<div class="container">
  <div class="row py-4">
    <!-- start list -->
    <?php foreach ($post as $keypost) : ?>
    <div class="col-lg-4 col-8 py-2">
      <div class="card card-profile overflow-hidden">
        <div class="card-body text-center bg-white shadow border-radius-lg p-3">
          <a href="javascript:;">
            <img class="w-100 border-radius-md" src="<?php echo BASE_URL ?>assets/img/anastasia.jpg">
          </a>
          <h5 class="mt-3 mb-1 d-md-block d-none">
            <?= $keypost['title'] ?>
          </h5>
          <a class="btn btn-outline-info" href="<?php echo BASE_URL . 'post/update/' . $keypost['id'] ?>">Editar</a>
          <button type="button" class="btn btn-outline-danger"><a href="">Excluir</a></button>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    <!-- end list-->
  </div>
</div>
