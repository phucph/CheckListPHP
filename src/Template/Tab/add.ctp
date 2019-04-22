<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tab $tab
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tab'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tab form large-9 medium-8 columns content">
    <?= $this->Form->create($tab) ?>
    <fieldset>
        <legend><?= __('Add Tab') ?></legend>
        <?php
            echo $this->Form->control('tab_name');
            echo $this->Form->control('tab_parent');
            echo $this->Form->control('created', ['type' => 'hidden', 'value' =>date('Y-m-d H:i:s')]);
            echo $this->Form->control('deadline');
            echo $this->Form->control('note');
            echo $this->Form->control('checked');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
