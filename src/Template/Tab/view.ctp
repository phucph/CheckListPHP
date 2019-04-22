<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tab $tab
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tab'), ['action' => 'edit', $tab->tab_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tab'), ['action' => 'delete', $tab->tab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tab->tab_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tab'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tab'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tab view large-9 medium-8 columns content">
    <h3><?= h($tab->tab_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tab Name') ?></th>
            <td><?= h($tab->tab_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tab Id') ?></th>
            <td><?= $this->Number->format($tab->tab_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tab Parent') ?></th>
            <td><?= $this->Number->format($tab->tab_parent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Checked') ?></th>
            <td><?= $this->Number->format($tab->checked) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tab->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= h($tab->deadline) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($tab->note)); ?>
    </div>
</div>
