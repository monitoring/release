<!-- File: /app/View/Requests/view.ctp -->

<h1><?php echo $request['Request']['title']?></h1>

<p><small>Created: <?php echo $request['Request']['created']?></small></p>

<p><?php echo $request['Request']['description']?></p>

<p>Included Keyword(s):<br>
<?php foreach ($included_kws as $inc_kw): ?>
<?php echo $inc_kw, ';'?>
<?php endforeach ?>
</p>
<p>Excluded Keyword(s):<br>
<?php foreach ($excluded_kws as $exc_kw): ?>
<?php echo $exc_kw, ';'?>
<?php endforeach ?>
</p>

