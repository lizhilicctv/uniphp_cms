<?php
use UNI\tools\Db;
class adminController extends uni{
	//前置操作
	public function __init(){
		parent::__init();
		model('manage')->isLogin(); //自动执行 构造方法
	}
	
	public function index()
    {
    	if(request()->isPost()){
    		$data=input('post.');		
			$min= strtotime($data['datemin']);
			$max= strtotime($data['datemax']);
			$data=Db::name('admin')
				    ->whereOr('username','like','%'.$data['key'].'%')
				    ->order('id','ASC')->paginate(10);
			$this->assign('data',$data);
    	}else{
			$data=Db::table('lizhili_admin')
			->alias('a')
			->join('auth_group w','a.role = w.id', 'LEFT')
			->order('a.id','ASC')->field( 'a.id,username,w.title,create_time,update_time,mark,isopen' )->paginate(10);
			$this->assign('data',$data);
    	}
		$count1=db('admin')->count();
		$this->assign('count1', $count1);
    	return $this->fetch();
    }
	 public function add()
    {
    	$admin=new Adminmodel();

		if(request()->isPost()){
    		$data=input('post.');
			$validate = Loader::validate('Admin');
			if(!$validate->check($data)){
				$this->error($validate->getError());
			}
			$info=$admin->add($data);
			if($info == 1){
				return $this->success('添加成功',url('admin/index',['st'=>1]));
			}else{
				$this->error('添加失败了');
			}
    	}
		$res=db('auth_group')->select();
		$this->assign('res',$res);
    	return $this->fetch();
    }
	public function ajax()
    {
    	$data=input('param.');
		if($data['type']=='admin_start'){
			if(db('admin')->where('id',$data['id'])->setField('isopen',1)){
				return 1;//修改成功返回1
			}else{
				return 0;
			}
		}
       	if($data['type']=='admin_stop' and $data['id'] != 1){
			if(db('admin')->where('id',$data['id'])->setField('isopen',0)){
				return 1;//修改成功返回1
			}else{
				return 0;
			}
		}
		if($data['type']=='admin_del' and $data['id'] != 1){
			if(db('admin')->delete($data['id'])){
				return 1;//修改成功返回1
			}else{
				return 0;
			}
		}
		if($data['type']=='admin_all'){
			if(in_array("1", $data['id'])){
				return 0;
			}
			if(db('admin')->delete($data['id'])){
				return 1;//修改成功返回1
			}else{
				return 0;
			}
		}
		return 0;
    }
	public function edit()
    {
    	if(request()->isPost()){
    		$data=input('post.');

			$validate = Loader::validate('Admin');
			if(!$validate->scene('edit')->check($data)){
				$this->error($validate->getError());
			}
			$info=[
				'id'=>$data['id'],
				'username'=>$data['username'],
				'mark'=>$data['mark'],
			];
			$pass=db('admin')->where('id',$data['id'])->field('password')->find();
			if($data['password']!=''){
				$info['password']=md5($data['password']);
			}else{
				$info['password']=$pass['password'];
			}
			if(db('admin')->update($info)){
						
				return $this->success('修改成功',url('admin/index',['st'=>1]));
			}else{
				$this->error('修改失败了');
			}
    	}
		$cid=input('id');
		$data=db('admin')->where('id',$cid)->field('id,username,mark,role')->find();
		$this->assign('data',$data);
		
		$res=db('auth_group')->select();
		$this->assign('res',$res);
       return $this->fetch('edit');
    }
	
	//清除缓存
	public function cahe(){
		//清除缓存
		if(cache('rm_all')){
			$this->success('清除缓存成功',2);
		}else{
			$this->error('清除缓存失败了');
		}
	}
}