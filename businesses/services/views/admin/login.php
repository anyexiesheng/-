<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <link rel="stylesheet" href="<?= \Yii::getAlias('@web') ?>/login/bootstrap.css" />
    <style>
        body {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            min-height: 500px;
            min-width: 1000px;
        }
        .container-fluid {
            position: absolute;
            height: 100%;
            width: 100%;
            background-image: url('../../web/login/login-bg.jpg') !important;
            /*background-image: url({$Think.const.PUBLIC_IMG_URL}/login-bg-h.png);*/
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
        .login-box-p {
            font-family: "微软雅黑";
            position: absolute;
            left:50%;
            top: 50%;
            margin-left:-250px;
            margin-top: -281px;
            width: 500px;
            text-align: center;
        }
        .login-box-p h1 {
            color: #fefefe;
            font-weight: 900;
            margin-bottom: 60px;
        }
        .login-box-p h1 small {
            color: #b3b3b3;
            font-weight: 100;
        }
        .login-box-p h2 {
            color: #000;
            font-size: 14px;
            margin-top: 40px;
        }
        .login-box {
            text-align: left;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 15px;
            background: #fff;
            padding: 15px;
            width: 360px;
        }
        .form1 {
        }
        .form1 h4 {
            padding-bottom: 15px;
        }
        .glyphicon-remove {
            color: #ccc;
            z-index: 3;
            cursor:pointer;
        }
        .yanzhengma input[type=text] {
            width: 80px;
            margin-right:15px;
        }
        .yanzhengma img {
            width: 100px;
            margin-right: 10px;
        }
        #updatscancodeloginIMG {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0;
            width: 100%;
            height:100%;
            min-height: 300px;
        }
        .nav-tabs li {
            width: 50%;
            text-align: center;
        }
        #tabpanel1, #tabpanel2 {
            padding-top: 10px;
        }
        .nav-tabs {
            border-bottom: none;
        }
        .nav-tabs a {
            border: none!important;
            outline: rgb(109, 109, 109) none 0px;
            color: #666;
            font-size: 18px;
            font-family: "microsoft yahei";
            text-align: center;
        }
        .nav-tabs a:hover {
            background: none!important;
            border: none!important;
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            border: none!important;
            background: #fff!important;
            color: #E4393c!important;
            font-weight: 900!important;
            font-family: "黑体"!important;
            font-size: 20px!important;
        }
        .nav-tabs > li.active a {
            border: none!important;
        }
        .btn-lan {
            display: block;
            background: linear-gradient(0deg,#289ecb,#46d1ee);
            border-radius: 5px;
            color: #fff!important;
            font-family: "微软雅黑";
            font-size: 15px;
            font-weight: 600;
            text-decoration: none!important;
            text-align: center;
            line-height: 40px;
            margin: 15px auto 10px;
        }
        .input-group-addon {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: normal;
            line-height: 1;
            color: #555;
            text-align: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-right: none;
            border-radius: 4px;
        }
        label {
            font-weight: 900;
            font-family: "微软雅黑";
            margin-top: 5px;
        }
        .form-control {
            border-left: none;
            background-color: #fff!important;
        }
        #login {
            margin-top: 20px;
        }
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px white inset;
            border: 1px solid #CCC!important;
        }
    </style>

</head>
<body>
<div class="container-fluid22" style="height:100%;background: url(/login/login-bg.jpg)">
    <div class="login-box-p">
        <h1 class="text-center">
            狼义办公系统
            <small class="center-block"></small>
        </h1>
        <div class="login-box">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tabpanel1">
                    <form class="form1">
                        <label>用户名：<span class="nameError" style="color: red;"></span></label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                                <input class="form-control" id="username" type="text" placeholder="请输入用户名">
                                <input name="_csrf-backend" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken?>">
                            </div>
                        </div>
                        <label>密码：<span class="passError" style="color: red;"></span></label>                     
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                <input class="form-control" id="password" type="password" placeholder="请输入密码">
                            </div>
                            <span id="tishi" class="help-block" style="display: none;color: red;">用户名或密码错误！</span>
                        </div>
                        <a href="#" id="login" class="btn-lan">登录</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
	$('.btn-lan').on('click',function(){
		var username = $('#username').val();
		var password = $('#password').val();
		var backend=$('#_csrf').val();
		$.ajax({
        type:'post',
        url: '/admin/login',
        data:{
        	'username':username,
        	'password':password,
        	'_csrf-backend':backend
        },
        dataType: 'json',   
        success:function(success){
         console.log(success);
         if(success.username != null){
         	 $('.nameError').html(success.username[0]);
         }
		if(success.password != null){
         	 $('.passError').html(success.password[0]);
         } 
        },
        error:function(error){
         console.log(error);
        }
      });
	})
    document.onkeydown =cdk;
    function cdk(){
        if(event.keyCode ==13){
            document.getElementById("login").click();
        }
    }
//        parent.location.reload()你知道你要去向哪儿，即使高山泥沼也不会使你驻足；
</script>
</html>