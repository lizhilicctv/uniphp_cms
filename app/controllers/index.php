<?php
use UNI\tools\Db;
class indexController extends uni{
	
	public function __init(){
		//dump(111);
	}
	
	
	public function index(){
		$res= Db::name('test')
		->paginate(5)
		->where('id > ?',10)
		->fields('id,name');
	
		
		//dump($res[0]);
		//dump($res[1]);
		
		// $res=Db::name('test')->page(3,3)->getall();
		// dump($res);
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