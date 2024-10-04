<?php $render('header'); ?>

<p>Meu nome é: <?= $nome; ?></p>

<hr>

<?php foreach ($posts as $post): ?>
<h2><?php echo $post['titulo'];?></h2>
<p><?php echo $post['conteudo'];?></p>
<?php endforeach; ?>
