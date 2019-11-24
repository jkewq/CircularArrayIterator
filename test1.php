<?php

require_once 'CircularArrayIterator.php';

$arr = ['Have', 'A', 'Nice', 'Day'];

$iter = new CircularArrayIterator($arr);
$iter->rewind();

echo "<pre>"; var_dump($arr); echo "</pre>";

for($i=0;$i<=21;$i++) {
	echo $iter->key() . ': ' . $iter->current();
	echo '<br />';
	$iter->next();
}