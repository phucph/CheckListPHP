<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tabfile $tabfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tabfile'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List File'), ['controller' => 'File', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'File', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tab'), ['controller' => 'Tab', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tab'), ['controller' => 'Tab', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabfile form large-9 medium-8 columns content">
    <?= $this->Form->create($tabfile) ?>
    <fieldset>
        <legend><?= __('Add Tabfile') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
