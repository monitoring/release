<?php
class Request extends AppModel {
    public $name = 'Request';
	public $hasMany = 'Tweet';
	
	public $validate = array(
		'title' => array(
	     	'rule' => 'notEmpty'
		),
	   	'description' => array(
	       	'rule' => 'notEmpty'
	    )
	);
}
?>