<?php
class RequestsController extends AppController {
    public $name = 'Requests';
	public $uses = array('Request', 'Tweet', 'Keyword');
    public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
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
	
	public function results($id = null) {
	   	$this->Request->id = $id;
	    $this->set('request', $this->Request->read());
	
		$inclKws = $this->Keyword->find('list', array(
		        'conditions' => array('Keyword.request_id' => $id, 'Keyword.isIncluded' => 1),
				'fields' => array('Keyword.value')));
		$this->set('included_kws', $inclKws);
		
		$exclKws = $this->Keyword->find('list', array(
			        'conditions' => array('Keyword.request_id' => $id, 'Keyword.isIncluded' => 0),
					'fields' => array('Keyword.value')));
		$this->set('excluded_kws', $exclKws);
		
		$keywords= array(
			'included' => $inclKws,
			'excluded' => $exclKws
		);
		
		$tweets = $this->Tweet->find('all', compact('keywords'));

		$this->set('tweets', $tweets);
	}
	
	public function add() {
		if($this->request->is('post')){
			
			$requestToSave = array(
				'title' => $this->request->data['Request']['title'],
				'description' => $this->request->data['Request']['description']
			);
			
			if ($this->Request->save($requestToSave)) {
				$newRequestId = $this->Request->id;
				$inclKwToSave = array(
					'value' => $this->request->data['Request']['includedKw'],
					'isIncluded' => 1,
					'request_id' => $newRequestId
				);

				$exclKwToSave = array(
					'value' => $this->request->data['Request']['excludedKw'],
					'isIncluded' => 0,
					'request_id' => $newRequestId
				);
				
				$KeywordsToSave = array($inclKwToSave, $exclKwToSave);
				
				if ($this->Keyword->saveAll($KeywordsToSave)) {
	    			$this->Session->setFlash('Your request has been created!', 'default', array(), 'good');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
		else {
	    	echo "OKKKK";
			$this->Session->setFlash('Unable to create your request!', 'default', array(), 'bad');
	    }
	}
	
	public function stat() {
	}
}
?>