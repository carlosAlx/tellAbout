<div class="container">
     <!-- start card -->
    <div class="card card-background move-on-hover">
    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
    <div class="card-body pt-12">
        <h4 class="text-white">Search and Discovery</h4>
        <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
    </div>
    </div>
     <!-- end card-->
      <!-- start card -->
    <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a class="d-block blur-shadow-image">
            <img src="https://images.unsplash.com/photo-1593642634402-b0eb5e2eebc9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
            </a>
        </div>
        <div class="card-body  pt-4">
            <p class="text-gradient text-primary text-gradient font-weight-bold text-sm text-uppercase">Enterprise</p>
            <a href="javascript:;">
            <h4>
                Siri brings hands-free TV to more devices
            </h4>
            </a>
            <p>
            Siri's latest trick is offering a hands-free TV viewing experience, that will allow consumers to turn on or off their television, change inputs, fast forward, rewind and more, without having to first invoke a specific skill, or even
            press a button on their remote.
            </p>
            <div class="author align-items-center py-2">
                <img src="<?php echo BASE_URL ?>assets/img/team-2.jpg" alt="..." class="avatar shadow">
                <div class="name ps-3">
                    <span>Mathew Glock</span>
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