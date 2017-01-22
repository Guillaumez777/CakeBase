
<h1>Ajouter un article</h1>

<?= $this->Form->create($article); ?>
<?= $this->Form->input('title') ?>
<?= $this->Form->input('body', ['rows' => '3']) ?>
<?= $this->Form->button(__('Sauvegarder l"article')) ?>
<?= $this->Form->end(); ?>
<?= $this->Html->link('Retour', ['action' => 'index']) ?>