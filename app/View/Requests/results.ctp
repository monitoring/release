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
		<th>Mood</th>
		<th>Created</th>
    </tr>

    <?php foreach ($tweets as $tweet): ?>
    <tr>
        <td><?php echo $tweet['from_user']; ?></td>
		<?php
			foreach ($keywords['included'] as $kw){
				$text = $tweet['text'];
				$remplace = "<span class=\"occurence\">" . $kw . "</span>";
				$tweet['text'] = str_ireplace($kw, $remplace,$text);
			}
		?>
        <td><?php echo $tweet['text']; ?></td>
		
		<td
		<?php 
			$goodFound = false;
			$badFound = false;
			
			foreach ($moods['good'] as $good)
				if (strpos($tweet['text'], $good) == true)
					$goodFound = true;
							
			foreach ($moods['bad'] as $bad)
					if (strpos($tweet['text'], $bad) == true)
					$badFound = true;
				
			if ($goodFound & $badFound) echo ">";
			if ($goodFound & !$badFound) echo " class=\"goodMood\">";
			if (!$goodFound & $badFound) echo " class=\"badMood\">";
				?>
		</td>
        <td><?php echo $tweet['created_at']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>