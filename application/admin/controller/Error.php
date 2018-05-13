<?php
namespace app\admin\controller;
use think\Controller;
class Error extends Controller{
public function _empty(){
//可以自己处理，跳转到相应链接
  $this->redirect(url('Index/index'));

     }
}