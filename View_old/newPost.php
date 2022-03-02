<form method="POST" enctype = "multipart/form-data">
    <?php if (isset($erro) && !empty($erro)) :
        ?> 
        <div class="warn"><?php echo $erro; ?></div>
    <?php endif; ?>
    
    <label for="author" >Author:</label>
    <input type="text" class="form-control"  placeholder="author" id="author" name="author">
    <label for="title" >Titulo:</label>
    <input type="text" class="form-control"  placeholder="title" id="title" name="title">
    <label for="image" >Image</label>
    <input type="file" class="form-control " id="image" name="image">
    <label for="text">Texto</label>
    <input type="text" class="form-control form-control-lg" id="text" name="text">
    <br/>
  
    <input type="submit" class="btn btn-primary">
</form>
