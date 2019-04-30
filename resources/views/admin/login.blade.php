<!DOCTYPE html>
<html>
<head>
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <style>
        .div{
            border: 1px solid white;
            text-align: center;
            margin-left: 30%;
            margin-right: 30%;
            margin-top: 15%;
            background-color: white;
        }
        .background{
            height: 100%;
            width: 100%;
            background-size: 100% 100%;
        }
    </style>

</head>
<body>
<div class="background">
<form class="form-horizontal" method="post" action="/login">
    {{csrf_field()}}
    <div class="div">
    <h1>登陆</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label" >账号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="account" placeholder="请输入账号">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="请输入密码">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登陆</button>
        </div>
    </div>
    </div>
</form>
</div>
<!-- 动态背景-->
<script type="text/javascript" color="0,0,0" opacity='0.5' zIndex="-1" count="200" src="https://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
</body>
</html>