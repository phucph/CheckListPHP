<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New File'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="file index large-9 medium-8 columns content">
    <h3><?= __('File') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_file') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_path') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($file as $file): ?>
            <tr>
                <td><?= $this->Number->format($file->file_id) ?></td>
                <td><?= h($file->name_file) ?></td>
                <td><?= h($file->file_path) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $file->file_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $file->file_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $file->file_id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->file_id)]) ?>
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
