<div class="page-header">
  <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4" style="background-image: url(<?php echo BASE_URL ?>assets/img/people.jpg); background-size: cover;">
  </div>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-7 d-flex justify-content-center flex-column">
        <div class="card card-body d-flex justify-content-center shadow-lg p-5 blur align-items-center">
          <h3 class="text-center">Usuario</h3>
          <form role="form"  method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">
                <div class="mb-4">
                  <label>Nome</label>
                  <div class="input-group">
                    <input class="form-control"
                      <?php if (isset($name)) : ?>
                        value="<?php  echo $name; ?>" 
                      <?php endif ?>                    
                    name="name" placeholder="nome" aria-label="title" type="text">
                  </div>
                </div>
                <div class="mb-4">
                  <label>Email/Login</label>
                  <div class="input-group">
                    <input type="text" 
                      <?php if (isset($email)) : ?>
                        value="<?php  echo $email; ?>" 
                      <?php endif ?>
                    name="email" class="form-control" placeholder="email" aria-label="usuario">
                  </div>
                </div>
                <div class="mb-4">
                  <label>Senha</label>
                  <div class="input-group">
                    <input type="password" 
                      <?php if (isset($password)) : ?>
                        value="<?php  echo $password; ?>" 
                      <?php endif ?>
                    name="password" class="form-control" placeholder="password" aria-label="password">
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <label>Imagem do perfil</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="picture" name="picture">
                </div>
              </div>
              <input type="hidden"   name="imageOld" 
                  <?php if (isset($picture)) : ?>
                    value="<?php  echo $picture; ?>" 
                  <?php endif ?> >              
              <div class="form-group mb-4">
                <label>Biografia</label>
                <textarea name="biography" class="form-control" id="message" rows="4"><?php if (isset($biography)) { echo $biography; } ?></textarea>
              </div>
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
