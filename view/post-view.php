<div class="page-header">
  <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4" style="background-image: url(<?php echo BASE_URL ?>assets/img/ivancik.jpg); background-size: cover;">
  </div>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-7 d-flex justify-content-center flex-column">
        <div class="card card-body d-flex justify-content-center shadow-lg p-5 blur align-items-center">
          <h3 class="text-center">Post</h3>
          <form role="form" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">
                <div class="mb-4">
                  <label>Titulo</label>
                  <div class="input-group">
                    <input class="form-control" 
                    <?php if (isset($text)) : ?>
                      value="<?php  echo $title; ?>" 
                    <?php endif ?> 
                    name="title" placeholder="titulo" aria-label="title" type="text">
                  </div>
                </div>
                <div class="mb-4">
                  <label>Usuario</label>
                  <div class="input-group">
                    <input type="text"   
                    <?php if (isset($id)) : ?>
                      value="<?php  echo $id; ?>" 
                    <?php endif ?> 
                    class="form-control" placeholder="" aria-label="usuario">
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <label>Imagem</label>
                <div class="input-group">
                  <input type="file" 
                    <?php if (isset($image)) : ?>
                      value="<?php  echo 'media/image/' . $image; ?>" 
                    <?php endif ?> 
                  class="form-control" name="image">
                </div>
                <input type="hidden"   name="imageOld" 
                  <?php if (isset($image)) : ?>
                    value="<?php  echo $image; ?>" 
                  <?php endif ?> >
              </div>
              <div class="form-group mb-4">
                <label>Texto</label>
                <textarea name="text" class="form-control" id="text" rows="4"><?php if (isset($text)) { echo $text; } ?>
                </textarea>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-check form-switch mb-4">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                    <label class="form-check-label" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn bg-gradient-dark w-100">Salvar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
