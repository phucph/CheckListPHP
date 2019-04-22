<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usertab[]|\Cake\Collection\CollectionInterface $usertab
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usertab'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tab'), ['controller' => 'Tab', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tab'), ['controller' => 'Tab', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usertab index large-9 medium-8 columns content">
    <h3><?= __('Usertab') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tab_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usertab as $usertab): ?>
            <tr>
                <td><?= $usertab->has('user') ? $this->Html->link($usertab->user->user_id, ['controller' => 'Users', 'action' => 'view', $usertab->user->user_id]) : '' ?></td>
                <td><?= $usertab->has('tab') ? $this->Html->link($usertab->tab->tab_id, ['controller' => 'Tab', 'action' => 'view', $usertab->tab->tab_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tab', 'action' => 'view', $usertab->tab->tab_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usertab->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usertab->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usertab->user_id)]) ?>
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
