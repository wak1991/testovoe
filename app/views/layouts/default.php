<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?= $this->getMeta(); ?>
</head>
<body>
<section class="content">
    <div class="container">
        <div>
            <?php if(isset($_SESSION['size1'])): ?>
                <div class="alert alert-warning">
                    <?php echo $_SESSION['size1']; unset($_SESSION['size1']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['size2'])): ?>
                <div class="alert alert-warning">
                    <?php echo $_SESSION['size2']; unset($_SESSION['size2']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['size3'])): ?>
                <div class="alert alert-warning">
                    <?php echo $_SESSION['size3']; unset($_SESSION['size3']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['type1'])): ?>
                <div class="alert alert-warning">
                    <?php echo $_SESSION['type1']; unset($_SESSION['type1']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['type2'])): ?>
                <div class="alert alert-warning">
                    <?php echo $_SESSION['type2']; unset($_SESSION['type2']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['type3'])): ?>
                <div class="alert alert-warning">
                    <?php echo $_SESSION['type3']; unset($_SESSION['type3']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- Модальное окно -->
        <div class="footer">
            <div class="row">
                <div class="col-xl-10 col-md-10">
                    <p>Список товаров</p>
                </div>
                <div class="col-xl-2 col-md-2">
                    <a href="#myModal" id="btn" class="btn btn-primary">Добавить товар</a>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Добавление нового товара</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="form" action="<?= PATH; ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Имя товара</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите название товара" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <!--             Загрузка картинок                   -->
                                <label for="img">Выберите картинки для загрузки</label>
                                <p><input type="file" name="img1"></p>
                                <p><input type="file" name="img2"></p>
                                <p><input type="file" name="img3"></p>
                                <!--             Загрузка картинок                   -->
                                <button type="submit" class="btn btn-primary new">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Модальное окно -->
        <?= $content; ?>
    </div> <!-- /.container -->
</section>


<?php
/*$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug($logs->grep('SELECT'));
*/?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>