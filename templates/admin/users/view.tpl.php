<h3 class="mb-5">Administração de usuários</h3>

<dl class="rol">
    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?php echo $data['user']['email']; ?></dd>

    <dt class="col-sm-3">Criado em</dt>
    <dd class="col-sm-9"><?php echo $data['user']['created']; ?></dd>

    <dt class="col-sm-3">Atualizado em</dt>
    <dd class="col-sm-9"><?php echo $data['user']['updated']; ?></dd>
</dl>

<p>
    <a href="../users/<?php echo $data['user']['id']; ?>/edit" class="btn btn-primary">editar</a>
    <a href="../users/<?php echo $data['user']['id']; ?>/delete" class="btn btn-danger">remover</a>
</p>

<a href="../users" class="btn btn-secundary">Voltar</a>

