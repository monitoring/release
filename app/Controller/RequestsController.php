<?php
class RequestsController extends AppController {
    public $name = 'Requests';
	public $uses = array('Request', 'Tweet', 'Keyword');
    public $helpers = array('Html', 'Form');	
	
	function viewActive() {
	 	$this->set('title_for_layout', 'Requests');
	}
	
	public function index() {
		$this->set('requests', $this->Request->find('all'));
	}
	
	public function view($id = null) {
	   	$this->Request->id = $id;
	    $this->set('request', $this->Request->read());
	
		$this->set('included_kws', $this->Keyword->find('list', array(
		        'conditions' => array('Keyword.request_id' => $id, 'Keyword.isIncluded' => 1),
				'fields' => array('Keyword.value'))));
		
		$this->set('excluded_kws', 	$this->Keyword->find('list', array(
			        'conditions' => array('Keyword.request_id' => $id, 'Keyword.isIncluded' => 0),
					'fields' => array('Keyword.value'))));
	}
}
?>