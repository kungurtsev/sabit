<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css">

    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/jquery.inputmask.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/callback-form.js"></script>

    <title>Sabit</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="index.php">Sabit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <h1>Форма</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Запустить модальное окно
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Форма обратной связи</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="form-result"></div>
                    <form id="callback-form" method="post" action=<?= $_SERVER['REQUEST_URI'] ?> >
                        <div class="form-group">
                            <label for="form-curse">Курс*</label>
                            <select name="curse" class="form-control" id="form-curse" aria-describedby="help-block-curse">
                                <option value="1">HTML и CSS, уровень 1</option>
                                <option value="2">HTML и CSS, уровень 2</option>
                                <option value="3">JavaScript, уровень 1</option>
                                <option value="4">JavaScript, уровень 2</option>
                                <option value="5">JavaScript, уровень 1</option>
                                <option value="6">PHP, уровень 1</option>
                            </select>
                            <small id="help-block-curse" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="form-name">Имя*</label>
                            <input type="text" name="name" value="" class="form-control" id="form-name" aria-describedby="help-block-name" placeholder="Иван"/>
                            <small id="help-block-name" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="form-number">Номер телефона*</label>
                            <input type="text" name="number" value="" class="form-control" id="form-number" aria-describedby="help-block-number" placeholder="+7(234)123-22-22"/>
                            <small id="help-block-number" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="form-email">Email*</label>
                            <input type="text" name="email" value="" class="form-control" id="form-email" aria-describedby="help-block-email"  placeholder="noemail@mail.ru"/>
                            <small id="help-block-email" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="form-comment">Комментарий</label>
                            <textarea name="comment" class="form-control" placeholder="Ваш комментарий" id="form-comment" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button class="btn btn-primary" id="form-submit">Заказать звонок</button>
                    <input type="submit" form="callback-form" value="ads" />
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>