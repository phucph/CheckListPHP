<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usertab $usertab
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usertab'), ['action' => 'edit', $usertab->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usertab'), ['action' => 'delete', $usertab->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usertab->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usertab'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usertab'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tab'), ['controller' => 'Tab', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tab'), ['controller' => 'Tab', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usertab view large-9 medium-8 columns content">
    <h3><?= h($usertab->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usertab->has('user') ? $this->Html->link($usertab->user->user_id, ['controller' => 'Users', 'action' => 'view', $usertab->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tab') ?></th>
            <td><?= $usertab->has('tab') ? $this->Html->link($usertab->tab->tab_id, ['controller' => 'Tab', 'action' => 'view', $usertab->tab->tab_id]) : '' ?></td>
        </tr>
    </table>
</div>
