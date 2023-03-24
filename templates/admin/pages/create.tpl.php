<h3 class="mb-5">Nova página</h3>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="título da página" required>
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="URL" id="pagesUrl"  type="text" class="form-control" placeholder="URL amigável">
        </div>
    </div>

    <div class="form-group">
        <!--<input id="pagesBody" type="hidden" name="body">
        <trix-editor input="pagesBody"></trix-editor>-->
        <label for="exampleFormControlTextarea1">descrição:</label>
        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div>
        <p><label for="pagesImage">Selecione os arquivos:</label></p>
        <input type="file" id="file" name="arquivo[]" class="input-group-text" multiple>
    </div>
    <?php 

    
        /*if(isset($_FILES['arquivo'])) {
            $arquivo = $_FILES['arquivo'];
            if($arquivo['error'])
                die("Falha ao enviar");
            if($arquivo['size'] > 8388608) 
                die("Arquivo muito grande! Max 8MB");

            $path = "SchoolOfNet/aulaPHP/P/admin/files/";
            $fileName = $arquivo['name'];
            $newFileName = uniqid();
            $extensao = strtolower(pathinfo($newFileName, PATHINFO_EXTENSION));

            if($extensao != "jpg" && $extensao != "png" && $extensao != "pdf")
                die("Tipo de arquivo inválido!");
            
            $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path . $newFileName . "." . $extensao);

        }*/

    ?>
    <br>

    <button name="envio" type="submit" class="btn btn-primary">salvar</button>
</form>

<hr>

<a href="../../admin/pages" class="btn btn-secondary">voltar</a>
