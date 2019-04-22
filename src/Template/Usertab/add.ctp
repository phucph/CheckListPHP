<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usertab $usertab
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usertab'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tab'), ['controller' => 'Tab', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tab'), ['controller' => 'Tab', 'action' => 'add']) ?></li>
    </ul>
</nav>
