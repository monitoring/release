<?php
class Tweet extends AppModel {
    public $name = 'Tweet';
	public $belongsTo = 'Request';
}
?>