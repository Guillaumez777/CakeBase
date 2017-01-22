<!DOCTYPE html>
<html>
<head>
	<title>Index de la page</title>
	<?= $this->Html->css('style') ?>
	<?= $this->Html->css('bootstrap') ?>
</head>

<body>	
	<div class="col-sm-12"><h1>Tous les articles du Blog</h1></div>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Modifier</th>
        <th>Effacer</th>
    </tr>
	<?php foreach ($articles as $article): ?>

	<tr>

		<td><?= $article->id  ?></td>

		<td><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></td>

		<td><?= $article->created->format(DATE_RFC850) ?></td>

		<td><div class="col-sm-6 btn btn-info"><?= $this->Html->link('Modifier', ['action' => 'update', $article->id]) ?></div></td>

		<td><div class="col-sm-6 btn btn-danger">
		<?= $this->Form->postLink('Supprimer', 
									['action' => 'delete', $article->id], 
									['confirm' => 'Vous ete sur ?']) 
		?></div></td>

	</tr>

    <?php endforeach; ?>

</table>

<div class="col-sm-12 btn btn-primary"><?= $this->Html->link('Ajouter un articles', ['action' => 'add']) ?></div>
</body>
</html>