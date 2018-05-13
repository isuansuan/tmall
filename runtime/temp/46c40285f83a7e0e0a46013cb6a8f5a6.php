<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\AppServ\www\tmall\public/../application/index\view\person\evaluate.html";i:1523519008;s:62:"C:\AppServ\www\tmall\application\index\view\Index\header3.html";i:1524212106;s:61:"C:\AppServ\www\tmall\application\index\view\Index\footer.html";i:1521526231;}*/ ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>我的评论!</title>
  <link href="/static/public/img/TB1XlF3RpXXXXc6XXXXXXXXXXXX-16-16.png" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="/static/public/css/index.css">
    <link rel="stylesheet" href="/static/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/public/css/iconfont.css">
	<script src='/static/bs/js/jquery.min.js'></script>
  <script src='/static/public/js/evaluate.js'></script>
  <script src="/static/up/jquery.uploadify.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="/static/up/uploadify.css">
</head>
<style>
  .queueimgdiv {
    width:40px;
    height:40px;
    float:left;
    margin-right:5px;
    border:1px solid #ccc;
  }
  .uploadify-button{
    opacity:0!important;
  }
</style>
<body>
<div class='main'>
   <div class='header'>
 <div class='both'>
   <div class='left'>
     <p>
        <i class="iconfont icon-wxbzhuye"></i>
        <a href="<?php echo url('index/index'); ?>">天猫首页</a>
       </p>
       <p class='miao'>
         喵，欢迎来天猫
       </p>
       <?php if(\think\Session::get('homeid')): ?>
        <p>
          <a href="<?php echo url('person/index'); ?>" style='color:#ff0036;font-weight:bold'><?php echo \think\Session::get('homeuser'); ?></a>
        </p>
        <p>
          <a href="<?php echo url('index/loginout'); ?>">退出</a>
        </p>
       <?php else: ?>
        <p>
          <a href="<?php echo url('index/login'); ?>">请登录</a>
        </p>
        <p>
          <a href="<?php echo url('index/register'); ?>">免费注册</a>
        </p>
       <?php endif; ?>
   </div>
   <div class='right'>
     <div class='right_top'>
       <div class='right_a'>
         <div class='top'>
           <p class='wife'>
             <i class="iconfont icon-category"></i>
             <span>网站导航</span>
           </p>
         </div>
         <div class='bottom'>
           <div class='bottom_a'>
             <p>
               <span>热点推荐</span>
               <span>Hot</span>
             </p>
             <ul>
               <li>
                 <a href="">天猫超市</a>
               </li>
               <li>
                 <a href="">喵鲜生</a>
               </li>
               <li>
                 <a href="">科技新品</a>
               </li>
               <li>
                 <a href="">女装新品</a>
               </li>
               <li>
                 <a href="">酷玩街</a>
               </li>
               <li>
                 <a href="">内衣新品</a>
               </li>
               <li>
                 <a href="">试美妆</a>
               </li>
               <li>
                 <a href="">运动新品</a>
               </li>
               <li>
                 <a href="">时尚先生</a>
               </li>
               <li>
                 <a href="">精明妈咪</a>
               </li>
               <li>
                 <a href="">吃乐会</a>
               </li>
               <li>
                 <a href="">企业采购</a>
               </li>
               <li>
                 <a href="">会员积分</a>
               </li>
               <li>
                 <a href="">天猫国际</a>
               </li>
               <li>
                 <a href="">品质频道</a>
               </li>
             </ul>
           </div>
           <div class='bottom_b'>
             <p>
               <span>行业市场</span>
               <span>Market</span>
             </p>
             <ul>
               <li>
                 <a href="">美妆</a>
               </li>
               <li>
                 <a href="">电器</a>
               </li>
               <li>
                 <a href="">女装</a>
               </li>
               <li>
                 <a href="">男装</a>
               </li>
               <li>
                 <a href="">女鞋</a>
               </li>
               <li>
                 <a href="">男鞋</a>
               </li>
               <li>
                 <a href="">内衣</a>
               </li>
               <li>
                 <a href="">箱包</a>
               </li>
               <li>
                 <a href="">运动</a>
               </li>
               <li>
                 <a href="">母婴</a>
               </li>
               <li>
                 <a href="">家装</a>
               </li>
               <li>
                 <a href="">医药</a>
               </li>
               <li>
                 <a href="">食品</a>
               </li>
               <li>
                 <a href="">配饰</a>
               </li>
               <li>
                 <a href="">汽车</a>
               </li>
             </ul>
           </div>
           <div class='bottom_c'>
             <p>
               <span>服务指南</span>
               <span>Help</span>
             </p>
             <ul>
               <li>
                 <a href="">帮助中心</a>
               </li>
               <li>
                 <a href="">品质保障</a>
               </li>
               <li>
                 <a href="">特色服务</a>
               </li>
               <li>
                 <a href="">7天退换货</a>
               </li>
             </ul>
           </div>
         </div>
       </div>
       <div class='right_b'>
         <div class='top'>
           <p class='wife'>
             <a href="#">商家支持</a>
           </p>
         </div>
         <div class='bottom1'>
           <div class='bottom1_top'>
             <p>
               商家：
             </p>
             <ul class='left'>
               <li>
                 <a href="">
                   商家中心
                 </a>
               </li>
               <li>
                 <a href="">
                   商家入驻
                 </a>
               </li>
               <li>
                 <a href="">
                   商家品控
                 </a>
               </li>
               <li>
                 <a href="">
                   天猫智库
                 </a>
               </li>
             </ul>
             <ul class='right'>
               <li>
                 <a href="">
                   商家中心
                 </a>
               </li>
               <li>
                 <a href="">
                   商家入驻
                 </a>
               </li>
               <li>
                 <a href="">
                   商家品控
                 </a>
               </li>
               <li>
                 <a href="">
                   天猫智库
                 </a>
               </li>
             </ul>
           </div>
           <div class='bottom1_bottom'>
             <p>
               帮助：
             </p>
             <ul class='left'>
               <li>
                 <a href="">帮助中心</a>
               </li>
             </ul>
             <ul class='right'>
               <li>
                 <a href="">问商友</a>
               </li>
             </ul>
           </div>
           
           
         </div>
       </div>
       
       <div class='top'>
         <p>
           <a href="#">淘宝网</a>
         </p>
         
       </div>
       <div class='top'>
         <p>
           <i class="iconfont icon-iconfontshouji"></i><a href="#">手机版</a>
         </p>
       </div>
       <div class='right_c'>
         <div class='top' >
           <p class='wife' >
             <a href="<?php echo url('Person/collect'); ?>">收藏夹</a>
           </p>
         </div>
         <div class='bottom2'>
           <p>
             <a href="<?php echo url('Person/collect'); ?>">收藏的宝贝</a>
           </p>
           <p>
             <a href="">收藏的店铺</a>
           </p>
           
         </div>
       </div>
       
       <div class='top'>
         <p>
           <i class="iconfont icon-cart"></i>
           <a href="<?php echo url('car/index'); ?>">购物车
            </a>
         </p>
       </div>
       <div class='right_d'>
         <div class='top'>
           <p class='wife'>
             <a href="<?php echo url('person/index'); ?>">我的淘宝</a>
           </p>
         </div>
         <div class='bottom3'>
           <p>
             <a href="<?php echo url('Person/indent'); ?>">已买到的宝贝</a>
           </p>
           <p>
             <a href="<?php echo url('Person/footmark'); ?>">我的足迹</a>
           </p>
         </div>
       </div>          
       
     </div>

   </div>
   
   <div class='clear'></div>
 </div>  
</div>
 <div class='clear'></div>
    <div class='clear'></div>
    <div class='evaluateContent'>
      <div class='evaluateTop'>
      </div>
      <div class='evaluateDrop'>
        <span></span>
        <a href="">评价须知</a>
      </div>
      <div class='evaluateShopdetail'>
        <div class='evaluatehd'>
          <span class='evaluatehdA'>店</span>
          <span>铺</span>
          <span>信</span>
          <span>息</span>
        </div>
        <div class='evaluatedd'>
          <a href="">
            <img src="/static/public/img/T1tGSUXjpnXXXXXXXX-70-70.png" alt="">
          </a>
        </div>
        <div class='evaluatead'>
          <h5>
            中国天猫自营
          </h5>
          <p>被评卖家:<a href="">中国天猫自营</a></p>
          <span>宝贝与描述相符:<i></i>4.9分</span>
        </div>
      </div>
      <div class='evaluateListhd'>
        <h5>店铺动态评分</h5>
        <label for="">
          <input type="checkbox" name="" id=""><span>全部匿名评论</span>
        </label>
      </div>
      <div class='evaluateListbd'>
        <div class='evaluatelevel'>
          <div class='evaluatelevelA'>
            <span>宝贝</span>
          </div>
           <div class='evaluatelevelB'>
            <span>宝贝与描述相符(打分匿名)</span>
          </div>
        </div>
        <div class='evaluateRate'>
          <div class='evaluateRateA'>
            <div class='evaluateRateAImg'>
              <a href="">
                <img src="/static/upload/shop/<?php echo $shop['img']; ?>" alt="">
              </a>
            </div>
            <div class='evaluateRateAMiaoshu' style='margin-left:10px'>
              <a href=""><?php echo $shop['sname']; ?><br><?php echo $shop['introduce']; ?></a>
            </div>
          </div>
          <form action="javascript:;">
          <div class='evaluateRateB'>
            <div class='evaluateRateBXing'>
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
            </div>
            <div class='evaluateRateBPL'>
              <textarea name="comment" id="plcomment" class='evaluateRateBPLtextarea'></textarea>
              <p>还可以输入<span class='evaluateRateBPLZishu'>350</span>字</p>
            </div>
            <div class='evaluateRateBTJPL' style='position: relative;' >
              <img src="/static/public/img/shangchuan.jpg" alt="" style='position: absolute;top:0px;left:0px;'>
             <input type="hidden" name="img" id='img'>
             <input id="file_upload" name="" type="file" multiple="true">

            </div>
            <div class='evaluateRateupimg' style='width:145px;height:43px;float:left;margin-top:2px'>
              
            </div>
            
          </div>
        </div>
        <div class='evaluateRating'>
          <div class='evaluateRatingA'>
            <h5>店铺动态评分</h5>
          </div>
          <div class='evaluateRatingB'>
            <p class='evaluateRatingBFuWuImg'>买家的服务态度 &nbsp;<span>
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
            </span></p>
            <p class='evaluateRatingBFaHuoImg'>买家的发货速度 &nbsp;<span>
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
              <img src="/static/public/img/T1j_SkXl0fXXXXXXXX-19-19.png" alt="">
            </span></p>
            <div id='shouzhi'></div>
            <div class='evaluateRatingC'>
              <i>小提示：点击星星就能打分了，该打分完全是匿名滴。</i>
            </div>
          </div>
        </div>
        <div class='evaluateSubmitbox'>
          <div class='evaluateSubmitboxA'>
            <input type="button" onclick="upcomment(<?php echo $shop['id']; ?>)" value="发表评论">
          </div>
        </div>
      </form>
      </div>
    </div>
    <div class='clear'></div>
    
<div class=' footer'>
    <div class='footer_a'>
        <ul>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_152732.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_152908.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_152932.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/static/public/img/2018-01-19_153026.png" alt="">
                </a>
            </li>
        </ul>
        
    </div>
    <div class='footer_b'>
        <div class='footer_b_b'>
           <div class='footer_b_a'>
               <dl>
                   <dt>购物指南</dt>
                   <dd>
                       <a href="">
                           免费注册
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           开通支付宝
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           支付宝支付
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>电器城保障</dt>
                   <dd>
                       <a href="">
                           花呗分期
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           预约配送
                       </a>
                   </dd>
                   <dd>
                        <a href="">
                           送货入户
                       </a>
                   </dd>
                   <dd>
                        <a href="">
                           全国联保
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>支付方式</dt>
                   <dd>
                       <a href="">
                           支付宝快捷支付
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           支付宝余额付款
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           支付宝钱包付款
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           货到付款
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           新人支付
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>商家服务</dt>
                   <dd>
                       <a href="">
                           入驻天猫电器城
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           加入电器城服务保障
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           电器城喵言喵语圈子
                       </a>
                   </dd>
                   <dd>
                       <a href="">
                           电器城商家管理规范
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt>
                       手机电器城
                   </dt>
                   <dd>
                       <img src="/static/public/img/T1N64NFrxcXXb.IvUG-116-112.png" alt="">
                   </dd>
               </dl>
               
           </div>
            
        </div>
       
    </div>
</div>
</div>
</body>
<script>
$(function() {
    $('.queueimgdiv').hide();
    $('#file_upload').uploadify({
        'swf'      : '/static/up/uploadify.swf',
        'uploader' : "<?php echo url('ajaxAddCommentImg'); ?>",
        'fileObjName':'file',
         'uploadLimit'   :10, 
          'multi'    : true,  
        onUploadSuccess:function(file,data,response){
          str="<div class='queueimgdiv queeimgdivtwo'>";
          str+="<img src='/static/upload/comment/"+data+"' alt='' width='100%' height='100%'>";
          str+="</div>";
          $('.queueimgdiv').show();
          $('.queueimgdiv').css({'display':'block'});
          $('.queue').css({'height':'60px','border':'none'});
          $('#qyeue').css({'border':'none'});
          $('.evaluateRateupimg').append(str);
            $('#shouzhi').hide();
            $('#shouzhi').append(','+data);
            // s=$('.shouzhi').html();
            // $('#img').val(s);
        }
    });
    $('.uploadify').css({'height':'35px!important','width':'35px','margin-top':'0px','cursor':'pointer!important'});
      
     
});
function upcomment(id){
 zhi=$('#shouzhi').html();
 pinglun=$('#plcomment').val();
 $.post('<?php echo url("ajax_comment"); ?>',{id:id,zhi:zhi,pinglun:pinglun},function(data){
     if(data==1){
       location.href='<?php echo url("Person/indent5"); ?>';
     }else{
      return false;
     }
 });
}
</script>

</html>