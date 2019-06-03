<?php
use UNI\tools\Db;
class indexController extends uni{
	
	public function __init(){
		//dump(111);
	}
	
	
	public function index(){
		cache('kk',"111");
		//cache('rm_all');
		dump(cache('kk'));
		// 
	}
	public function wo(){
		$this->res= Db::name('test')
		->paginate(2)
		->fields('id,name');
		//$li=Db::name('new')->where('id > ?',6)->value('id1');
		//dump(111);
		$this->display();
	}
}