<h3 class="mb-5">Edição de página</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="título da página" required value="<?php echo $data['page']['title']; ?>">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="URL" id="pagesUrl"  type="text" class="form-control" placeholder="URL amigável" value="<?php echo $data['page']['URL']; ?>">
        </div>
    </div>

    <div class="form-group">
        <!--<input id="pagesBody" type="hidden" name="body" value="<h3>Página inicial</h3><div>Esta é a página inicial do site</div>">
        <trix-editor input="pagesBody"></trix-editor>-->
        <label for="exampleFormControlTextarea1">Descrição:</label>
        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo htmlentities($data['page']['body']); ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">salvar</button>
</form>

<hr>

<a href="../../pages/<?php echo $data['page']['id']; ?>" class="btn btn-secondary">voltar</a>
