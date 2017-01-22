<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created : <?= $article->created->format(DATE_RFC850) ?></small></p>
<div class="btn btn-primary"><?= $this->Html->link('Retour', ['action' => 'index']) ?></div>