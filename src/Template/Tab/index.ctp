<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tab[]|\Cake\Collection\CollectionInterface $tab
 */

?>
<div class="page-content" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><?= $this->Html->link(
                            '<i class="glyphicon glyphicon-home"></i>' .h('MyChecklist'),
                            ['controller'=>'Pages','action' => 'home'],
                            [
                                'escape' => false,
                            ]
                        ) ?></li>
                    <li><a href="qlcongviec.html"><i class="glyphicon glyphicon-calendar"></i> Quản Lý Công Việc</a></li>
                    <li><a href="qlduan.html"><i class="glyphicon glyphicon-stats"></i> Quản lý Dự Án</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Tên Công Việc') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Hạn Hoàn Thành') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Chức năng') ?></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($tab as $tab): ?>
                    <tr>
                        <td>
                            <ul class="list"">
                                    <li class="list-item">
                                        <input type="checkbox" class="hidden-box <?= $tab->tab_id ?>" id='<?= $tab->tab_id ?>' value="<?= $tab->checked ?>"/>
                                        <label for="<?= $tab->tab_id ?>" class="check--label">
                                            <span class="check--label-box"></span>
                                            <span class="check--label-text"><?= $this->Html->link(__("$tab->tab_name"), ['action' => 'view', $tab->tab_id]) ?></span>
                                        </label>
                                    </li>
                            </ul>
                        </td>
                        <td><?= h($tab->deadline) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $tab->tab_id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'check', $tab->tab_id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tab->tab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tab->tab_id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <br><br>
                <div class="paginator pager">
                    <ul class="pagination pager">
                        <li><?= $this->Paginator->first('<< ' . __('first')) ?></li>
                        <li> <?= $this->Paginator->prev(' ' . __('previous')) ?></li>
                        <li><?= $this->Paginator->numbers() ?></li>
                        <li> <?= $this->Paginator->next(__('next') . ' ') ?></li>
                        <li><?= $this->Paginator->last(__('last') . ' >>') ?></li>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div>
                <br><br>

                <p style="text-align:center">
                    <button class="btn btn-info" data-toggle="modal" data-target="#Them"><i class="glyphicon glyphicon-plus"></i> Thêm</button>

                    <button class="btn btn-primary"data-toggle="modal" data-target="#sua"><i class="glyphicon glyphicon-pencil"></i> Sửa</button>
                    <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa</button>
                    <button class="btn btn-default"><i class="glyphicon glyphicon-share"></i> Chia sẻ</button>
                </p>
                <div class="modal fade" id="Them" role="dialog">      <!-- form  thêm -->
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Thêm Công Việc</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Tên công việc</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung công việc</label>
                                    <input type="text" class="form-control" id="">
                                    <br>
                                    <button class="btn btn-info"style=""><i class="glyphicon glyphicon-plus" ></i> add</button>
                                </div>
                                <div class="form-group">
                                    <label for="name">Hạn hoàn thành</label>
                                    <input type="date" name="date">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p>
                                    <button class="btn btn-info"style=""><i></i> Thêm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="sua" role="dialog">      <!-- form  sửa-->
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Sửa Công Việc</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Tên công việc</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung công việc</label>
                                    <input type="text" class="form-control" id="">
                                    <br>
                                    <button class="btn btn-info"style=""><i class="glyphicon glyphicon-plus" ></i> add</button>
                                </div>
                                <div class="form-group">
                                    <label for="name">Hạn hoàn thành</label>
                                    <input type="date" name="date">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p>
                                    <button class="btn btn-info"style=""><i></i>Sửa</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tab'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tab index large-9 medium-8 columns content">
    <h3><?= __('Tab') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tab_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tab_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tab_parent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('checked') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $this->Number->format($tab->tab_id) ?></td>
                <td><?= h($tab->tab_name) ?></td>
                <td><?= $this->Number->format($tab->tab_parent) ?></td>
                <td><?= h($tab->created) ?></td>
                <td><?= h($tab->deadline) ?></td>
                <td><?= $this->Number->format($tab->checked) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tab->tab_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tab->tab_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tab->tab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tab->tab_id)]) ?>
                </td>
            </tr>

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
