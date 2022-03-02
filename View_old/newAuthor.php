<form method="POST" enctype="multipart/form-data">
     <div class="media border p-3">
        <img src="<?=  BASE_URL;?>/assets/img/perfil.png"  class="rounded-circle" style="width:60px;">
    </div>

    <label for="picture">Foto do perfil</label>
    <input type="file" class="form-control " id="picture" name="picture">
    <label for="titulo">Nome:</label>
    <input type="text" class="form-control" placeholder="nome" id="name" name="name">
    <label for="titulo">email</label>
    <input type="text" class="form-control" placeholder="email" id="email" name="email">
    <label for="text">Biografia</label>
    <textarea type="text" class="form-control form-control-lg" name="biography"></textarea>
    <br />

    <button type="submit" class="btn btn-primary">Submit</button>
</form>