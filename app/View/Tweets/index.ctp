<!-- File: /app/View/Posts/index.ctp -->

<h1>T&W Tweets</h1>
<table>
    <tr>
        <th>ID</th>
		<th>Author</th>
        <th>Tweet</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $requests array, printing out request info -->

    <?php foreach ($tweets as $tweet): ?>
    <tr>
        <td><?php echo $tweet['Tweet']['id']; ?></td>
        <td><?php echo $tweet['Tweet']['author']; ?></td>
        <td><?php echo $tweet['Tweet']['value']; ?></td>
		<td><?php echo $tweet['Tweet']['published']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>