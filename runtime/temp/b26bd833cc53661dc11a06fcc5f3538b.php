<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\AppServ\www\tmall\public/../application/index\view\person\ajax_useradd.html";i:1524483280;}*/ ?>
<tr>
  <td>
    <?php echo $arr['cname']; ?>
  </td>
  <td>
    <?php echo $arr['s_province']; ?><?php echo $arr['s_city']; ?><?php echo $arr['s_county']; ?><?php echo $arr['addr']; ?>
  </td>
  <td>
    <?php echo $arr['noun']; ?>
  </td>
  <td>
   <?php echo $arr['tel']; ?>
  </td>
  <td>
    <p>
      <a href="javascript:;" onclick='userdel(<?php echo $cid; ?>,this)'>删除</a>
    </p>
  </td>
</tr>