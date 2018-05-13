<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use app\admin\Model\User as Usermodel;
use think\Loader;
class User extends Lock{
    public function select(){
      $search=input('param.search');
      $data=db('user')->where('username','like',"%$search%")->where('delval','1')->paginate(8);
      $this->assign('data',$data);
      $page=$data->render();
      $this->assign('page',$page);
      $tot=db('user')->where('delval','1')->count();
      $this->assign('tot',$tot);
       return view();
    }
    public function ajax_add(){
      $data=input('post.str');
      parse_str($data,$arr);
      $user=new Usermodel;
      // 验证
      $validate=Loader::validate('User');
      if(!$validate->scene('add')->check($arr)){
         $rea=['code'=>0,'info'=>$validate->getError()];
         echo json_encode($rea);
      }else{
        $arr['password']=md5($arr['password']);  
        $res=$user->addM($arr); 
        if($res){
          $arr['id']=$user->id;
          $arr['lastlogin']=0;
          $arr['num']=0;
          $this->assign('dat',$arr);
          $rea=['code'=>1,'info'=>$this->fetch()];
          echo json_encode($rea);
        }else{
          $rea=['code'=>2,'info'=>'添加失败'];
          echo json_encode($rea);
        }

      }

    }
    public function ajax_del(){
      $id=input('post.id');
      // $user=new Usermodel;
      // $rst=$user->delM($id);
      $rst=db('user')->where('id',$id)->update(['delval'=>'0']);
      if($rst){
        echo 1;
      }else{
        echo 0;
      }
     }
     public function ajax_find(){
      $id=input('post.id');
      $data=db('user')->where('id',$id)->find();
      $this->assign('data',$data);
      echo $this->fetch();
     } 
     // 修改
     public function ajax_edit(){
      $data=input('post.str');
      parse_str($data,$arr);
      $arr['password']=md5($arr['password']);  
      $rst=db('user')->where('id',$arr['id'])->update($arr);
      if($rst){
        $arr['lastlogin']=0;
        $arr['num']=0;
        $this->assign('dat',$arr);
        $trid=$arr['id'];
       $dtae=array(
        'cold'=>1,
        'trid'=>$trid,
        'append'=>$this->fetch() 
        );
        $code=json_encode($dtae);
        echo $code;
      }else{
        echo 0;
      }
     }
     // 批量删除
     public function ajax_delAll(){
      $ids=input('post.str');
      $arr=explode(',',$ids);
      foreach ($arr as $key => $value) {
         $rst=db('user')->where(['id'=>$value])->update(['delval'=>'0']);
       }   
      echo $rst;
     }
  
}
