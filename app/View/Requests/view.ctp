<!-- File: /app/View/Requests/view.ctp -->

<h1>Request Details</h1>

<table>
	<tr>
		<td colspan="2"><h2><?php echo $request['Request']['title']?> <span class="date">Created: <?php echo $request['Request']['created']?></span></h2></td>
	</tr>
	<tr>
		<td colspan="2" id="description"><?php echo $request['Request']['description']?></td>
	</tr>
	<tr>
		<td id="keywords">
			<h3>Included Keyword(s):</h3>
			<?php foreach ($included_kws as $inc_kw): ?>
			<?php echo $inc_kw, ';'?>
			<?php endforeach ?>
		</td>
		<td>
			<h3>Excluded Keyword(s):</h3>
			<?php foreach ($excluded_kws as $exc_kw): ?>
			<?php echo $exc_kw, ';'?>
			<?php endforeach ?>
		</td>
	</tr>
</table>
<div id="buttons_right">
    <div class="button_bleu">
        <?php
        echo $this->Html->link('View Results', array('controller' => 'requests', 
        'action' => 'results',
        $request['Request']['id']));
        ?>
    </div>
    <div class="button_bleu">
        <?php
        echo $this->Html->link('View Stats', array('controller' => 'requests', 
        'action' => 'stat',
        $request['Request']['id']));
        ?>
    </div>
</div>
<div class="return">
	<?php
	echo $this->Html->link('Return', array('controller' => 'requests', 
	'action' => 'index'));
	?>
</div>