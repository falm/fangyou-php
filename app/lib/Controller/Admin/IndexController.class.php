<?php


	/**
	* 
	*/
	class IndexController extends Controller{
		
		function index(){
			echo 'Admin::Index';
			//$this->display();
		}
		
		public function login(){
			
		}
		
		public function logout(){
			
		}
		
		public function menu(){
			
		}
		
		public function main(){
			View::show('index/main');
		}
		
		public function left(){
			View::show('index/left');
		}
		
		public function top(){
			View::show('index/top');
		}
		
		public function welcome(){
			View::show('index/content');
		}

	}
	

?>