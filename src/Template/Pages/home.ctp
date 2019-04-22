<?php
?>
<div class="page-content">
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
                        <th></th>
                        <th>Tên Công Việc</th>
                        <th>Nội Dung Công Việc</th>
                        <th>Nội Dung Hoàn Thành</th>
                        <th>Hạn Hoàn Thành</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <div class="container">
                            <input type="checkbox" />
                            <input type="checkbox" />
                            <input type="checkbox" />
                        </div>
                    </tr>

                    </tbody>
                </table>
                <br><br>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
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
    <br><br><br><br><br><br><br><br><br><br><br>
