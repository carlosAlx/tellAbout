<form method="POST" enctype = "multipart/form-data">
    <?php if (isset($erro) && !empty($erro)) :
        ?> 
        <div class="alert-danger"><?php echo $erro; ?></div>
    <?php endif; ?>
    
    <label for="author" >Author:</label>
    <input type="text" class="form-control"  placeholder="author" id="author" name="author" value="<?php echo $author ?>">
    <label for="title" >Titulo:
    <input type="text" class="form-control"  placeholder="title" id="title" name="title"value="<?php echo $title ?>">
    <label for="image" >Image Antiga</label>
    <br>
    <img class="img-thumbnail"src="<?php echo BASE_URL . 'media/image/' . $image ?>" style="width: 10%;">
    <br>
    <label for="image" >Image nova  </label>
    <br>
    <input type="hidden" name="imageOld" value="<?php echo $image ?>">
    <input class="file-chooser" type="file" class="form-control " id="image" name="image" >
    <br>
    <img class="preview-img">
    <br>
    <label for="text">Texto</label>
    <input type="text" class="form-control form-control-lg" id="text" name="text" url="<?php echo $text ?>" accept="image/png,image/jpeg" >
    <br/>
  
    <input type="submit" class="btn btn-primary" name="Salvar">
</form>
