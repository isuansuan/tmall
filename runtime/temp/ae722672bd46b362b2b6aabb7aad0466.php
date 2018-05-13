<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\AppServ\www\tmall\public/../application/index\view\index\register.html";i:1523935675;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>天猫注册</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
  <link rel="stylesheet" href="/static/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
</head>
<style>
.main{
  position: relative;
  height:650px;
}
  .reg_okxieyi{
    width:724px;
    height:425px;
    margin: 0 auto;
    padding: 20px;
    color: #3e3e3e;
    border: 2px solid #dedede;
    border-top: 2px solid #ff4a00;
    background-color: #FFF;
    position: absolute;
    left:300px;
    top:110px;
    z-index: 1;
    /*display:none;*/
  }
  .reg_okxieyi .ks-dialog-content{
    width:700px;
    height:421px;
    margin:0 auto;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-header{
    width:705px;
    height:24px;
    margin-left:6px;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-header h3{
    display:inline-block;
    font-size: 16px;
    font-weight: bold;
    color: #3e3e3e;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-header a{
    display:block;
    float:right;
    text-decoration:none;
    font-weight:1000;
    font-size:30px;
    color:#f00;
    line-height:22px;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body{
    width:680px;
    height:389px;
    margin:0 auto;
    margin-top:5px;
    font-family:Arial;
  }
  .reg_okxieyi .ks-dialog-content strong{
    color:#000;
    font-weight:700;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body p{
    font-size:13px;
    margin-top:10px;
    margin-left:5px;
    line-height:18px;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body p .Astrong{
    text-decoration:underline;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body p a{
    font-weight: 700;
    font-size: 15px;
    color:#ff5b20;;
    text-decoration:none;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body p a:hover{
    text-decoration:underline;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body .AgreementBtn{
    width:180px;
    height:36px;
    background: #ff0036;
    margin:0 auto;
    text-align:center;
    border-radius:5px;
    margin-top:20px;
    cursor: pointer;
  }
  .reg_okxieyi .ks-dialog-content .ks-dialog-body .AgreementBtn span{
    font-size:16px;
    color:#fff;
    line-height:36px;
  }
</style>
<body>
<div class='main'>
  <div class='reg_content'>
    <div class='reg_content_top'>
      <ul>
        <li class='reg_ulli1'>
          <span class='reg_i1'>1</span>
          <span>
            设置用户名
          </span>
        </li>
         <li class='reg_ulli2'>
          <span class='reg_i2'>2</span>
          <span>
            填写账号信息
          </span>
        </li>
         <li class='reg_ulli3'>
          <span class='reg_i3'>3</span>
          <span>
            设置支付方式
          </span>
        </li>
         <li class='reg_ulli4'>
          <span class='reg_i4'>4</span>
          <span>
            注册成功
          </span>
        </li>
      </ul>
    </div>
    <form action="javascipt:;" method='post'>
     <div class='reg_content_bottom1'>
      <div class='reg_content_bottom1_A'>
        <div class='reg_content_bottom1_A_a'>
          <span>
            手机号
          </span>
        </div>
        <div class='reg_content_bottom1_A_b'>
          <select name="" id="">
            <option value="">中国大陆 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +86</option>
            <option value="">中国台湾地区 &nbsp; &nbsp;+886</option>
            <option value="">中国香港 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +852</option>
            <option value="">马来西亚 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +60</option>
             <option value="">新加坡 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +65</option>
          </select>
        </div>
        <div class='reg_content_bottom1_A_c'>
          <input type="text" name='tele' class='reg_tel' placeholder='请输入您的电话号码'>
          <span class='reg_tel_yanzheng'><i>&times;</i> 手机号格式不正确!</span>
        </div>
      </div>
      <div class='reg_content_bottom1_B'>
        <div class='reg_content_bottom1_B_a'>
          <span>
            验证码
          </span>
        </div>
        <div class='reg_content_bottom1_B_b'>
         <img src="<?php echo captcha_src(); ?>" alt="captcha"  onclick="this.src='<?php echo captcha_src(); ?>?rand='+Math.random()+''" />
        </div>
        <div class='reg_content_bottom1_B_c'>
          <input type="text" onblur='ify(this)' name='verify' class='reg_ver'  placeholder='请输入验证码'>
          <span class='verify_yanzheng'><i>&times;</i> 验证码不正确!</span>
        </div>
        
      </div>
      <div class='reg_content_bottom1_C'>
        <div class='reg_content_bottom1_C_a'>
        </div>
        <div class='reg_content_bottom1_C_b'>
          <span>
            下一步
          </span>
        </div>
      </div>
    </div>
    
    <div class='reg_content_bottom2'>
      <div class='reg_content_bottom2_A'>
        <div class='reg_content_bottom2_A_a'>
          <span>
            设置登录密码
          </span>
          
        </div>
        <div class='reg_content_bottom2_A_b'>
          <span>
            登录时验证，保护账号信息
          </span>
        </div>
        
      </div>
      <div class='reg_content_bottom2_B'>
        <div class='reg_content_bottom2_B_a'>
          <span>
            登录密码
          </span>
          
        </div>
        <div class='reg_content_bottom2_B_b'>
         <input type="password"  name='password' class='reg_pass' placeholder='设置您的登录密码'>
         <br>
         <span class='reg_pass_yanzheng'><i>&times;</i> 密码长度至少6位!</span>
        </div>
        
      </div>
      <div class='reg_content_bottom2_C'>
        <div class='reg_content_bottom2_C_a'>
          <span>
            确认密码
          </span>
          
        </div>
        <div class='reg_content_bottom2_C_b'>
         <input type="password" name='rpassword' class='reg_rpass' placeholder='请再次输入您的密码'>
         <br>
         <span class='reg_rpass_yanzheng'><i>&times;</i> 两次密码不一致!
           
         </span>
        </div>
        
      </div>
      <div class='reg_content_bottom2_D'>
        <div class='reg_content_bottom2_D_a'>
          <span>
            设置会员名
          </span>
          
        </div>
      </div>
      <div class='reg_content_bottom2_E'>
        <div class='reg_content_bottom2_E_a'>
          <span>
            登录名
          </span>
          
        </div>
        <div class='reg_content_bottom2_E_b'>
         <input type="text" name='username' class='reg_name' placeholder='会员名一旦设置成功,无法修改' onblur='reguser(this)'>
         <br>
         <span class='reg_name_yanzheng'><i>&times;</i> 用户名长度至少4位!
           
         </span>
         <span class='reg_name_mysql'><i>&times;</i> 用户名存在!
           
         </span>
        </div>
      </div>
      <div class='reg_content_bottom2_F'>
         <div class='reg_content_bottom2_F_a'>
           <input type="button" value="提交">
         </div>
      </div>
      
    </div>
    <div class='reg_content_bottom3'>
      <div class='reg_content_bottom3_A'>
        <div class='reg_content_bottom3_A_a'>
          <span>
            银行卡号
          </span>
          
        </div>
        <div class='reg_content_bottom3_A_b'>
         <input type="text" class='reg_kahao' >
         <span></span>
        </div>
        
      </div>
      <div class='reg_content_bottom3_B'>
       <div class='reg_content_bottom3_B_a'>
         <span>
           持卡人姓名
         </span>
         
       </div>
       <div class='reg_content_bottom3_B_b'>
        <input type="text" class='reg_karen' >
        <span></span>
       </div>
       
        
      </div>
      <div class='reg_content_bottom3_C'>
        <div class='reg_content_bottom3_C_a'>
          <span>
            证件
          </span>
          
        </div>
        <div class='reg_content_bottom3_C_b'>
          <select name="" id="">
            <option value="身份证">身份证</option>
          </select>
          
        </div>
        <div class='reg_content_bottom3_C_c'> 
          <input type="text" class='reg_shenf'>
        </div>
      </div>

      <div class='reg_content_bottom3_D'>
        <div class='reg_content_bottom3_D_a'>
          <span>
            手机号码
          </span>
          
        </div>
        <div class='reg_content_bottom3_D_b'>
         <input type="text" class='reg_shouji' placeholder='此卡在银行预留手机号码'>
         <span>
           
         </span>
        </div>
        <div class='reg_content_bottom3_D_c'>
          <span>
            获取验证码
          </span>
          
        </div>
      </div>
      <div class='reg_content_bottom3_E'>
        <div class='reg_content_bottom3_E_a'>
          
        </div>
        <div class='reg_content_bottom3_E_b'>
         <input type="submit" value="同意协议并确定" class='submitregister'>
         <span>
           
         </span>
        </div>
        <div class='reg_content_bottom3_E_c'>
         <span>
           跳过,到下一步
         </span>
        </div>
      </div>
      <div class='reg_content_bottom3_F'>
        <div class='reg_content_bottom3_F_a'>
          
        </div>
        <div class='reg_content_bottom3_F_b'>
         <span>
           查看
         </span>
         <span>
           《快捷支付服务相关协议》
         </span>
        </div>
      </div>
    </div>
    <div class='register_xiaomi'>
      <a href="">
        <div class='register_xiaomi_content'>
           <img src="/static/public/img/2018-03-05_175148.png" alt="">
           <p>
             有问题?找小蜜
           </p>
        </div>
      </a>
      
    </div>
    </form>
  </div>
  <div class='reg_okxieyi'>
    <div class='ks-dialog-content'>
      <div class='ks-dialog-header'>
        <h3>注册协议</h3>
        <a href="javascript:;" class='closereg_okxieyi'>
          &times;
        </a>
      </div>
      <div class="ks-dialog-body">
        <p>
          <strong>【审慎阅读】</strong>
          您在申请注册流程中点击同意前，应当认真阅读以下协议。
          <strong class='Astrong'>请您务必审慎阅读、充分理解协议中相关条款内容，其中包括：</strong>
        </p>
        <p>
          1、<strong class='Astrong'>与您约定免除或限制责任的条款；</strong>
        </p>
        <p>
          2、<strong class='Astrong'>与您约定法律适用和管辖的条款；</strong>
        </p>
        <p>
          3、<strong class='Astrong'>其他以粗体下划线标识的重要条款。</strong>
        </p>
        <p>
          如您对协议有任何疑问，可向平台客服咨询。
        </p>
        <p>
          <strong>【特别提示】</strong>当您按照注册页面提示填写信息、阅读并同意协议且完成全部注册程序后，即表示您已充分阅读、理解并接受协议的全部内容。如您因平台服务与淘宝发生争议的，适用《淘宝平台服务协议》处理。如您在使用平台服务过程中与其他用户发生争议的，依您与其他用户达成的协议处理。
        </p>
        <p>
          <strong class='Astrong'>阅读协议的过程中，如果您不同意相关协议或其中任何条款约定，您应立即停止注册程序。</strong>
        </p>
        <p>
          <a href="">《淘宝平台服务协议》</a>
        </p>
        <p>
          <a href="">《法律声明及隐私权政策》</a>
        </p>
        <p>
          <a href="">《支付宝服务协议》</a>
        </p>
        <p>
          <div class='AgreementBtn'>
            <span>同意协议</span>
          </div>
        </p>
      </div>
    </div>
  </div>
   
</div>
	
</body>
<script>
// 判断验证码
 function ify(obj){
  verify=$(obj).val();
  $.post('<?php echo url("ajax_ify"); ?>',{yzm:verify},function(data){
     if(data==1){
      $('.reg_ver').data({'s':1});
      $('.verify_yanzheng').hide();
     }else{
      $('.verify_yanzheng').show();
      $(obj).val('');
     }
  });
 }
 // 判断用户名
 function reguser(obj){
  user=$(obj).val();
  $.post('<?php echo url("ajax_user"); ?>',{username:user},function(data){
       if(data==1){
         $('.reg_name_mysql').hide();
         $('.reg_name').data({'b':1});
       }else{
        $('.reg_name_mysql').show();
        $('.reg_name').data({'b':0});
        $(obj).val('');
       }
  });
 }
 // 判断电话号码
 $('.reg_tel').blur(function(){
   val=$(this).val();
   arr=val.match(/^\d{11}$/);
   if(arr){
     $('.reg_tel_yanzheng').css({'display':'none'});
     $('.reg_tel').data({'s':1});
   }else{
      $('.reg_tel_yanzheng').css({'display':'inline'});
      $('.reg_tel').val('');
       $('.reg_tel').data({'s':0});

   }
   
 })
 // 判断第一个页面
 $('.reg_content_bottom1_C_b').click(function(){
     z=$('.reg_ver').data('s');
    s=$('.reg_tel').data('s');
    h=z+s;
    if(h==2){
     $('.reg_content_bottom2').show();
     $('.reg_content_bottom1').hide();
     $('.reg_ulli2').css({'border-bottom':'2px solid #f00'});
     $('.reg_i2').css({'background':'url("/static/public/img/TB15xpqXX-24-24.png")'});
   }else{
     $('.reg_content_bottom2').hide();
     $('.reg_content_bottom1').show();
     $('.reg_content_bottom3').hide();
   }
  

 })
// 判断密码
 $('.reg_pass').blur(function(){
   password=$(this).val();
   if(password.length<6){
     $('.reg_pass_yanzheng').show();
     $('.reg_pass').val('');
     $('.reg_pass').data({'a':0});
   }else{
     $('.reg_pass_yanzheng').hide();
     $('.reg_pass').data({'a':1});
   }
 })
// 判断两个密码是否一致
 $('.reg_rpass').blur(function(){
   password=$('.reg_pass').val();
   rpassword=$(this).val();
   if(rpassword!=password){
     $('.reg_rpass_yanzheng').show();
     $('.reg_rpass').val('');
     $('.reg_rpass').data({'a':0});
   }else{
     $('.reg_rpass_yanzheng').hide();
     $('.reg_rpass').data({'a':1});
   }
 })
 // 判断用户名
 $('.reg_name').blur(function(){
   regname=$(this).val();
   if(regname.length<3){
     $('.reg_name_yanzheng').show();
     $('.reg_name').val('');
     $('.reg_name').data({'a':0});
   }else{
     $('.reg_name_yanzheng').hide();
     $('.reg_name').data({'a':1});
   }
 })
 // 判断第二个页面
 $('.reg_content_bottom2_F_a').click(function(){
   b=$('.reg_pass').data('a');
   c=$('.reg_rpass').data('a');
   d=$('.reg_name').data('a');
    e=$('.reg_name').data('b');
   f=b+c+d+e; 
   if(f==4){
     $('.reg_content_bottom3').show();
     $('.reg_content_bottom1').hide();
     $('.reg_content_bottom2').hide();
     $('.reg_ulli2').css({'border-bottom':'2px solid #f00'});
     $('.reg_ulli3').css({'border-bottom':'2px solid #f00'});
     $('.reg_i3').css({'background':'url("/static/public/img/TB15xpqXX-24-24.png")'});
   }else{
      $('.reg_content_bottom3').hide();
     $('.reg_content_bottom1').hide();
     $('.reg_content_bottom2').show();
   }

 })
// 提交
 $('.submitregister').click(function(){
    b=$('.reg_pass').data('a');
   c=$('.reg_rpass').data('a');
   d=$('.reg_name').data('a');
    e=$('.reg_name').data('b');
    z=$('.reg_ver').data('s');
    s=$('.reg_tel').data('s');
    k=b+c+d+e+z+s;
    if(k==6){
      $('form').attr({'action':'<?php echo url("index/registeradd"); ?>'}).submit();
    }else{
      return false;
    }
 })
 // 协议窗口
 $(window).load(function(){
  $('.reg_okxieyi').show();
 })
 $('.AgreementBtn').click(function(){
  $('.reg_okxieyi').fadeOut(400);
 })
 $('.closereg_okxieyi').click(function(){
   location.href='<?php echo url("Index/index"); ?>'
 })
</script>

</html>