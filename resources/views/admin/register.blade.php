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
    <form class="form-horizontal" method="post" action="/register">
        {{csrf_field()}}
        <div class="div">
            <h1>注册</h1>
            <div class="form-group">
                <label for="inputNickname" class="col-sm-2 control-label" >昵称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="nickname" placeholder="请输入昵称">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAccount" class="col-sm-2 control-label" >账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="account" placeholder="请输入账号">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">注册</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- 动态背景-->
<script type="text/javascript" color="0,0,0" opacity='0.5' zIndex="-1" count="200" src="https://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
</body>
</html>