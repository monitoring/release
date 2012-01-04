<!-- File: /app/View/Posts/index.ctp -->
<h1>T&W Tweets</h1>
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