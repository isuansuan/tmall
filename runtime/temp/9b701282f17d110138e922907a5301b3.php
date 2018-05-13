<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\AppServ\www\tmall\public/../application/index\view\index\register1.html";i:1523150171;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>天猫注册</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
    <link rel="stylesheet" href="/static/public/css/register1.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
    <script src='/static/public/js/index.js'></script>
</head>
<body>
<div class='main'>
  <div class='reg1_content'>
    <div class='reg1_content_top'>
      <ul>
        <li class='reg1_ulli1'>
          <span class='reg1_i reg_lii'>1</span>
          <span>
            设置用户名
          </span>
        </li>
         <li class='reg1_ulli2'>
          <span class='reg1_i'>2</span>
          <span>
            填写账号信息
          </span>
        </li>
         <li class='reg1_ulli3'>
          <span class='reg1_i'>3</span>
          <span>
            设置支付方式
          </span>
        </li>
         <li class='reg1_ulli4'>
          <span class='reg1_i'>4</span>
          <span>
            注册成功
          </span>
        </li>
      </ul>
    </div>
    <div class='reg1_content_bottom4'>
      <div class='reg1_content_bottom4_A'>
        
      </div>
      <div class='reg1_content_bottom4_B'>
        
      </div>
      <div class='reg1_content_bottom4_C'>
        <a href="<?php echo url('index/index'); ?>">
          <p>
            <span>
              登录名
            </span>
            <span>
              <?php echo \think\Session::get('homeuser'); ?>
            </span>
            <span>
              (你的账号通用于支付宝、天猫、一淘、聚划算、来往、阿里云、阿里巴巴)
            </span>
          </p>
          <p>
            淘宝会员名：<?php echo \think\Session::get('homeuser'); ?>
          </p>
        </a>

      </div>


    </div>
  </div>
  
   
</div>
	
</body>
<script>
</script>

</html>