  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Ultimos posts</h3>
        </div>
      </div>
     
      <div class="row py-4">
      <!-- start list -->
      <?php foreach ($postLast as $keypost) : ?>
        <div class="col-lg-4 col-8 py-2">
          <div class="card card-profile overflow-hidden">
              <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                <a href="<?php echo BASE_URL . 'post/id/' . $keypost['id']?>">
                  <img class="w-100 border-radius-md" src="<?php echo BASE_URL ?>assets/img/anastasia.jpg">
                </a>
                <h5 class="mt-3 mb-1 d-md-block d-none"><?= $keypost['title'] ?></h5>              
                <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">by <?= $keypost['name'] ?></p>
              </div>
          </div>
        </div>
      <?php endforeach ?>
      <!-- end list-->
      </div>     
    </div>
  </section>
  <!-- END Section with four info areas left & one card right with image and waves -->
  <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
  <section class="pt-sm-8 pb-5 position-relative bg-gradient-dark">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-down">
              <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Membros</h3>
        </div>
      </div>
      <div class="row">
      <?php foreach ($userList as $keyUser) : ?>
        <div class="col-lg-6 col-12 py-2">
          <div class="card card-profile overflow-hidden z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" src="<?php echo BASE_URL .'media/image/' . $keyUser['picture']?>" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0"><?= $keyUser['name'] ?></h5>
                  <p><?= $keyUser['biography'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>


    <div class="position-absolute w-100 bottom-0 mn-n1">
      <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-up" transform="translate(0.000000, -5.000000)">
              <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z" fill="#f8f9fa"></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section>
  <!-- -------- END Features w/ pattern background & stats & rocket -------- -->