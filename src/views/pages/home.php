<?php $render('header'); ?>

</br>
<a href="<?= $base ?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <th><?=$usuario['id']; ?></th>
        <th><?= $usuario['name']; ?></th>
        <th><?= $usuario['email']; ?></th>
        <th>
            <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">[ editar ]</a>
            <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">[ excluir ]</a>
        </th>
    </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>