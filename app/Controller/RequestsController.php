<?php
class RequestsController extends AppController {
    public $name = 'Requests';
	public $uses = array('Request', 'Tweet', 'Keyword');
    public $helpers = array('Html', 'Form');	
	
	public function index() {
		$this->set('requests', $this->Request->find('all'));
		$this->set('tweets', $this->Tweet->find('all'));
	}
}
?>