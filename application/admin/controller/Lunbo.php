<?php 
namespace app\admin\controller;
use think\Controller;
use app\admin\Model\Lunbo as Lunbomodel;
class Lunbo extends Lock{
	public function index(){
		$search=input('param.search');
		$data=db('lunbo')->where('href','like',"%$search%")->order('sort','desc')->paginate(8);
		$this->assign('data',$data);

		$page=$data->render();
		$this->assign('page',$page);

		$tot=db('lunbo')->count();
		$this->assign('tot',$tot);
		return view();
	}
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
            $rst=db('lunbo')->insert($data);
            if($rst){
            	$this->success('添加成功',url('index'),'','1');
            }else{
            	$this->error('添加失败');
            }
		}else{
			return view();
		}
		
	}
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/lunbo');
		if($info){
		// 成功上传后 获取上传信息
		// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		echo $info->getSaveName();
		}else{
		// 上传失败获取错误信息
		echo $file->getError();
		}
	}
	public function del($id){
         $lunbo=new Lunbomodel;
         $arr=$lunbo::get($id)->toArray();
         $rst=unlink('./static/upload/lunbo/'.$arr['img']);
         if($rst){
         	$r=$lunbo::destroy($id);
         	if($r){
         		// 这个不读秒
         		$this->redirect(url('index'));
         		// 读秒
         		// $this->success('恭喜您，删除成功',url('index'),'','1');
         	}else{
         	    $this->error('删除失败');
         }
         	
         }
	}
	// 排序
	public function ajax_sort(){
         $data=input('post.');
         $lunbo=new Lunbomodel;
         $rst=$lunbo->save(['sort'=>$data['sort']],['id'=>$data['id']]);
         echo $rst;
	}
	public function edit(){
		$id=input('param.id');
		$data=db('lunbo')->where('id',$id)->find();
		$this->assign('data',$data);
		return view();
	}
	public function update(){
		$data=input('param.');
		if($data['img']){
		  unlink('./static/upload/lunbo/'.$data['oldimg']);
          unset($data['oldimg']);
          $rst=db('lunbo')->where('id',$data['id'])->update($data);
           if($rst){
  				$this->success('恭喜您，修改成功!',url('index'),'','1');
  			}else{
  				$this->error('修改失败!');
  			}
		 }else{
			$data['img']=$data['oldimg'];
			unset($data['oldimg']);
			$rst=db('lunbo')->where('id',$data['id'])->update($data);
			if($rst){
				$this->success('恭喜您，修改成功!',url('index'),'','1');
			}else{
				$this->error('修改失败!');
			}
		}
			
	}
}
 ?>