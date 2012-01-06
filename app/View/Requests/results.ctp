<h1>Request Results</h1>
<table>
	<tr>
		<td colspan="2"><h2><?php echo $request['Request']['title']?> <span class="date">Created: <?php echo $request['Request']['created']?></span></h2></td>
	</tr>
</table>
<table>
    <tr>
		<th>Author</th>
        <th>Tweet</th>
		<th>Created</th>
    </tr>

    <!-- Here is where we loop through our $requests array, printing out request info -->
    <?php foreach ($tweets as $tweet): ?>
    <tr>
        <td><?php echo $tweet['from_user']; ?></td>
        <td><?php echo $tweet['text']; ?></td>
        <td><?php echo $tweet['created_at']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>