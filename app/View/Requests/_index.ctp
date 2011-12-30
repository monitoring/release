<!-- File: /app/View/Posts/index.ctp -->

<h1>T&W Requests</h1>
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
		<?php foreach ($included_kws as $inc_kw): ?>
			<td><?php echo $inc_kw; ?></td>
		<?php endforeach; ?>
    </tr>
    <?php endforeach; ?>

</table>