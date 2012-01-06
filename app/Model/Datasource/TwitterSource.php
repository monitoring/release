<?php
/**
 * Twitter DataSource
 *
 * Used for reading from Twitter, through models.
 *
 */
App::uses('HttpSocket', 'Network/Http');

class TwitterSource extends DataSource {

    protected $_schema = array(
        'tweets' => array(
            'id' => array(
                'type' => 'integer',
                'null' => true,
                'key' => 'primary',
                'length' => 11,
            ),
            'text' => array(
                'type' => 'string',
                'null' => true,
                'key' => 'primary',
                'length' => 140
            ),
            'status' => array(
                'type' => 'string',
                'null' => true,
                'key' => 'primary',
                'length' => 140
            ),
        )
    );

    public function __construct($config) {
        $auth = "{$config['login']}:{$config['password']}";
        $this->connection = new HttpSocket(
            "http://{$auth}@twitter.com/"
        );
        parent::__construct($config);
    }

    public function listSources() {
        return array('tweets');
    }

    public function read($model, $queryData = array()) {
        if (!isset($queryData['keywords'])) {
            $queryData['keywords']['included'] = 'boeing';
        }
        $url = "http://search.twitter.com/search.json?q=";
        
		foreach ($queryData['keywords']['included'] as $i_kw){
			$url .= $i_kw;
			$url .= "%20";
		}
		
		foreach ($queryData['keywords']['excluded'] as $e_kw){
			$url .= '-';
			$url .= $e_kw;
			$url .= "%20";
		}
		
		$url .= "&result_type=recent";
		
        $response = json_decode($this->connection->get($url), true);

		$results = $response['results'];
		
        return $results;
    }

    public function describe($model) {
        return $this->_schema['tweets'];
    }
}