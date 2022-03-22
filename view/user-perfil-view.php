  <!-- START Testimonials w/ user image & text & info -->
  <section class="py-sm-7 py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="row py-lg-7 py-5">
            <div class="col-lg-3 col-md-5 position-relative my-auto">
              <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="<?php echo BASE_URL . 'media/image/' . $_SESSION['ImgUser'] ?>" alt="bruce">
            </div>
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h4 class="mb-0"><?=  $_SESSION['NameUser'] ?></h4>
                <div class="d-block">
                  <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
                </div>
              </div>     
          
              <div class="row mb-4">
                <div class="col-auto">
                  <span class="h6"><?= $totalPost ?></span>
                  <span>Posts</span>
                </div>
                <!--
                <div class="col-auto">
                  <span class="h6">3.5k</span>
                  <span>Followers</span>
                </div>
                <div class="col-auto">
                  <span class="h6">260</span>
                  <span>Following</span>
                </div>
              </div>
-->
              <p class="text-lg mb-0">
                <?=  $_SESSION['BioUser'] ?>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Testimonials w/ user image & text & info -->
  <!-- 
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Post do usuario</h3>
        </div>
      </div>
  
      <div class="row py-4">
 //     <?php foreach ($userPost as $keypost) : ?>
        <div class="col-lg-4 col-8 py-2">
          <div class="card card-profile overflow-hidden">
              <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                <a href="javascript:;">
                  <img class="w-100 border-radius-md" src="<?php echo BASE_URL ?>assets/img/anastasia.jpg">
                </a>
                <h5 class="mt-3 mb-1 d-md-block d-none"><?= $keypost['title'] ?></h5>              
                <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">Credit Analyst</p>
              </div>
          </div>
        </div>
   //   <?php endforeach ?>
      </div>    
      
    </div>
  </section>
 -->
