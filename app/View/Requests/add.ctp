<!-- File: /app/View/Requests/add.ctp -->
<h1>New Request</h1>
<?php
echo $this->Form->create('Request');
echo $this->Form->input('title');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('includedKw', array('label' => 'Included Keyword'));
echo $this->Form->input('excludedKw', array('label' => 'Excluded Keyword'));
echo $this->Form->end('Save Request');
?>