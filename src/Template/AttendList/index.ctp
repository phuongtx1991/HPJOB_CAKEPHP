<!DOCTYPE html>
<html lang="en">
<head>
    <title>一覧(スマホ)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('user.css') ?>
    <?= $this->Html->script('jquery-3.1.1.min.js') ?>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-4 col-lg-offset-4 bg-primary text-center" style="height: 55px;padding-top:15px">
            <b>氏名：　<strong>瀬川 英則</strong></b>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-lg-4 col-lg-offset-4">
            <div class="col-xs-4 col-lg-4 col-lg-offset-1 text-center">
                <h1 class="text-center text-primary">3</h2>
            </div>
            <div class="col-xs-8 col-lg-7" style="margin-top:20px;">
                <div class="row row-10">
                    <div class="col-xs-3 col-lg-3 ">
                        <button type="button" class="btn btn-primary btn-block"><</button>
                    </div>
                    <div class="col-xs-6 col-lg-6">
                        <button type="button" class="btn btn-primary btn-block">今月</button>
                    </div>
                    <div class="col-xs-3 col-lg-3">
                        <button type="button" class="btn btn-primary btn-block">></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4 col-lg-offset-4">
            <div class="col-xs-4 col-lg-4 col-lg-offset-1 text-center">
                <h1 class="text-center text-primary" style="margin-top:-5px;">月</h3>
            </div>
            <div class="col-xs-8 col-lg-7">
                <div class="row row-10">
                    <div class="col-xs-3 col-lg-3">
                        <button type="button" class="btn btn-primary  btn-block"><</button>
                    </div>
                    <div class="col-xs-6 col-lg-6">
                        <button type="button" class="btn btn-primary  btn-block">今週</button>
                    </div>
                    <div class="col-xs-3 col-lg-3">
                        <button type="button" class="btn btn-primary  btn-block">></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-4 col-lg-offset-4" style="margin-top:15px;">
        <table class="table table-bordered table-responsive text-center">
            <thead class="bg-primary">
            <tr>
                <th class="text-center">日付</th>
                <th class="text-center">出勤</th>
                <th class="text-center">退勤</th>
                <th class="text-center">修正</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>7/1</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            <tr>
                <td>7/2</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            <tr>
                <td>7/3</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            <tr>
                <td>7/4</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            <tr>
                <td>7/5</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            <tr>
                <td>7/6</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            <tr>
                <td>7/7</td>
                <td>08:50</td>
                <td>18:12</td>
                <td>修正</td>
            </tr>
            </tbody>
        </table>
    </div>

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-fixed-bottom navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="row row-0">
                <div class="col-xs-12 col-lg-4 col-lg-offset-4">
                    <div class="col-xs-4 col-lg-4">
                        <li><a href="attend_regist.html"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true">
                                    登録</i></a></li>
                    </div>
                    <div class="col-xs-4 col-lg-4">
                        <li><a href="attend_list_trung.html"><i class="fa fa-list-alt fa-lg" aria-hidden="true"> 一覧</i></a>
                        </li>
                    </div>
                    <div class="col-xs-4 col-lg-4">
                        <li><a href="login.html"><i class="fa fa-sign-out fa-lg" aria-hidden="true"> ﾛｸﾞｱｳﾄ</i></a></li>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>

</body>
</html>
