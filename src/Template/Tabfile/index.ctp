<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tabfile[]|\Cake\Collection\CollectionInterface $tabfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tabfile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List File'), ['controller' => 'File', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'File', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tab'), ['controller' => 'Tab', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tab'), ['controller' => 'Tab', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabfile index large-9 medium-8 columns content">
    <h3><?= __('Tabfile') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tab_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tabfile as $tabfile): ?>
            <tr>
                <td><?= $tabfile->has('file') ? $this->Html->link($tabfile->file->file_id, ['controller' => 'File', 'action' => 'view', $tabfile->file->file_id]) : '' ?></td>
                <td><?= $tabfile->has('tab') ? $this->Html->link($tabfile->tab->tab_id, ['controller' => 'Tab', 'action' => 'view', $tabfile->tab->tab_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tabfile->file_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tabfile->file_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tabfile->file_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabfile->file_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
