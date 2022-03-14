<div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Posts</h3>
        </div>
      </div>
    <div class="row py-1">
    
        <?php foreach ($post as $keypost) : ?>
        <div class="col-lg-6 py-1">
          <div class="card card-profile overflow-hidden">
              <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                <a href="<?= BASE_URL . 'post/id/' . $keypost['id']?>">
                    <h5 class="mb-1 d-md-block d-none"><?= $keypost['title'] ?></h5>
                  <img class="w-100 border-radius-md" src="<?php echo BASE_URL . 'assets/img/' . $keypost['image']?>">
                </a>
              </div>
          </div>
        </div>
        <?php endforeach ?>
    </div>
    <!--start paginação-->
  
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-lg">
            <li class="page-item">
                <a class="page-link" href="<?php echo BASE_URL . 'post/?p=' . ($currentPage - 1) ?>" aria-label="Previous">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>           
            </li>
            <?php for ($q = 1; $q <= $numberOfPage; $q++) : ?>
                <li class="page-item <?php echo ($currentPage == $q) ? 'active' : ''; ?>"><a class="page-link" href="<?php echo BASE_URL . 'post/?p=' . $q ?>"><?php echo $q ?></a></li>
            <?php endfor ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo BASE_URL . 'post/?p=' . ($currentPage + 1) ?>" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </li>
            
        </ul>
    </nav>
    <!-- end paginação -->
</div>
