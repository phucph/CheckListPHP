<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit File'), ['action' => 'edit', $file->file_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete File'), ['action' => 'delete', $file->file_id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->file_id)]) ?> </li>
        <li><?= $this->Html->link(__('List File'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="file view large-9 medium-8 columns content">
    <h3><?= h($file->file_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name File') ?></th>
            <td><?= h($file->name_file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Path') ?></th>
            <td><?= h($file->file_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Id') ?></th>
            <td><?= $this->Number->format($file->file_id) ?></td>
        </tr>
    </table>
</div>
