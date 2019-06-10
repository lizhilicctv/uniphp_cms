<?php
use UNI\tools\Db;
class lifeController extends uni{
	public function __init(){
		parent::__init();
	}
	public function index(){
		$this->data=Db::name('article')->where('cateid = ?',4)->paginate(9)->fields();
		$this->all=Db::name('article')->order('click desc')->limit(5)->getall();
		$this->ben=Db::name('article')->where('cateid = ?',4)->limit(5)->getall();
		$this->display();
	}	
	public function show(){
		$this->data=Db::name('article')->where('id = ?',$this->gets[0])->get();
		$this->all=Db::name('article')->order('click desc')->limit(5)->getall();
		$this->ben=Db::name('article')->where('cateid = ?',4)->limit(5)->getall();
		$this->display();
	}	
}