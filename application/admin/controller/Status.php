<?php 
namespace app\admin\controller;
use think\Controller;
class Status extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('status')->where('sname','like',"%$search%")->paginate(8);
		$this->assign('data',$data);

		$page=$data->render();
		$this->assign('page',$page);

		$tot=db('status')->count();
		$this->assign('tot',$tot);
		return view();
	}
	public function add(){
      if(request()->isPost()){
         $data=input('post.');
         $rst=db('status')->insert($data);
         if($rst){
         	$this->redirect(url('Status/index'));
         }else{
         	$this->error('添加失败!',url('Status/add'),'','1');
         }	
      }else{
      	return view();
      }
	}
	public function edit($id){
		$data=db('status')->where('id',$id)->find();
		$this->assign('data',$data);
		return view();
	}
	public function update(){
		$data=input('param.');
		$rst=db('status')->where('id',$data['id'])->update($data);
		if($rst){
			$this->redirect(url('Status/index'));
		}else{
			$this->error('添加失败!',url('Status/index'),'','1');
		}
	}
} 

 ?>