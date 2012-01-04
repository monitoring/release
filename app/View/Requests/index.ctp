<!-- File: /app/View/Requests/index.ctp -->
<?php echo $this->Session->flash('good'); ?>
<?php echo $this->Session->flash('bad'); ?>
<h1>My Requests</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
		<th>Description</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $requests array, printing out request info -->

    <?php foreach ($requests as $request): ?>
    <tr>
        <td><?php echo $request['Request']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($request['Request']['title'],
				array('controller' => 'requests', 'action' => 'view', $request['Request']['id'])); ?>
        </td>
        <td><?php echo $request['Request']['description']; ?></td>
		<td><?php echo $request['Request']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<div id="new" class="button">
<?php echo $this->Html->link('New Request', array('controller' => 'requests', 'action' => 'add')); ?>
</div>