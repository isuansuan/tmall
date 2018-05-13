<?php 
namespace app\admin\controller;
use think\Controller;
class Data extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('user')->where('username','like',"%$search%")->where('delval','0')->paginate(8);
		$this->assign('data',$data);
		$page=$data->render();
		$this->assign('page',$page);
		$tot=db('user')->where('delval','0')->count();
		$this->assign('tot',$tot);
		 return view();
	}
	// 恢复
	public function ajax_datafu(){
      $id=input('post.id');
      $rst=db('user')->where('id',$id)->update(['delval'=>'1']);
      if($rst){
      	echo 1;
      }else{
      	echo 0;
      }
	}
	// 批量恢复
	public function ajax_dataAll(){
		$ids=input('post.str');
		$arr=explode(',',$ids);
		foreach ($arr as $key => $value) {
			$rst=db('user')->where('id',$value)->update(['delval'=>'1']);
		}
		echo $rst;
	}
	// 删除
	public function ajax_del(){
		$id=input('post.id');
		$rst=db('user')->where('id',$id)->delete();
		if($rst){
			echo 1;
		}else{
			echo 0;
		}
	}
	// 批量删除
	public function ajax_delAll(){
         $ids=input('post.str');
         $str=db('user')->delete($ids);
         echo $str;
	}




	// 管理员数据恢复
	public function manger(){
		$search=input('param.search');
		$data=db('manger')->where('username','like',"%$search%")->where('delval','0')->paginate(8);
		$this->assign('data',$data);
		$page=$data->render();
		$this->assign('page',$page);
		$tot=db('manger')->where('delval','0')->count();
		$this->assign('tot',$tot);
		return view();
	}
	// 恢复
	public function ajax_Mdatafu(){
		$id=input('post.id');
		$rst=db('manger')->where('id',$id)->update(['delval'=>'1']);
		echo $rst;
	}
	// 批量恢复
	public function ajax_MdataAll(){
		$ids=input('post.str');
		$arr=explode(',',$ids);
		foreach ($arr as $key => $value) {
			$rst=db('manger')->where('id',$value)->update(['delval'=>'1']);
		}
		echo $rst;

	}
	// 删除
	public function ajax_Mdel(){
		$id=input('post.id');
		$rst=db('manger')->where('id',$id)->delete();
		if($rst){
			echo 1;
		}else{
			echo 0;
		}
	}
	// 批量删除
	public function ajax_MdelAll(){
		$ids=input('post.str');
		$rst=db('manger')->where('id',$ids)->delete();
		echo $rst;

	}
}
 ?>