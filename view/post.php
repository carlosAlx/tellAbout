<div class="container">   
    <div class="card-body pt-12">
        <h4 class="text">Post</h4>
    </div>
      <!-- start card -->
    <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a class="d-block blur-shadow-image">
            <img src="<?php echo BASE_URL . 'media/image/' . $postId['image']?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
            </a>
        </div>
        <div class="card-body  pt-4">
            <h4>
                <?= $postId['title']?>
            </h4>
            </a>
            <p>
            <?= $postId['text']?>
            </p>
            <div class="author align-items-center py-2">
                <img src="<?php echo BASE_URL . 'media/image/' . $postId['picture']?>" alt="..." class="avatar shadow">
                <div class="name ps-3">
                    <span><?= $postId['name']?></span>
                    <div class="stats">
                        <small>Posted on 28 February</small>
                    </div>
                </div>
            </div>
            <?php $this->loadView('comment', $viewData) ?> 
        </div>
    </div>
    <!-- END card -->
</div>