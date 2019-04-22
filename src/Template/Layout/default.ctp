<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css("https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css") ?> <!--thêm để show icoon gly-->
    <?= $this->Html->css('bootstrap.min')?>
    <?= $this->Html->css('check')?>
    <?= $this->Html->script('https://code.jquery.com/jquery.js',[ 'block' => 'scriptBottom']) ?>
    <?= $this->Html->script('http://code.jquery.com/jquery-1.9.1.js',[ 'block' => 'scriptBottom']) ?>
    <?= $this->Html->script('bootstrap',[ 'block' => 'scriptBottom']) ?>
    <?= $this->Html->script('check',[ 'block' => 'scriptBottom']) ?>
    <?= $this->Html->css('styles') ?>
    <!-- Fetch meta, css, script -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
<div class="header text-center">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="logo">
                <h1><?= $this->Html->link(__('Check List '), ['controller'=>'Pages','action' => 'home']) ?> </h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group form mb-3">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Tìm</button>
                </span>
            </div>
        </div>
        <div class="col-md-3 acc">
            <div class="navbar navbar-inverse" role="banner">
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-button" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeInUp">
                                <li><a href="hoso.html">Hồ Sơ </a></li>
                                <li><a href="thongbao.html">Thông Báo </a></li>
                                <li><a href="dangnhap.html">Đăng Xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>



<?= $this->Flash->render() ?>
<div class="container-fluid">
    <?= $this->fetch('content') ?>
</div>

<!--Page Footer -->
 <footer>
    <div class="container">

        <div class="copy text-center">
            Hệ Thống CheckList <a href='#'>Website</a>
        </div>

    </div>
</footer>
<?= $this->fetch('scriptBottom') ?>
<script>
    $(document).ready(function() {
        // javascript & jquery code
        // even better would be if you would put client code in separate file!!
        $(".hidden-box").on("click", function (e){
           var id= $(this).attr('id');
           var status=$(this).attr('value');
           var field= "hidden-box "+id;
           alert(field);
          // alert(id);
            e.preventDefault();// Stops default behavior
            $.ajax({
                type: 'GET',
                dataType: "json",
                url: '<?= $this->Url->build(['controller' => 'tab', 'action' => 'check']) ?>' + "/" + id,
                success: function () {
                    alert(status);
                    if(status==0){
                    $('.'+field).attr( 'checked', true);
                    //     $(id).attr('checked', true)
                    } else {
                        $('.'+field).attr( 'checked', false);
                     }
                    }
                })
            });
        });
</script>
</body>
</html>
