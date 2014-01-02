<?php
    class UsersController extends AppController{
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow();
			$this->helpers[] = 'Form';
		}
    	
		public function login(){
			$this->set('title_for_layout', 'Sign in');
			if ($this->request->is('post')){
				if ($this->Auth->login()){
					return $this->redirect($this->Auth->redirectUrl());
        		}
				$this->Session->setFlash(__('Invalid username or password, please try again'));
			}
		}
		
		public function register(){
			$this->set('title_for_layout', 'Sign up');
			if ($this->request->is(array('post', 'put'))) {
				if($this->User->save($this->request->data)){
					$id = $this->User->id;
					$this->request->data['User'] = array_merge(
						$this->request->data['User'],
						array('id' => $id)
					);
		        $this->Auth->login($this->request->data['User']);
		        return $this->redirect(array('controller' => 'users', 'action' => 'home'));
		    	}
			}
		}
		
		public function logout(){
			return $this->redirect($this->Auth->logout());
		}
		
		public function home(){
			$user = $this->User->findById($this->Auth->User('id'));
			$this->set('userData', $user);
		}
		
    }
?>