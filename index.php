<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DADDY APPLE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!-- LOADER -->
<div class="loader">
    <div class="loader_inner">
    </div>
</div>

<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href=""><img src="img/logo.png" class="logo" alt="LOGO"></a>
            <h4 style="float: right; padding: 20px 20px 0 0; ">+38 095 55 5555</h4>
        </div>
        <br>

        <div class="row">
            <img class="img-responsive" src="img/fon.png">
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <select name="model" class="btn btn-lg btn-default select">
                    <option value="">Виберіть модель:</option>
                    <option value="iphone5s">iPhone 5S</option>
                    <option value="iphone6">iPhone 6</option>
                    <option value="iphone6plus">iPhone 6+</option>
                    <option value="iphone6s">iPhone 6S</option>
                    <option value="iphone6splus">iPhone 6S+</option>
                    <option value="iphone7">iPhone 7</option>
                    <option value="iphone7plus">iPhone 7+</option>
                </select>
            </div>
        </div>


        <div class="">
            <div class="col-xs-12 well text-left admin-content" id="">
                <h2 class="text-center"></h2>
                <form id="defaultForm" action="inst-lead-form.php" method="post">
                    <textarea name="model" id="test" style="display: none"></textarea>
                    <!--                    <div class="form-group">-->
                    <!--                        <label class="control-label" for="name">Iм'я</label>-->
                    <!--                        <input type="text" class="form-control" name="name" data-minlength="3"-->
                    <!--                               data-error="Введіть ім'я"-->
                    <!--                               placeholder="Ваше ім'я" required>-->
                    <!--                        <div class="help-block with-errors"></div>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group">-->
                    <!--                        <label for="phone">Телефон</label>-->
                    <!--                        <input type="tel" class="form-control" id="phone1" name="phone"-->
                    <!--                               placeholder="Ваш телефон"-->
                    <!--                               data-error="Введіть телефон" required>-->
                    <!--                        <div class="help-block with-errors"></div>-->
                    <!--                    </div>-->
                    <div class="device-color">
                        <h5>Виберіть колір</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn silver radio-btn-1 radius-right-left">
                                <input type="radio" name="color" autocomplete="off" value="silver" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> SILVER</span>
                            </label>

                            <label class="btn gold radio-btn-1 radius-right-left">
                                <input type="radio" name="color" autocomplete="off" value="gold" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> GOLD</span>
                            </label>

                            <label class="btn space radio-btn-1 radius-right-left">
                                <input type="radio" name="color" autocomplete="off" value="space" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> GRAY</span>
                            </label>

                            <label class="btn rose radio-btn-1 radius-right-left">
                                <input type="radio" name="color" autocomplete="off" value="rose" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> ROSE</span>
                            </label>

                            <label class="btn black radio-btn-1 radius-right-left">
                                <input type="radio" name="color" autocomplete="off" value="black" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> BLACK</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="memory">
                        <h5>Виберіть пам'ять</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn 16gb btn-default radio-btn-2 radius-right-left">
                                <input type="radio" name="memory" autocomplete="off" value="16GB" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> 16GB</span>
                            </label>

                            <label class="btn 23gb btn-default radio-btn-2 radius-right-left">
                                <input type="radio" name="memory" autocomplete="off" value="32GB" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> 32GB</span>
                            </label>

                            <label class="btn 64gb btn-default radio-btn-2 radius-right-left">
                                <input type="radio" name="memory" autocomplete="off" value="64GB" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> 64GB</span>
                            </label>

                            <label class="btn 128gb btn-default radio-btn-2 radius-right-left">
                                <input type="radio" name="memory" autocomplete="off" value="128GB" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> 128GB</span>
                            </label>

                            <label class="btn 256gb btn-default radio-btn-2 radius-right-left">
                                <input type="radio" name="memory" autocomplete="off" value="256GB" required>
                                <span class="glyphicon glyphicon-ok"></span><span class="tip"> 256GB</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-custom">ЗАМОВИТИ</button>
                        <!--                        <a href="inst-lead-form.php" class="btn btn-custom" target="_blank">продовжити</a>-->
                    </div>

                </form>
            </div>
        </div>
    </div>

</header>
<?php


?>
<!-- Scripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>

</body>
</html>