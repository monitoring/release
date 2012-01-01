<?php
class TweetsController extends AppController {
    public $name = 'Tweets';
    public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('tweets', $this->Tweet->find('all'));
	}
}
?>