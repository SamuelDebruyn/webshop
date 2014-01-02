<?php
    class StaticPagesController extends AppController{
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('home');
			$this->uses[] = 'Category';
		}
    	
		public function home(){
			$this->set('categories', $this->Category->find('all'));
			$this->set('title_for_layout', 'home');
		}
		
    }
?>