<a class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse"
    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
    Ver Comentarios
    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
</a>

<?php foreach ($comment as $keyComment) : ?>
<div id="collapseOne" class="accordion-collapse collapse py-1" aria-labelledby="headingOne">

    <div class="card card-body py-2">
        <div class="accordion-body text-sm py-0">
            <!-- start foto do perfil -->
            <div class="author ">
                <img src="<?php echo BASE_URL . 'media/image/' . $keyComment['picture'] ?>" alt="..."
                    class="avatar shadow">
                <div class="name ps-3">
                    <span>Mathew Glock</span>
                    <div class="stats">
                        <small>Posted on 28 Feb</small>
                    </div>
                    <span class="badge badge-info">Comentario</span>
                    <a>
                       <?php echo $keyComment['text'] ?>
                    </a>
                </div>
            </div>
            <!-- end foto do perfil -->
        </div>
    </div>
</div>

<?php endforeach ?>

