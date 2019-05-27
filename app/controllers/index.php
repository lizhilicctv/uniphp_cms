<?php
use UNI\tools\Db;
class indexController extends uni{
	
	public function __init(){
		//dump(111);
	}
	
	
	public function index(){
		//dump(!!cache('wo','lllll说的是当时的士大夫史蒂夫2222'));
		//dump(cache('wo',null));
		cache('rm_all');
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