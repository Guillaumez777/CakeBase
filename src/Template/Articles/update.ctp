<h1>Article à modifier</h1>
<?= $this->Form->create($article) ?>
<?= $this->Form->input('title') ?>
<?= $this->Form->input('body', ['rows' => '3']) ?>
<?= $this->Form->button(__('Sauvegarder l"article')) ?>
<div class="btn btn-primary"><?= $this->Html->link('Retour', ['action' => 'index']) ?></div>
<?= $this->Form->end() ?>
