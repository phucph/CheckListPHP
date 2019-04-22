<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tabfile $tabfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tabfile'), ['action' => 'edit', $tabfile->file_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tabfile'), ['action' => 'delete', $tabfile->file_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabfile->file_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tabfile'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabfile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List File'), ['controller' => 'File', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'File', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tab'), ['controller' => 'Tab', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tab'), ['controller' => 'Tab', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tabfile view large-9 medium-8 columns content">
    <h3><?= h($tabfile->file_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= $tabfile->has('file') ? $this->Html->link($tabfile->file->file_id, ['controller' => 'File', 'action' => 'view', $tabfile->file->file_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tab') ?></th>
            <td><?= $tabfile->has('tab') ? $this->Html->link($tabfile->tab->tab_id, ['controller' => 'Tab', 'action' => 'view', $tabfile->tab->tab_id]) : '' ?></td>
        </tr>
    </table>
</div>
